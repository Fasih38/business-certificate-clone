@if (Session::has('message'))
@php
$document = Session::get('message');
@endphp
<style>
    table tbody tr td{
        color:#6b7280 !important;
        font-size: 1.5rem;
    }
    table thead tr th{
        font-size: 1.5rem;
    }
    table {
    width: 100%;
    border-collapse: collapse;
}

th, td {
    padding: 8px;
    text-align: left;
    /* border-bottom: 1px solid #ddd; */
}

.border-top td {
    border-top: 1px solid #ddd; /* or any desired style */
}

</style>
<div class="show_result">
    <div class="">
        <div class="">
            <div class="">
                <table class="" style="width: 97%;margin: 40px auto">
                    <thead style="border-bottom: 1px solid #ddd;">
                        <tr style="border-bottom: 1px solid #ddd;text-align: left;">
                            <th scope="col"
                                class="">#</th>
                            <th scope="col"
                                class="">Document
                            </th>
                            <th scope="col" class="">Company
                            </th>
                            <th scope="col" class="">Owner
                            </th>
                            <th scope="col" class="">Company
                                Type</th>
                            <th scope="col" class=""><span
                                    class="sr-only"></span></th>
                        </tr>
                    </thead>
                    <tbody class="">
                        <tr style="text-align: left;" class="border-top">
                            <td class="" style="padding:22px 0px">1
                            </td>
                            <td class="" style="padding:22px 0px">{{@$document['id']}}</td>
                            <td class="" style="padding:22px 0px">{{@$document['company']}}</td>
                            <td class="" style="padding:22px 0px">{{@$document['owner']}}</td>
                            <td class="" style="padding:22px 0px">{{@$document['owner']}}</td>
                            <td
                                class="" style="padding:10px 0px;text-align:right;">
                                <a href="https://fldocs.org/order?identification_number={{$document['id']}}"
                                    class="" style="background-color: #10b981;color:#fff;border:0px;padding:10px 20px;border-radius:7px;cursor:pointer;text-decoration:none">Select</a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endif
