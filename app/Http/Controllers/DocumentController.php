<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Str;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;

class DocumentController extends Controller
{
    //
    public function __construct()
    {
    }
    public function index()
    {
        return view('document.index');
    }
    public function detail(Request $request)
    {
        // dd($request->all());
        $document_number = $request->document_number;
        $small_document_number = Str::lower($document_number);
        $url = "https://search.sunbiz.org/Inquiry/CorporationSearch/ByDocumentNumber";

        $httpClient = new \GuzzleHttp\Client();
        $response = $httpClient->post($url, [
            'form_params' => [
                'SearchTerm' => $document_number
            ]
        ]);

        $html = (string) $response->getBody();
        //
        // dd($html);
        $details = [];

        $dom = new \DOMDocument();
        libxml_use_internal_errors(true); // Suppress errors due to malformed HTML
        $dom->loadHTML($html);
        libxml_clear_errors();

        $xpath = new \DOMXPath($dom);

        // Extract corporation name
        $corpNameNodes = $xpath->query("//div[@class='detailSection corporationName']/p[2]");
        if ($corpNameNodes->length > 0) {
            $details['name'] = trim($corpNameNodes->item(0)->nodeValue);
        }

        // Extract filing information
        $filingInfoNodes = $xpath->query("//div[@class='detailSection filingInformation']//div");
        foreach ($filingInfoNodes as $node) {
            $labels = $xpath->query(".//label", $node);
            $values = $xpath->query(".//span", $node);
            for ($i = 0; $i < $labels->length; $i++) {
                $label = trim(str_replace(':', '', $labels->item($i)->nodeValue));
                $value = trim($values->item($i)->nodeValue);
                $details[strtolower(str_replace(' ', '_', $label))] = $value;
            }
        }

        // Extract principal address
        $principalAddressNodes = $xpath->query("//div[@class='detailSection']//span[contains(text(), 'Principal Address')]/following-sibling::span//div");
        if ($principalAddressNodes->length > 0) {
            $details['principal_address'] = trim($principalAddressNodes->item(0)->nodeValue);
            $details['principal_address'] = $this->parseAddress($details['principal_address']);
        }

        // Extract mailing address
        $mailingAddressNodes = $xpath->query("//div[@class='detailSection']//span[contains(text(), 'Mailing Address')]/following-sibling::span//div");
        if ($mailingAddressNodes->length > 0) {
            $details['mailing_address'] = trim($mailingAddressNodes->item(0)->nodeValue);
            $details['mailing_address'] = $this->parseAddress($details['mailing_address']);
        }

        // Extract registered agent name and address
        $registeredAgentNodes = $xpath->query("//div[@class='detailSection']//span[contains(text(), 'Registered Agent Name & Address')]/following-sibling::span[1]");
        if ($registeredAgentNodes->length > 0) {
            // Extract registered agent name
            $details['registered_agent_name'] = trim($registeredAgentNodes->item(0)->nodeValue);

            // Extract and parse the address
            $addressNode = $xpath->query("//div[@class='detailSection']//span[contains(text(), 'Registered Agent Name & Address')]/following-sibling::span[2]//div");
            if ($addressNode->length > 0) {
                $addressText = trim($addressNode->item(0)->nodeValue);
                $parsedAddress = $this->parseAddress($addressText); // Implement parseAddress function accordingly
                $details['registered_agent_address'] = $parsedAddress;
            }
        }

        // Extract authorized persons detail
        $authorizedPersonsNodes = $xpath->query("//div[@class='detailSection']//span[contains(text(), 'Authorized Person(s) Detail')]/following-sibling::span//div");
        $authorizedPersons = [];
        foreach ($authorizedPersonsNodes as $node) {
            $authorizedPersons[] = trim($node->nodeValue);
        }
        if (!empty($authorizedPersons)) {
            $details['authorized_persons'] = $authorizedPersons;
            $processed_addresses = $this->processAddresses($details['authorized_persons']);
            $details['authorized_persons'] = $processed_addresses;
        }
        // dd($details);
        if(!empty($details) == true){
            $document = [];
            $document = [
                'id' => $details['document_number'],
                'company' => $details['name'],
                'owner' => $details['registered_agent_name']
            ];
            Session::put('detail', $details);
            $value = Session::get('detail');
            // $html = view('document.detail_table', compact('document'))->render();
            Session::flash('message', $document);
            return Redirect::back();
        }else{
            return Redirect::back();
        }
    }

    public function parseAddress($address)
    {
        // Clean up the address by removing leading/trailing whitespace and reducing multiple spaces to a single space
        $cleanAddress = preg_replace('/\s+/', ' ', trim($address));

        // Adjust regex to correctly capture the street, city, state, and zip code
        $pattern = '/^(.+?)\s+([A-Za-z]+),\s+([A-Z]{2})\s+(\d{5})$/';
        if (preg_match($pattern, $cleanAddress, $matches)) {
            return [
                'street' => trim($matches[1]),
                'city' => trim($matches[2]),
                'state' => $matches[3],
                'zip' => $matches[4],
            ];
        } else {
            return null; // or handle the error as needed
        }
    }
    function processAddresses($authorized_persons)
    {
        $processed_addresses = [];

        foreach ($authorized_persons as $address) {
            // Split the address by lines
            $lines = preg_split('/\r\n|\r|\n/', $address, -1, PREG_SPLIT_NO_EMPTY);

            // Extract street, city, state, and zip
            if (count($lines) > 1) {
                $street = trim($lines[0]);
                $city_state_zip = trim($lines[1]);

                // Split city, state, zip by comma and whitespace
                $parts = preg_split('/\s*,\s*/', $city_state_zip);

                if (count($parts) === 2) {
                    $city = $parts[0];
                    $state_zip = $parts[1];

                    // Split state and zip by whitespace
                    $state_zip_parts = preg_split('/\s+/', $state_zip);

                    if (count($state_zip_parts) === 2) {
                        $state = $state_zip_parts[0];
                        $zip = $state_zip_parts[1];

                        // Store the processed address
                        $processed_addresses[] = [
                            "street" => $street,
                            "city" => $city,
                            "state" => $state,
                            "zip" => $zip
                        ];
                    }
                }
            }
        }

        return $processed_addresses;
    }
}
