@extends('frontend.layouts.master')
@section('title','Contact')
@section('content')
<div class="container">
    <div class="DBorder3">
        <div class="row">
            @foreach ($contacts as $item)



            <div class="col-lg-6 col-sm-12">
                <div class="DAddressSec">
                    <p>{{ $item->name }}</p>
                    <p>{{ $item->address }}</p>
                    <p>মোবাইল: {{ $item->contactno }}</p>
                    <p>মেইল: {{ $item->email }}</p>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
@endsection
