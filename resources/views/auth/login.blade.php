@extends('master')
@push('css')
    <link rel="shortcut icon" type="image/png" href="{{ asset('/') }}dist/images/logos/favicon.ico" />
    <!-- Core Css -->
    <link  id="themeColors"  rel="stylesheet" href="{{ asset('/') }}dist/css/style.min.css" />
@endpush
@section('page')
    <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-sidebartype="full" data-sidebar-position="fixed" data-header-position="fixed">
        <div class="position-relative overflow-hidden radial-gradient min-vh-100">
            <div class="position-relative z-index-5">
                <div class="row">
                    <div class="col-xl-7 col-xxl-8">
                        <a href="/" class="text-nowrap logo-img d-block px-4 py-9 w-100">
                            <img src="{{ asset('/') }}landingpage/dist/images/logos/logo-sw.png" width="180" alt="">
                        </a>
                        <div class="d-none d-xl-flex align-items-center justify-content-center" style="height: calc(100vh - 80px);">
                            <img src="{{ asset('/') }}dist/images/backgrounds/login-security.svg" alt="" class="img-fluid" width="500">
                        </div>
                    </div>
                    <div class="col-xl-5 col-xxl-4">
                        <div class="authentication-login min-vh-100 bg-body row justify-content-center align-items-center p-4">
                            <div class="col-sm-8 col-md-6 col-xl-9">
                                <h2 class="mb-3 fs-7 fw-bolder">Selamat datang di UD Sinar Wahyu</h2>
                                <p class=" mb-9">Dasbor Admin Anda</p>

                                <div class="position-relative text-center my-4">
                                    <p class="mb-0 fs-4 px-3 d-inline-block bg-white text-dark z-index-5 position-relative">Silahkan Masuk</p>
                                    <span class="border-top w-100 position-absolute top-50 start-50 translate-middle"></span>
                                </div>
                                <form method="POST" action="{{ route('login') }}" id="frm_login">
                                    @csrf
                                    <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label">Username</label>
                                        <input type="email" name="email" value="{{ old('email') }}" required autofocus class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                    </div>
                                    <div class="mb-4">
                                        <label for="exampleInputPassword1" class="form-label">Password</label>
                                        <input type="password" name="password" class="form-control" id="exampleInputPassword1" required autofocus autocomplete="current-password">
                                    </div>
                                    <div class="d-flex align-items-center justify-content-between mb-4">
                                        <div class="form-check">
                                            <input class="form-check-input primary" type="checkbox" value="" id="flexCheckChecked" checked>
                                            <label class="form-check-label text-dark" for="flexCheckChecked">
                                                Ingat Perangkat ini
                                            </label>
                                        </div>
                                        <!-- <a class="text-primary fw-medium" href="./authentication-forgot-password.html">Lupa Password ?</a> -->
                                    </div>
                                    @if ($errors->any())
                                        @foreach($errors->all() as $error)
                                            <div class="alert alert-danger alert-dismissible bg-danger text-white border-0 fade show" role="alert">
                                                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="alert" aria-label="Close"></button>
                                                <strong>Error - </strong> {{ $error }}
                                            </div>
                                        @endforeach
                                    @endif
                                    <a href="javascript:;" onclick="document.getElementById(`frm_login`).submit()" class="btn btn-primary w-100 py-8 mb-4 rounded-2">Masuk</a>
                                    {{-- <div class="d-flex align-items-center justify-content-center">
                                         <p class="fs-4 mb-0 fw-medium">New to Modernize?</p>
                                         <a class="text-primary fw-medium ms-2" href="./authentication-register.html">Create an account</a>
                                     </div>--}}
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
@stop
@push('js')
    <!--  Import Js Files -->
<script src="{{ asset('/') }}dist/libs/jquery/dist/jquery.min.js"></script>
<script src="{{ asset('/') }}dist/libs/simplebar/dist/simplebar.min.js"></script>
<script src="{{ asset('/') }}dist/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
<!--  core files -->
<script src="{{ asset('/') }}dist/js/app.min.js"></script>
<script src="{{ asset('/') }}dist/js/app.init.js"></script>
<script src="{{ asset('/') }}dist/js/app-style-switcher.js"></script>
<script src="{{ asset('/') }}dist/js/sidebarmenu.js"></script>

<script src="{{ asset('/') }}dist/js/custom.js"></script>
@endpush
