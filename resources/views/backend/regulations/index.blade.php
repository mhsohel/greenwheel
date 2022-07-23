@extends('backend.master')

@section('title','regulations')


@push('css')

@endpush
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
              <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
              <li class="breadcrumb-item active">Regulations</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">

            <!-- /.card -->

            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Regulation</h3>
                <a href="{{ route('admin.regulations.create') }}"><h3 class="card-title float-right">Create Regulation</h3></a>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th class="text-center">#</th>
                            <th class="text-center">Regulations</th>

                            <th class="text-center">Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($regulations as $key=>$regulation)
                            <tr>
                                <td class="text-center text-muted">#{{ $key + 1 }}</td>

                                <td class="text-center">{!! $regulation->regulation !!}</td>

                                <td class="text-center">

                                    <a class="btn btn-info btn-sm" href="{{ route('admin.regulations.edit',$regulation->id) }}"><i
                                            class="fas fa-edit"></i>
                                        <span>Edit</span>
                                    </a>

                                    <form action="{{ route('admin.regulations.destroy',$regulation->id) }}"
                                        method="POST" style="display: inline;">
                                        @csrf()
                                        @method('DELETE')
                                        <button type="submit" onclick="return confirm('Are your sure?')" class="btn btn-danger btn-sm">
                                            <i class="fas fa-trash-alt"></i>
                                            <span>Delete</span>
                                        </button>
                                    </form>


                                </td>
                            </tr>
                        @endforeach

                  </tbody>

                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->




@endsection


@push('js')


@endpush
