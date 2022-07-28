@extends('frontend.layouts.master')
@section('title','Contact')
@section('content')
<div class="container">





            <div class="card" >

                <div class="card-body">
                  <h5 class="card-title">Welcome {{ $user->name }}</h5>




                <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item" role="presentation">
                      <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true">Home</button>
                    </li>
                    <li class="nav-item" role="presentation">
                      <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false">Profile Update</button>
                    </li>
                    <li class="nav-item" role="presentation">
                      <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact" type="button" role="tab" aria-controls="contact" aria-selected="false">Password Change</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        @auth
                        <a href="{{ route('logout') }}" class="nav-link" onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">


                            <button >Log Out</button>



                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                        @endauth
                    </li>
                  </ul>
                  <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                        <img src="{{ asset('images/backend') }}/{{ $user->avatar }}" alt="" height="200" width="200" >
                    </div>
                    {{-- Start Profile Update --}}
                    <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                        <form method="POST" action="{{ route('user.profile.update') }}"
                        class="form-horizontal" enctype="multipart/form-data">
                        @csrf
                        <div class="card-body">

                            <div class="form-group row">
                                <label for="inputName" class="col-sm-2 col-form-label">Name</label>
                                <div class="col-sm-10">
                                    <input  type="text"
                                        class="form-control @error('current_password') is-invalid @enderror"
                                        name="name" value="{{ $user->name}}">

                                    @error('current_password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="inputName" class="col-sm-2 col-form-label">Email</label>
                                <div class="col-sm-10">
                                    <input  type="email"
                                        class="form-control @error('current_password') is-invalid @enderror"
                                        name="email" value="{{ $user->email}}">

                                    @error('current_password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="inputName" class="col-sm-2 col-form-label">Address</label>
                                <div class="col-sm-10">
                                    <input  type="text"
                                        class="form-control @error('current_password') is-invalid @enderror"
                                        name="address" value="{{ $user->address}}">

                                    @error('current_password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>


                            <div class="form-group">




                                <div>
                                    <input type="file" name="avatar" placeholder="Choose image"
                                        id="image">
                                    @error('image')
                                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                    @enderror
                                    <img id="preview-image-before-upload"
                                        src="https://www.riobeauty.co.uk/images/product_image_not_found.gif"
                                        alt="preview image" style="max-height: 250px;">
                                </div>

                            </div>

                        </div>
                        <!-- /.card-body -->

                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>


                    </div>
                    {{-- End Profile Update --}}
                    <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">

                        <form method="POST" action="{{ route('change.userpassword') }}"
                        class="form-horizontal">
                        @csrf
                        <div class="form-group row">
                            <label for="inputName" class="col-sm-2 col-form-label">Current
                                Password</label>
                            <div class="col-sm-10">
                                <input id="current_password" type="password"
                                    class="form-control @error('current_password') is-invalid @enderror"
                                    name="current_password" required>

                                @error('current_password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputName" class="col-sm-2 col-form-label">New Password</label>
                            <div class="col-sm-10">
                                <input id="password" type="password"
                                    class="form-control @error('password') is-invalid @enderror"
                                    name="password" required autocomplete="new-password">

                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputName" class="col-sm-2 col-form-label">Confirmed
                                Password</label>
                            <div class="col-sm-10">
                                <input id="password-confirm" type="password" class="form-control"
                                    name="password_confirmation" required autocomplete="new-password">
                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>


                        <div class="form-group row">
                            <div class="offset-sm-2 col-sm-10">
                                <button type="submit" class="btn btn-danger">Update</button>
                            </div>
                        </div>
                    </form>

                    </div>
                  </div>

                </div>
              </div>





</div>
@endsection
