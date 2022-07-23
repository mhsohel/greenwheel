@extends('frontend.layouts.master')
@section('title','Contact')
@section('content')
<div class="container">
    <div class="DBorder3">
        <div class="row">


            <div class="col-lg-3 col-sm-12">
                <div class="DAddressSec">
                    <p>Name:{{ $user->name }}</p>
                    <p>email : {{ $user->email }}</p>

            </div>

            @auth
            <a href="{{ route('logout') }}" class="nav-link" onclick="event.preventDefault();
            document.getElementById('logout-form').submit();">
                <i class="fas fa-sign-out-alt mr-2"></i>

                <p>
                    Log Out

                </p>
            </a>

            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
            </form>
            @endauth
    </div>
</div>
@endsection
