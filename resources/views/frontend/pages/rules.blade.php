@extends('frontend.layouts.master')
@section('title','Rules')
@section('content')
<div class="container">
    <div class="DBorder3">
        <div class="row">

            @foreach ($regulations as $item)


            <div class="col-lg-6 col-sm-12">
                <div class="DRulesSec">
                   {!! $item->regulation !!}
                </div>
            </div>
            @endforeach

        </div>
    </div> 
</div>
@endsection
