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
<div class="main-content">
    <div class="section__content section__content--p30">
        <div class="container-fluid">
            <div class="row m-t-30">
                <div class="col-md-12">
                    <!-- DATA TABLE-->
                    <div class="table-responsive m-b-36">
                        <table class="table table-borderless table-data3">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama</th>
                                    <th>Umur</th>
                                    <th>Action</th>
                                  </tr>
                            </thead>
                            <tbody>
                                @forelse ($casts as $key => $value)
                                    <tr>
                                        <td>{{ $key + 1 }}</td>
                                        <td>{{ $value->nama }}</td>
                                        <td>{{ $value->umur }}</td>
                                        <td><form action="{{ route('cast.destroy', $value->id) }}" method="POST">
                                            <a href="{{ route('cast.show', $value->id) }}" class="btn btn-sm btn-info">Detail</a>
                                            {{-- @if(Auth::check())
                                            @can('isAdmin') --}}
                                            <a href="{{ route('cast.edit', $value->id) }}" class="btn btn-sm btn-warning">Edit</a>
                                            @csrf
                                            @method('DELETE')
                                            <input type="submit" class="btn btn-sm btn-danger my-1" value="Delete">
                                            {{-- @endcan --}}
                                        </form>
                                        {{-- @endif --}}
                                    </tr>
                                @empty
                                <tr>
                                    <td colspan="4" class="text-center">No data available</td>
                                  </tr>
                                @endforelse                                                            
                            </tbody>
                        </table>
                    </div>
                    <!-- END DATA TABLE-->
                </div>
            </div>
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