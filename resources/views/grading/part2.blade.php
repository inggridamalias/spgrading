@extends('master')
@push('css')
    <link rel="shortcut icon" type="image/png" href="{{ asset('/') }}dist/images/logos/favicon.ico" />
    <!-- --------------------------------------------------- -->
    <!-- Prism Js -->
    <!-- --------------------------------------------------- -->
    <link rel="stylesheet" href="{{ asset('/') }}dist/libs/prismjs/themes/prism-okaidia.min.css">
    <!-- --------------------------------------------------- -->
    <!-- Core Css -->
    <!-- --------------------------------------------------- -->
    <link  id="themeColors"  rel="stylesheet" href="{{ asset('/') }}dist/css/style.min.css" />
    <style>
        .card-custom{
            height: 800px; //or however you want it
        width:auto; //so that the image ratio stays the same
        }
    </style>

@endpush
@section('page')
    <!-- Body Wrapper -->
    <div class="page-wrapper" id="main-wrapper" data-layout="horizontal" data-navbarbg="skin6" data-sidebartype="full" data-sidebar-position="fixed" data-header-position="fixed">
        <!-- Header Start -->
        <header class="app-header">
            <nav class="container-fluid px-0">
                <ul class="navbar-nav">
                    <li class="nav-item d-none d-xl-block">
                        <a href="/" class="text-nowrap nav-link">
                            <img src="{{ asset('/') }}landingpage/dist/images/logos/logo-sw.svg" class="dark-logo" class="dark-logo" width="180" alt="" />
                            <img src="{{ asset('/') }}landingpage/dist/images/logos/logo-sw-light.png" class="light-logo"  width="180" alt="" />
                        </a>
                    </li>
                </ul>
                <div class="d-block d-xl-none">
                    <a href="/" class="text-nowrap nav-link">
                    <img src="{{ asset('/') }}landingpage/dist/images/logos/logo-sw.svg" class="dark-logo"  alt="" />
                            <img src="{{ asset('/') }}landingpage/dist/images/logos/logo-sw-light.png" class="light-logo" alt="" />
                    </a>
                </div>
            </nav>
        </header>
        <!-- Header End -->
        <!-- Sidebar Start -->

        <!-- Sidebar End -->
        <!-- Main wrapper -->
        
        <div class="body-wrapper">
            <div class="container-fluid">
                <!--  Owl carousel -->
                <div class="col-md-12-center col-lg-12">
                                <div class="card rounded-2 overflow-hidden hover-img">
                                    <div class="position-relative">
                                    <a href="javascript:void(0)"><img src="../../dist/images/blog/Diskon.png" class="card-img-top rounded-0" alt="..."></a>
                                    </div>
                                    <div class="card-body p-0">
                                        <div class="d-flex align-items-center gap-4">
                                    
                                    </div>
                                </div>
                            </div>
                        </div>

                <div class="card">
                    <div class="card-header">
                        <h5>Pilih Sesuai Dengan Kriteria Tembakau Anda</h5>
                    </div>
                    <div class="card-body">
                        <form action="{{ asset('part3') }}" method="POST" id="wizard" class="">
                            @csrf
                            <input type="hidden" name="id" value="{{ $id }}">
                            <div id="example-vertical" class="mt-5">
                                @foreach($ciri_fisik as $ciri)
                                    <h3>Pilih {{ $ciri->nama_fisik }}</h3>
                                    <section>
                                        <div class="form-check mt-5">
                                            <div class="row text-center">
                                                @foreach($detil_fisik as $detil)
                                                    @if($detil->id_ciri_fisik == $ciri->id)
                                                        <div class="col-md-4">
                                                            <input type="radio" class="btn-check form-check-input" name="fisik[{{$ciri->id}}]" id="{{ $detil->id }}" autocomplete="off" value="{{ $detil->id }}" checked>
                                                            <label class="btn btn-outline-success mb-2 rounded-pill font-medium" for="{{ $detil->id }}">{{ $detil->nama_detail_fisik }}</label>
                                                        </div>
                                                    @endif
                                                @endforeach
                                            </div>
                                        </div>
                                        <div class="form-check">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <b>Seberapa yakin anda dengan pilihan di atas?</b>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input success check-outline outline-success" type="radio" id="tidak_tahu_{{ $ciri->id }}" name="cf[{{ $ciri->id }}]" value="0.2">
                                                        <label class="form-check-label" for="tidak_tahu_{{ $ciri->id }}">Tidak Tahu</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input success check-outline outline-success" type="radio" id="Sedikit_Yakin_{{ $ciri->id }}" name="cf[{{ $ciri->id }}]" value="0.4">
                                                        <label class="form-check-label" for="Sedikit_Yakin_{{ $ciri->id }}">Sedikit Yakin</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input success check-outline outline-success" type="radio" id="cukup_yakin_{{ $ciri->id }}" name="cf[{{ $ciri->id }}]" value="0.6">
                                                        <label class="form-check-label" for="cukup_yakin_{{ $ciri->id }}">Cukup Yakin</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input success check-outline outline-success" type="radio" id="yakin_{{ $ciri->id }}" name="cf[{{ $ciri->id }}]" value="0.8">
                                                        <label class="form-check-label" for="yakin_{{ $ciri->id }}">Yakin</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input success check-outline outline-success" type="radio" id="sangat_yakin_{{ $ciri->id }}" name="cf[{{ $ciri->id }}]" value="1" checked>
                                                        <label class="form-check-label" for="sangat_yakin_{{ $ciri->id }}">Sangat Yakin</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </section>
                                @endforeach


                            </div>
                        </form>
                    </div>

                </div>
            </div>

        </div>
        <div class="dark-transparent sidebartoggler"></div>
    </div>
    <!--  Shopping Cart -->

    @include('offcanvas')
    <!-- Customizer -->

@stop
@push('js')
    <script src="{{ asset('/') }}dist/libs/jquery/dist/jquery.min.js"></script>
    <script src="{{ asset('/') }}dist/libs/simplebar/dist/simplebar.min.js"></script>
    <script src="{{ asset('/') }}dist/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <!-- ---------------------------------------------- -->
    <!-- core files -->
    <!-- ---------------------------------------------- -->
    <script src="{{ asset('/') }}dist/js/app.min.js"></script>
    <script src="{{ asset('/') }}dist/js/app.init.js"></script>
    <script src="{{ asset('/') }}dist/js/app-style-switcher.js"></script>
    <script src="{{ asset('/') }}dist/js/sidebarmenu.js"></script>
    <script src="{{ asset('/') }}dist/js/custom.js"></script>
    <script src="{{ asset('/') }}dist/libs/prismjs/prism.js"></script>
    <!-- ---------------------------------------------- -->
    <!-- current page js files -->
    <!-- ---------------------------------------------- -->
    <script src="{{ asset('/') }}dist/libs/jquery-steps/build/jquery.steps.min.js"></script>
    <script src="{{ asset('/') }}dist/libs/jquery-validation/dist/jquery.validate.min.js"></script>
    {{--<script src="{{ asset('/') }}dist/js/forms/form-wizard.js"></script>--}}
    <script>
        $("#example-vertical").steps({
            headerTag: "h3",
            bodyTag: "section",
            transitionEffect: "slideLeft",
            stepsOrientation: "vertical",
            labels: {
                finish: "Submit",
            },
            onFinished: function (event, currentIndex) {
                $('#wizard').submit();
            },
        });

        /*$(".example-vertical").steps({
            headerTag: "h3",
            bodyTag: "section",
            transitionEffect: "slideLeft",
            stepsOrientation: "vertical",
            titleTemplate: '<span class="step">#index#</span> #title#',
            labels: {
                finish: "Submit",
            },
            onFinished: function (event, currentIndex) {
                swal(
                    "Form Submitted!",
                    "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed lorem erat eleifend ex semper, lobortis purus sed."
                );
            },
        });*/
    </script>
@endpush

