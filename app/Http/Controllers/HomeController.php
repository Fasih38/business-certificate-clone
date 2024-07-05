<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function contact(){
        return view('contact');
    }
    public function about(){
        return view('about');
    }
    public function florida_certificate_of_status(){
        return view('florida_certificate_of_status');
    }
    public function irs_ein_registration_service(){
        return view('irs_ein_registration_service');
    }
    public function pricing(){
        return view('pricing');
    }
    public function refund(){
        return view('refund');
    }
    public function privacy(){
        return view('privacy');
    }
    public function terms(){
        return view('terms');
    }
}
