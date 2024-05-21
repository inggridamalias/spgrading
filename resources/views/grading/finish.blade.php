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


@endpush
@section('page')
    <!-- Body Wrapper -->
    <div class="page-wrapper mt-0" id="main-wrapper" data-layout="horizontal" data-navbarbg="skin6" data-sidebartype="full" data-sidebar-position="fixed" data-header-position="fixed">
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
                        <img src="{{ asset('/') }}landingpage/dist/images/logos/logo-sw.svg" alt="" />
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
                        <div class="card bg-light-info shadow-none position-relative overflow-hidden">
                            <div class="card-body px-4 py-3">
                                <div class="row align-items-center">
                                    <div class="col-9">
                                        <h4 class="fw-semibold mb-8">Selesai</h4>

                                    </div>
                                    <div class="col-3">
                                        <div class="text-center mb-n5">
                                            <img src="{{ asset('/') }}dist/images/breadcrumb/ChatBc.png" alt="" class="img-fluid mb-n4">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                    <div class="card-header">
                    <ul class="list-unstyled mb-7">
                                            @foreach($grading as $item)
                                                <li class="d-flex align-items-center gap-2 py-2">
                                                    <i class="ti ti-check text-primary fs-4"></i>
                                                    <span class="text-dark">
                                                    {{ $item->detail_fisik->ciri->nama_fisik }} {{ $item->detail_fisik->nama_detail_fisik }}
                                                    @if ($item->nilai_cf == 1) (Sangat Yakin) @elseif($item->nilai_cf == 0.8) (Yakin) @elseif($item->nilai_cf == 0.6) (Cukup Yakin) @elseif($item->nilai_cf == 0.4) (Sedikit Yakin)  @endif($item->nilai_cf == 0.2)
                                                </span>
                                                    
                                                </li>
                                            @endforeach

                                            {{--<li class="d-flex align-items-center gap-2 py-2">
                                                <i class="ti ti-check text-primary fs-4"></i>
                                                <span class="text-dark">Single Devise</span>
                                            </li>
                                            <li class="d-flex align-items-center gap-2 py-2">
                                                <i class="ti ti-x text-muted fs-4"></i>
                                                <span class="text-muted">50GB Storage</span>
                                            </li>
                                            <li class="d-flex align-items-center gap-2 py-2">
                                                <i class="ti ti-x text-muted fs-4"></i>
                                                <span class="text-muted">Monthly Backups</span>
                                            </li>
                                            <li class="d-flex align-items-center gap-2 py-2">
                                                <i class="ti ti-x text-muted fs-4"></i>
                                                <span class="text-muted">Permissions & workflows</span>
                                            </li>--}}
                                        </ul>
                        <div class="col-9">
                            <h5 class="fw-semibold mb-8">Nilai Sekuensial</h5>
                        </div>
                        <div class="col-9">
                            <h6>CF[H,E]1 = CF[H]1 . CF[E]1 : {{ $cfh[0] }}</h6>
                            <h6>CF[H,E]2 = CF[H]2 . CF[E]2 : {{ $cfh[1] }}</h6>
                            <h6>CF[H,E]3 = CF[H]3 . CF[E]3 : {{ $cfh[2] }}</h6>
                            <h6>CF[H,E]4 = CF[H]4 . CF[E]4 : {{ $cfh[3] }}</h6>
                            <h6>CF[H,E]5 = CF[H]5 . CF[E]5 : {{ $cfh[4] }}</h6>
                            <h6>CF[H,E]6 = CF[H]6 . CF[E]6 : {{ $cfh[5] }}</h6>
                        </div>
                        <div class="col-9">
                            <h5 class="fw-semibold mb-8">Langkah terakhir adalah mengkombinasikan nilai CF dari masing-masing aturan</h5>
                            </div>
                            <div class="col-9">
                            <h6>CF(A) = CF[H,E1] [E2] = CF(E1) + (CF(E2) x [1 – CF(E1)]) : {{ $CFTotal[0] }}</h6>
                            <h6>CF(B) = CF[H,E3] CF[A] = CF(E3) + (CF(E(A)) x [1 – CF(E3)]) : {{ $CFTotal[1] }}</h6>
                            <h6>CF(C) = CF[H,E4] CF[B] = CF(E4) + (CF(E(B)) x [1 – CF(E4)]) : {{ $CFTotal[2] }}</h6>
                            <h6>CF(D) = CF[H,E5] CF[C] = CF(E5) + (CF(E(C)) x [1 – CF(E5)]) : {{ $CFTotal[3] }}</h6>
                            <h6>CF(E) = CF[H,E6] CF[E] = CF(E6) + (CF(E(E)) x [1 – CF(E6)]) : {{ $CFTotal[4] }}</h6>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="row justify-content-center">
                            <div class="col-lg-6 text-center">
                                <h2 class="fw-bolder mb-0 fs-8 lh-base">Hasil Grading</h2>
                            </div>
                        </div>
                        <div class="d-flex align-items-center justify-content-center my-7">
                            <span class="text-dark fw-bolder text-capitalize me-3">Tingkat kepercayaan {{ number_format($persentase, 0, '.', '0') }}%</span>
                            <!-- 0=2 kalau mau ada 2 nilai dibelakang koma  -->
                        </div>
                        <div class="row">
                            <div class="col-sm-6 col-lg-4">

                            </div>
                            <div class="col-sm-6 col-lg-4">
                                <div class="card">
                                    <div class="card-body">
                                        <span class="fw-bolder text-uppercase fs-2 d-block mb-7">Nilai Mutu Tembakau</span>
                                        <div class="my-4">
                                            <img src="{{ asset('/') }}tobacco-plant-clipart-transparent-background.png" alt="" class="img-fluid" width="80" height="80">
                                        </div>
                                        <h2 class="fw-bolder fs-12 mb-3">{{ $grade->nama_grade }}</h2>
                                        <h2 class="fw-bolder fs-6 mb-3">Harga : {{number_format($grade->harga,0,',','.') }}</h2>
                                        
                                        <a href="{{ asset('/') }}" class="btn btn-primary fw-bolder rounded-2 py-6 w-100 text-capitalize">Mulai Lagi</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-4">

                            </div>
                        </div>
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


