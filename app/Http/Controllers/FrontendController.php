<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\Regulation;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index()
    {
        return view('frontend.pages.index');
    }
    public function contact(){
        $contacts = Contact::where('status',1)->get();
        return view('frontend.pages.contact',compact('contacts'));
    }
    public function billPay(){
        return view('frontend.pages.bill-pay');
    }
    public function report(){
        return view('frontend.pages.report');
    }
    public function rules(){
        $regulations = Regulation::all();
        return view('frontend.pages.rules',compact('regulations'));
    }
}
