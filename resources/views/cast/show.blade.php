@extends('template.master')

@push('css')
    <link href="{{ asset('CoolAdmin/css/font-face.css') }}" rel="stylesheet" media="all">
    <link href="{{ asset('CoolAdmin/vendor/font-awesome-4.7/css/font-awesome.min.css') }}" rel="stylesheet" media="all">
    <link href="{{ asset('CoolAdmin/vendor/font-awesome-5/css/fontawesome-all.min.css') }}" rel="stylesheet" media="all">
    <link href="{{ asset('CoolAdmin/vendor/mdi-font/css/material-design-iconic-font.min.css') }}" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="{{ asset('CoolAdmin/vendor/bootstrap-4.1/bootstrap.min.css') }}" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="{{ asset('CoolAdmin/vendor/animsition/animsition.min.css') }}" rel="stylesheet" media="all">
    <link href="{{ asset('CoolAdmin/vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css') }}" rel="stylesheet" media="all">
    <link href="{{ asset('CoolAdmin/vendor/wow/animate.css') }}" rel="stylesheet" media="all">
    <link href="{{ asset('CoolAdmin/vendor/css-hamburgers/hamburgers.min.css') }}" rel="stylesheet" media="all">
    <link href="{{ asset('CoolAdmin/vendor/slick/slick.css') }}" rel="stylesheet" media="all">
    <link href="{{ asset('CoolAdmin/vendor/select2/select2.min.css') }}" rel="stylesheet" media="all">
    <link href="{{ asset('CoolAdmin/vendor/perfect-scrollbar/perfect-scrollbar.css') }}" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="{{ asset('CoolAdmin/css/theme.css') }}" rel="stylesheet" media="all">
@endpush

@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>DataTables</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ route('cast.index') }}">Home</a></li>
              <li class="breadcrumb-item active">DataTables</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
    <div class="row">
  <!-- left column -->
  <div class="col-md-12">
    <!-- general form elements -->
    <div class="card card-primary">
      <!-- /.card-header -->
      <!-- form start -->
      <form action="{{ route('cast.store') }}" method="POST">
        @csrf
        <div class="card-body">
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label for="nama">Nama Pemeran</label>
                <input name="nama" type="text" class="form-control" id="nama"  placeholder="Nama Pemeran" value="{{ $cast['nama'] }}" @disabled(true)>
              </div>

              <div class="form-group">
                <label for="nama">Umur</label>
                <input name="umur" type="number" class="form-control" id="nama"  placeholder="Umur Pemeran" value="{{ $cast['umur']}}" @disabled(true)>
              </div>

            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label for="nama">Biografi Pemeran</label>
                <textarea name="bio" id="bio" class="form-control" cols="30" rows="5" placeholder="Biografi Pemeran" @disabled(true)>{{ $cast['bio'] }}</textarea>
              </div>

            </div>
          </div>
          <div class="px-3 d-flex justify-content-between align-items-center">
            <a href="{{ route('cast.index') }}" class="btn btn-primary">Kembali</a>
          </div>
        </div>
      </form>
    </div>
    <!-- /.card -->
  </div>
</div>
</div>
@endsection

@push('js')
    <!-- Jquery JS-->
    <script src="{{ asset('CoolAdmin/vendor/jquery-3.2.1.min.js') }}"></script>
    <!-- Bootstrap JS-->
    <script src="{{ asset('CoolAdmin/vendor/bootstrap-4.1/popper.min.js') }}"></script>
    <script src="{{ asset('CoolAdmin/vendor/bootstrap-4.1/bootstrap.min.js') }}"></script>
    <!-- Vendor JS       -->
    <script src="{{ asset('CoolAdmin/vendor/slick/slick.min.js') }}">
    </script>
    <script src="{{ asset('CoolAdmin/vendor/wow/wow.min.js') }}"></script>
    <script src="{{ asset('CoolAdmin/vendor/animsition/animsition.min.js') }}"></script>
    <script src="{{ asset('CoolAdmin/vendor/bootstrap-progressbar/bootstrap-progressbar.min.js') }}">
    </script>
    <script src="{{ asset('CoolAdmin/vendor/counter-up/jquery.waypoints.min.js') }}"></script>
    <script src="{{ asset('CoolAdmin/vendor/counter-up/jquery.counterup.min.js') }}">
    </script>
    <script src="{{ asset('CoolAdmin/vendor/circle-progress/circle-progress.min.js') }}"></script>
    <script src="{{ asset('CoolAdmin/vendor/perfect-scrollbar/perfect-scrollbar.js') }}"></script>
    <script src="{{ asset('CoolAdmin/vendor/chartjs/Chart.bundle.min.js') }}"></script>
    <script src="{{ asset('CoolAdmin/vendor/select2/select2.min.js') }}">
    </script>

    <!-- Main JS-->
    <script src="{{ asset('CoolAdmin/js/main.js') }}"></script>
@endpush