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
    <link rel="shortcut icon" type="image/png" href="{{ asset('/') }}landingpage/dist/images/logos/favicon.ico">
    <!--  Aos -->
    <link rel="stylesheet" href="{{ asset('/') }}landingpage/dist/libs/aos/dist/aos.css">
    <link rel="stylesheet" href="{{ asset('/') }}landingpage/dist/libs/owl.carousel/dist/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="{{ asset('/') }}landingpage/dist/css/style.min.css">
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
            <nav class="navbar navbar-expand-xl navbar-light container-fluid px-0">
                <div class="container">
                    <nav class="navbar navbar-light px-0">
                        <a class="navbar-brand me-3 py-0" href="{{ asset('/') }}">
                            <img src="{{ asset('/') }}landingpage/dist/images/logos/logo-sw.svg" alt="img-fluid">
                        </a>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
                            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent"  >
                            <ul class="navbar-nav ml-auto mb-2 mb-lg-0">
                            <li class="nav-item me-3">
                                <a class="nav-link" href="{{ asset('/') }}">Beranda</a>
                            </li>
                            <li class="nav-item me-3">
                                <a class="nav-link" href="{{ asset('/petunjuk') }}">Petunjuk</a>
                            </li>
                            <li class="nav-item me-3">
                                <a class="nav-link" href="{{ asset('/tentang') }}">Tentang</a>
                            </li>
                            </ul>
                            
                        </div>
                    </nav>
                </div>
            </nav>
        </header>
        <!-- Header End -->
        <!-- Sidebar Start -->

        <!-- Sidebar End -->
        <!-- Main wrapper -->
        <div class="body-wrapper overflow-hidden ">
            <section class="pt-10 pt-md-5 ">
                <section class="bg-primary pt-5 pb-xl-12 pb-8">
                <div class="container">
                    <div class="row justify-content-between">
                        <div class="col-lg-7 col-xl-7 pt-lg-5 mb-5 mb-lg-0">
                            <h5 class="fs-8 text-white text-center text-lg-start fw-bolder mb-4">Temukan Grade Daun Tembakau Kasturi Anda</h2>
                            <h5 class="fs-4 text-white mb-4">Selamat datang di Sistem Pakar Berbasis Website untuk penentuan Nilai Mutu Daun Tembakau Kasturi. Sistem akan membantu anda untuk grading sehingga nilai mutu akan diketahui berdasarkan keadaan yang anda pilih pada proses grading.</h2>
                            <div class="d-sm-flex align-items-center justify-content-center justify-content-lg-start gap-3">
                                <a href="{{ asset('part1') }}" class="btn bg-white text-primary fw-semibold d-block mb-3 mb-sm-0 btn-hover-shadow">Mulai Grading</a>
                                <a href="{{ asset('admin') }}" class="btn border-white text-white fw-semibold btn-hover-white d-block">Login Admin</a>
                            </div>
                        </div>
                        <div class="col-lg-3 col-xl-3">
                            <div class="text-center text-lg-end">
                                <img src="{{ asset('/') }}landingpage/dist/images/backgrounds/business-woman-checking-her-mail.png" alt="" class="img-fluid">

                            </div>
                        </div>
                    </div>

                    <div class="row justify-content-between">
                         <h5 class="fs-6 text-white text-center text-lg-start fw-bolder mb-4">Beberapa nilai mutu yang dapat diidentifikasi menggunakan sistem ini adalah :</h2>       
                    </div>
                    

                    <div class="row">
                        <div class="col-md-6 col-lg-8">
                            <div class=" position-relative overflow-hidden">
                                <div class="card-body position-relative">
                                    <div class="d-flex flex-column justify-content-between ">
                                        <div class="d-flex align-items-start justify-content-between"></div>
                                        <div>
                                            <div class="d-flex align-items-center gap-4"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="">
                            <div class=" position-relative overflow-hidden hover-img">
                                <div class="card-body position-relative"></div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4">
                                <div class="card rounded-2 overflow-hidden hover-img">
                                    <div class="position-relative">
                                    <a href="javascript:void(0)"><img src="../../dist/images/blog/1.jpg" class="card-img-top rounded-0" alt="..."></a>
                                    <span class="badge bg-white text-dark fs-2 rounded-4 lh-sm mb-9 me-9 py-1 px-2 fw-semibold position-absolute bottom-0 end-0">Rp 54.000</span>
                                    </div>
                                    <div class="card-body p-4">
                                    <a class="d-block my-4 fs-5 text-dark fw-semibold" href="">Lokal Super</a>
                                    <div class="d-flex align-items-center gap-4">
                                        <div class="d-flex align-items-center gap-2">Lokal Super adalah jenis tembakau dengan posisi daun pada bagian kepala tanaman. Daunnya memiliki ketebalan yang signifikan, panjang mencapai 80 cm, dan lebar 50 cm. Warna daunnya khas, yaitu merah kuning, dan memiliki aroma manis yang harum.</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4">
                                <div class="card rounded-2 overflow-hidden hover-img">
                                    <div class="position-relative">
                                    <a href="javascript:void(0)"><img src="../../dist/images/blog/2.jpg" class="card-img-top rounded-0" alt="..."></a>
                                    <span class="badge bg-white text-dark fs-2 rounded-4 lh-sm mb-9 me-9 py-1 px-2 fw-semibold position-absolute bottom-0 end-0">Rp 52.000</span>
                                    </div>
                                    <div class="card-body p-4">
                                    <a class="d-block my-4 fs-5 text-dark fw-semibold" href="">Lokal I</a>
                                    <div class="d-flex align-items-center gap-4">
                                        <div class="d-flex align-items-center gap-2">Lokal I memiliki posisi daun yang terletak di bagian leher tanaman. Daunnya memiliki ketebalan sedang, dengan panjang 70 cm dan lebar 40 cm. Warna daunnya cenderung kuning cerah, dan aroma daunnya memberikan kesan manis sedang.</div>
                                    </div>
                                </div>
                            </div>
                            </div>
                            <div class="col-md-6 col-lg-4">
                                <div class="card rounded-2 overflow-hidden hover-img">
                                    <div class="position-relative">
                                    <a href="javascript:void(0)"><img src="../../dist/images/blog/3.jpg" class="card-img-top rounded-0" alt="..."></a>
                                    <span class="badge bg-white text-dark fs-2 rounded-4 lh-sm mb-9 me-9 py-1 px-2 fw-semibold position-absolute bottom-0 end-0">Rp 49.000</span>
                                    </div>
                                    <div class="card-body p-4">
                                    <a class="d-block my-4 fs-5 text-dark fw-semibold" href="">Lokal II</a>
                                    <div class="d-flex align-items-center gap-4">
                                        <div class="d-flex align-items-center gap-2">Jenis tembakau Lokal II memiliki posisi daun pada bagian dada tanaman. Daunnya cukup tebal, dengan panjang 60 cm dan lebar 35 cm. Warna daunnya khas, yaitu kuning atal, dan memiliki aroma manis yang ringan.</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4">
                                <div class="card rounded-2 overflow-hidden hover-img">
                                    <div class="position-relative">
                                    <a href="javascript:void(0)"><img src="../../dist/images/blog/4.jpg" class="card-img-top rounded-0" alt="..."></a>
                                    <span class="badge bg-white text-dark fs-2 rounded-4 lh-sm mb-9 me-9 py-1 px-2 fw-semibold position-absolute bottom-0 end-0">Rp 46.500</span>
                                    </div>
                                    <div class="card-body p-4">
                                    <a class="d-block my-4 fs-5 text-dark fw-semibold" href="">Lokal III</a>
                                    <div class="d-flex align-items-center gap-4">
                                        <div class="d-flex align-items-center gap-2">Lokal III memiliki posisi daun di bagian perut tanaman. Daunnya relatif tipis, dengan panjang 50 cm dan lebar 30 cm. Warna daunnya berubah menjadi kuning kecoklatan, dan aroma daunnya memberikan kesan manis yang ringan.</div>
                                    </div>
                                </div>
                            </div>
                            </div>
                            <div class="col-md-6 col-lg-4">
                                <div class="card rounded-2 overflow-hidden hover-img">
                                    <div class="position-relative">
                                    <a href="javascript:void(0)"><img src="../../dist/images/blog/5.jpg" class="card-img-top rounded-0" alt="..."></a>
                                    <span class="badge bg-white text-dark fs-2 rounded-4 lh-sm mb-9 me-9 py-1 px-2 fw-semibold position-absolute bottom-0 end-0">Rp 43.500</span>
                                    </div>
                                    <div class="card-body p-4">
                                    <a class="d-block my-4 fs-5 text-dark fw-semibold" href="">Semi Lokal</a>
                                    <div class="d-flex align-items-center gap-4">
                                        <div class="d-flex align-items-center gap-2">Jenis tembakau Semi Lokal memiliki posisi daun pada bagian paha tanaman. Daunnya tebal seperti kepak, dengan panjang 40 cm dan lebar 25 cm. Warna daunnya coklat cerah, dan aroma daunnya memberikan kesan manis yang ringan.</div>
                                    </div>
                                </div>
                            </div>
                            </div>
                            <div class="col-md-6 col-lg-4">
                                <div class="card rounded-2 overflow-hidden hover-img">
                                    <div class="position-relative">
                                    <a href="javascript:void(0)"><img src="../../dist/images/blog/6.jpg" class="card-img-top rounded-0" alt="..."></a>
                                    <span class="badge bg-white text-dark fs-2 rounded-4 lh-sm mb-9 me-9 py-1 px-2 fw-semibold position-absolute bottom-0 end-0">Rp 39.000</span>
                                    </div>
                                    <div class="card-body p-4">
                                    <a class="d-block my-4 fs-5 text-dark fw-semibold" href="">Export I</a>
                                    <div class="d-flex align-items-center gap-4">
                                        <div class="d-flex align-items-center gap-2">Export I memiliki posisi daun di bagian kaki tanaman. Daunnya tebal dengan struktur kropos ringan, panjang 35 cm, dan lebar 20 cm. Warna daunnya coklat gelap, dan aroma daunnya memberikan kesan manis yang ringan.</div>
                                    </div>
                                </div>
                            </div>
                            </div>
                            <div class="col-md-6 col-lg-4">
                                <div class="card rounded-2 overflow-hidden hover-img">
                                    <div class="position-relative">
                                    <a href="javascript:void(0)"><img src="../../dist/images/blog/7.jpg" class="card-img-top rounded-0" alt="..."></a>
                                    <span class="badge bg-white text-dark fs-2 rounded-4 lh-sm mb-9 me-9 py-1 px-2 fw-semibold position-absolute bottom-0 end-0">Rp 30.500</span>
                                    </div>
                                    <div class="card-body p-4">
                                    <a class="d-block my-4 fs-5 text-dark fw-semibold" href="">Export II</a>
                                    <div class="d-flex align-items-center gap-4">
                                        <div class="d-flex align-items-center gap-2">Export II memiliki posisi daun di bagian tumit tanaman. Daunnya tebal dengan struktur kropos DR, panjang 30 cm, dan lebar 15 cm. Warna daunnya coklat pucat, dan aroma daunnya memberikan kesan Ampang.</div>
                                    </div>
                                </div>
                            </div>
                            </div>
                    </div>
                </div>
            </div>
        </section>
    </section>
            

                        </div>

                        <div class="dark-transparent sidebartoggler"></div>
                    </div>
    <!--  Shopping Cart -->


    <!-- Customizer -->

@stop
@push('js')
    <script src="{{ asset('/') }}dist/libs/jquery/dist/jquery.min.js"></script>
    <script src="{{ asset('/') }}landingpage/dist/libs/aos/dist/aos.js"></script>
    <script src="{{ asset('/') }}landingpage/dist/libs/owl.carousel/dist/owl.carousel.min.js"></script>
    <script src="{{ asset('/') }}dist/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <!-- ---------------------------------------------- -->
    <!-- core files -->
    <!-- ---------------------------------------------- -->
    <script src="{{ asset('/') }}dist/js/custom.js"></script>
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
