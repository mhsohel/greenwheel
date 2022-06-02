@extends('frontend.layouts.master')
@section('title','Home')
@section('content')
<div class="container">
    <div class="TodaysWinnerSec">
        <div class="row">
            <div class="col-md-6">
                
            </div>
            <div class="col-md-6">
                <div class="TopDrawLink">
                    <h1 class="hero-text">সরাসরি ড্র দেখতে ক্লিক করুন </h1>
                    <ul>
                        <li><a href="#" class="icoFacebook"><i class="fab fa-facebook-f"></i></a></li>
                        <li><a href="#" class="icoYoutube"><i class="fab fa-youtube"></i></a></li>
                        <li><a href="#" class="icoWhatsapp"><i class="fab fa-whatsapp"></i></a></li>
                    </ul>
                </div>
                <div class="DWinnerImg">
                    <img src="{{asset('assets/img/top-img-2.jpg')}}" alt="image" title="image" class="img-fluid">
                </div>
                <div class="DWinnerInfo">
                    <p>মোস্তাক আহমেদ </p>
                    <p>গ্রাম: কালীবাড়ি, থানা: মুকসুদপুর, জেলা: বগুড়া</p>
                    <p>মোবাইল: ০১৭৬২১০৮১০৮</p>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="DateSection">
        <div class="row">
            <div class="col-sm-3">
                <div class="DDateList">
                    <a href="#">
                        <h2>Daily</h2>
                    </a>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="DDateList">
                    <a href="#">
                        <h2>Weekly</h2>
                    </a>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="DDateList">
                    <a href="#">
                        <h2>Monthly</h2>
                    </a>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="DDateList">
                    <a href="#">
                        <h2>Yearly</h2>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="CountdownSec">
        <div class="row">
            <div class="col-lg-4 offset-lg-4 col-sm-12">
                <div class="CountdownTable">
                    <h3>54,444,545,546</h3>
                    <p>In Winnings since 1995 </p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-5 col-sm-12">
                <div class="DLoeryPrize">
                    <h3>লটারী প্রাইজ ১০০ টাকা </h3>
                </div>
                <div class="DBuyButton">
                    <a href="#"><i class="fas fa-shopping-cart"></i> BuyNow</a>
                </div>
            </div>
            <div class="col-lg-7 col-sm-12">
                <div class="DWinnerImg2">
                    <img src="{{asset('assets/img/p50-black.png')}}" alt="image" title="image" class="img-fluid">
                </div>
            </div>
        </div>
    </div>
</div>
@endsection