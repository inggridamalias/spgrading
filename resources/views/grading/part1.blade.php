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
                        <img src="{{ asset('/') }}landingpage/dist/images/logos/logo-sw.svg" class="dark-logo" width="180" alt="" />
                            <img src="{{ asset('/') }}landingpage/dist/images/logos/logo-sw-light.png" class="light-logo"  width="180" alt="" />
                        </a>
                    </li>
                </ul>
                <div class="d-block d-xl-none">
                    <a href="/" class="text-nowrap nav-link">
                    <img src="{{ asset('/') }}landingpage/dist/images/logos/logo-sw.svg" class="dark-logo" alt="" />
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
                <div class="card">
                    <div class="card-header">
                        <h5>Masukan Biodata Anda</h5>
                    </div>
                    <div class="card-body">
                        <form action="{{ asset('/part2') }}" method="POST">
                            @csrf
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-floating mb-3">
                                        <input
                                            type="text"
                                            class="form-control"
                                            id="nama"
                                            name="nama"
                                            placeholder="Enter Name here"
                                            value="{{ old('nama') }}"
                                            required
                                        />
                                        <label for="nama">Nama</label>
                                    </div>
                                    @error('nama')
                                    <div class="invalid-feedback">
                                        Silahkan Isi nama dulu
                                    </div>
                                    @enderror
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating mb-3">
                                        <input
                                            type="text"
                                            class="form-control"
                                            id="hp"
                                            name="hp"
                                            placeholder="Enter Name here"
                                            value="{{ old('hp') }}"
                                            required
                                        />
                                        <label for="hp">Nomor HP</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating mb-3">
                                        <input
                                            type="text"
                                            class="form-control"
                                            id="alamat"
                                            name="alamat"
                                            placeholder="Enter Name here"
                                            value="{{ old('alamat') }}"
                                        />
                                        <label for="alamat">Alamat</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating mb-3">
                                        <input
                                            type="date"
                                            class="form-control"
                                            id="tanggal"
                                            name="tanggal"
                                            value="{{ date('Y-m-d') }}"
                                            placeholder="Enter Name here"
                                        />
                                        <label for="tanggal">Tanggal Grading</label>
                                    </div>
                                </div>
                            </div>
                            @if ($errors->any())
                                @foreach($errors->all() as $error)
                                    <div class="alert alert-danger alert-dismissible bg-danger text-white border-0 fade show" role="alert">
                                        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="alert" aria-label="Close"></button>
                                        <strong>Error - </strong> {{ $error }}
                                    </div>
                                @endforeach
                            @endif
                            <button type="submit" class="btn btn-primary">Lanjut <i class="ti ti-arrow-badge-right-filled fs-5"></i></button>
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
    <script src="{{ asset('/') }}dist/js/forms/form-wizard.js"></script>
    <script src="{{ asset('/') }}dist/js/plugins/toastr-init.js"></script>
    <script>
        @if(\Session::has('success'))
        toastr.success("{{ \Session::get('success') }}", "Success", {
            progressBar: true,
        });
        @endif
        @if(\Session::has('fail'))
        toastr.error("{{ \Session::get('fail') }}", "Error", {
            progressBar: true,
        });
        @endif
    </script>
@endpush

