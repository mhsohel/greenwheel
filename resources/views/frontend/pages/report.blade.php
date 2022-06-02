@extends('frontend.layouts.master')
@section('title','Report')
@section('content')
<div class="container">
    <div class="DateSection mt-2">
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
    <div class="row">
        <div class="col-lg-12">
            <div class="DReportSec table-responsive">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                        <th style="width: 20%;">Image</th>
                        <th style="width: 20%;">Contact</th>
                        <th style="width: 20%;">Adress</th>
                        <th style="width: 20%;">Prize Name</th>
                        <th style="width: 20%;">Video</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                        <td><img src="{{asset('assets/img/user-13.jpg')}}" alt="image" title="image" class="img-fluid"></td>
                        <td><p>মোস্তাক আহমেদ </p>
                    <p>গ্রাম: কালীবাড়ি, থানা: মুকসুদপুর, জেলা: বগুড়া</p>
                    <p>মোবাইল: ০১৭৬২১০৮১০৮</p></td>
                        <td><p>মোস্তাক আহমেদ </p>
                    <p>গ্রাম: কালীবাড়ি, থানা: মুকসুদপুর, জেলা: বগুড়া</p>
                    <p>মোবাইল: ০১৭৬২১০৮১০৮</p></td>
                        <td>স্যামসাং এস ১০</td>
                        <td><a href="https://www.youtube.com/watch?v=-PF-r4RBlhQ">https://www.youtube.com/watch?v=-PF-r4RBlhQ</a></td>
                        </tr>
                        <tr>
                        <td><img src="{{asset('assets/img/user-13.jpg')}}" alt="image" title="image" class="img-fluid"></td>
                        <td><p>মোস্তাক আহমেদ </p>
                    <p>গ্রাম: কালীবাড়ি, থানা: মুকসুদপুর, জেলা: বগুড়া</p>
                    <p>মোবাইল: ০১৭৬২১০৮১০৮</p></td>
                        <td><p>মোস্তাক আহমেদ </p>
                    <p>গ্রাম: কালীবাড়ি, থানা: মুকসুদপুর, জেলা: বগুড়া</p>
                    <p>মোবাইল: ০১৭৬২১০৮১০৮</p></td>
                        <td>স্যামসাং এস ১০</td>
                        <td><a href="https://www.youtube.com/watch?v=-PF-r4RBlhQ">https://www.youtube.com/watch?v=-PF-r4RBlhQ</a></td>
                        </tr>
                        <tr>
                        <td><img src="{{asset('assets/img/user-13.jpg')}}" alt="" title="" class="img-fluid"></td>
                        <td><p>মোস্তাক আহমেদ </p>
                    <p>গ্রাম: কালীবাড়ি, থানা: মুকসুদপুর, জেলা: বগুড়া</p>
                    <p>মোবাইল: ০১৭৬২১০৮১০৮</p></td>
                        <td><p>মোস্তাক আহমেদ </p>
                    <p>গ্রাম: কালীবাড়ি, থানা: মুকসুদপুর, জেলা: বগুড়া</p>
                    <p>মোবাইল: ০১৭৬২১০৮১০৮</p></td>
                        <td>স্যামসাং এস ১০</td>
                        <td><a href="https://www.youtube.com/watch?v=-PF-r4RBlhQ">https://www.youtube.com/watch?v=-PF-r4RBlhQ</a></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection