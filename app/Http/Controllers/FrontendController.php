<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index()
    {
        return view('frontend.pages.index');
    }
    public function contact(){
        return view('frontend.pages.contact');
    }
    public function billPay(){
        return view('frontend.pages.bill-pay');
    }
    public function report(){
        return view('frontend.pages.report');
    }
    public function rules(){
        return view('frontend.pages.rules');
    }
}
