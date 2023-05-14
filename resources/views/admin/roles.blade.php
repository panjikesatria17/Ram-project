@extends('admin.layouts-admin.master')
@section('title','Dashboard')
@push('css')
<link rel="shortcut icon" href="{{ asset('template/assets/images/favicon.ico') }}">

<!-- Layout config Js -->
<script src="{{ asset('template/assets/js/layout.js') }}"></script>
<!-- Bootstrap Css -->
<link href="{{ asset('template/assets/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
<!-- Icons Css -->
<link href="{{ asset('template/assets/css/icons.min.css') }}" rel="stylesheet" type="text/css" />
<!-- App Css-->
<link href="{{ asset('template/assets/css/app.min.css') }}" rel="stylesheet" type="text/css" />
<!-- custom Css-->
<link href="{{ asset('template/assets/css/custom.min.css') }}" rel="stylesheet" type="text/css" />
@endpush
@include('admin.layouts-admin.sidebar')
@section('page-title','Roles')
@section('page-sub')
@section('content')
    <!-- auth page content -->
    <div class="auth-page-content">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="text-center mt-sm-5 pt-4 mb-4">
                        <div class="mb-sm-5 pb-sm-4 pb-5">
                            <img src="assets/images/comingsoon.png" alt="" height="120" class="move-animation">
                            </div>
                            <div class="mb-5">
                                <h1 class="display-2 coming-soon-text">Coming Soon</h1>
                            </div>

                            <div class="mt-5">
                                <h3>Sedang Dalam Proses Penngerjaan</h3>
                                <p class="text-muted">Akan Automatis berubah jika selesai 😊</p>
                            </div>

                            <div class="input-group countdown-input-group mx-auto my-4">
                                <input type="email" class="form-control border-light shadow" placeholder="Enter your email address" aria-label="search result" aria-describedby="button-email">
                                <button class="btn btn-success" type="button" id="button-email">Send<i class="ri-send-plane-2-fill align-bottom ms-2"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end row -->

        </div>
        <!-- end container -->
    </div>
    <!-- end auth page content -->
@endsection
@include('admin.layouts-admin.footer')
@include('admin.layouts-admin.setting')
@push('js')
    <!-- JAVASCRIPT -->
    <script src="{{ asset('template/assets/libs/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('template/assets/libs/simplebar/simplebar.min.js') }}"></script>
    <script src="{{ asset('template/assets/libs/node-waves/waves.min.js') }}"></script>
    <script src="{{ asset('template/assets/libs/feather-icons/feather.min.js') }}"></script>
    <script src="{{ asset('template/assets/js/pages/plugins/lord-icon-2.1.0.js') }}"></script>
    <script src="{{ asset('template/assets/js/plugins.js') }}"></script>

    <!-- particles js -->
    <script src="{{ asset('template/assets/libs/particles.js/particles.js') }}"></script>
    <!-- particles app js -->
    <script src="{{ asset('template/assets/js/pages/particles.app.js') }}"></script>

    <!-- Countdown js -->
    <script src="{{ asset('template/assets/js/pages/coming-soon.init.js') }}"></script>
@endpush