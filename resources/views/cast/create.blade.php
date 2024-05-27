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
<div class="card">
    <div class="card-header">
      <strong>Basic Form</strong> Elements
    </div>
    <div class="card-body card-block">
      <form action="{{ route('cast.store') }}" method="POST">
        @csrf
        {{-- Nama Input --}}
        <div class="row form-group">
          <div class="col col-md-3">
            <label for="nama" class="form-label">Nama</label>
          </div>
          <di v class="col-12 col-md-9">
            <input type="text" name="nama" class="form-control @error('nama') is-invalid @enderror" id="nama" placeholder="Enter Nama" value="{{ old('nama') }}">
            <small class="help-block form-text">Please enter your name.</small>
            @error('nama')
              <span class="error invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
              </span>
            @enderror
          </di>
        </div>
  
        {{-- Umur Input --}}
        <div class="row form-group">
          <div class="col col-md-3">
            <label for="umur" class="form-label">Umur</label>
          </div>
          <div class="col-12 col-md-9">
            <input type="number" name="umur" class="form-control @error('umur') is-invalid @enderror" id="umur" placeholder="Enter Umur" value="{{ old('umur') }}">
            <small class="help-block form-text">Please enter your age (numbers only).</small>
            @error('umur')
              <span class="error invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
              </span>
            @enderror
          </div>
        </div>
  
        {{-- Bio Text Area --}}
        <div class="row form-group">
          <div class="col col-md-3">
            <label for="bio" class="form-label">Bio</label>
          </div>
          <div class="col-12 col-md-9">
            <textarea name="bio" id="bio" cols="30" rows="10" class="form-control @error('bio') is-invalid @enderror" placeholder="Enter Bio">{{ old('bio') }}</textarea>
            @error('bio')
              <span class="error invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
              </span>
            @enderror
          </div>
        </div>
  
        <div class="card-footer">
          <button type="submit" class="btn btn-primary btn-sm">
            <i class="fa fa-dot-circle-o"></i> Submit
          </button>
          <button type="reset" class="btn btn-danger btn-sm" onclick="resetForm()">
            <i class="fa fa-ban"></i> Reset
          </button>
        </div>
      </form>
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