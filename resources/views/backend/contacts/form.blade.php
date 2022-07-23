@extends('backend.master')
@push('css')

@endpush

@section('title','Contac')

@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Address</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('admin.contacts.index') }}">Addresss</a></li>
                        <li class="breadcrumb-item active">Create Address</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <!-- left column -->
                <div class="col-md-6">
                    <!-- general form elements -->
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">{{ __((isset($contact) ? 'Edit' : 'Create New') . ' Address') }}</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                            <!-- form start -->
            <form role="form" id="userFrom" method="POST"
            action="{{ isset($contact) ? route('admin.contacts.update',$contact->id) : route('admin.contacts.store') }}"
            enctype="multipart/form-data">
            @csrf
            @if (isset($contact))
            @method('PUT')
            @endif
            <div class="row">

                        <div class="card-body">

                            <div class="card-body">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Name</label>
                                    <input type="text" class="form-control" name="name" value="{{ $contact->name ?? ''  }}"
                                    field-attributes="required autofocus">
                                @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{$message}} </strong>
                                </span>
                                @enderror
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Address</label>
                                    <input type="text" class="form-control" name="address" value="{{ $contact->address ?? ''  }}"
                                    field-attributes="required autofocus">
                                @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{$message}} </strong>
                                </span>
                                @enderror
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Mobile No</label>
                                    <input type="text" class="form-control" name="contactno" value="{{ $contact->contactno ?? ''  }}"
                                    field-attributes="required autofocus">
                                @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{$message}} </strong>
                                </span>
                                @enderror
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputEmail1">Email</label>
                                    <input type="text" class="form-control" name="email" value="{{ $contact->email ?? ''  }}"
                                    field-attributes="required autofocus">
                                @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{$message}} </strong>
                                </span>
                                @enderror
                                </div>

                                <div class="form-group">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="status" value="1" @isset($contact)
                                        {{ $contact->status == 1 ? 'checked' : ''  }}@endisset>
                                        <label class="form-check-label">Active</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="status" value="0" @isset($contact)
                                            {{ $contact->status == 0 ? 'checked' : ''  }}@endisset>
                                            <label class="form-check-label">Deactive</label>
                                            </div>
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputEmail1">Serial</label>
                                    <input type="text" class="form-control" name="serial" value="{{ $contact->serial ?? ''  }}"
                                    field-attributes="required autofocus">
                                @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{$message}} </strong>
                                </span>
                                @enderror
                                </div>

                            <div>
                                <button type="submit" class="cursor">
                                    @isset($contact)
                                    <i class="fas fa-arrow-circle-up"></i>
                                    update
                                    @else
                                    <i class="fas fa-plus-circle"></i>
                                    create
                                    @endisset
                                </button>

                            </div>


                        </div>
                        <!-- /.card-body -->

                    <!-- /.card -->
                </div>

            </div>
        </form>
                    </div>
                    <!-- /.card -->
                    <!--/.col (right) -->
                </div>
                <!-- /.row -->
            </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->







@endsection
@push('js')

@endpush
