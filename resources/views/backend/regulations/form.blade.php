@extends('backend.master')
@push('css')
<!-- summernote -->
<link rel="stylesheet" href="{{ asset('backend/plugins/summernote/summernote-bs4.min.css')}}">
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
                    <h1>Regulation</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('admin.regulations.index') }}">Regulations</a></li>
                        <li class="breadcrumb-item active">Create Regulation</li>
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
                <div class="col-md-8">
                    <!-- general form elements -->
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">{{ __((isset($regulation) ? 'Edit' : 'Create New') . ' Regulations') }}</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                            <!-- form start -->
            <form role="form" id="userFrom" method="POST"
            action="{{ isset($regulation) ? route('admin.regulations.update',$regulation->id) : route('admin.regulations.store') }}"
            enctype="multipart/form-data">
            @csrf
            @if (isset($regulation))
            @method('PUT')
            @endif
            <div class="row">

                        <div class="card-body">

                            <div class="card-body">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Regulations</label>
                                    <div class="card-body">
                                        <textarea id="summernote" name="regulation" placeholder="something goes here">
                                            @isset($regulation)
                                            {{ $regulation->regulation  }} @endisset
                                        </textarea>
                                      </div>
                                @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{$message}} </strong>
                                </span>
                                @enderror
                                </div>




                            <div>
                                <button type="submit" class="cursor">
                                    @isset($regulation)
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
<!-- Summernote -->
<script src="{{ asset('backend/plugins/summernote/summernote-bs4.min.js')}}"></script>
<script>
    $(function () {
      // Summernote
      $('#summernote').summernote()

      // CodeMirror
      CodeMirror.fromTextArea(document.getElementById("codeMirrorDemo"), {
        mode: "htmlmixed",
        theme: "monokai"
      });
    })
  </script>
@endpush
