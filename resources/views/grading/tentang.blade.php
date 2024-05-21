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
        <div class="body-wrapper">
            <div class="container-fluid">
                <!--  Owl carousel -->
                <div class="card">
                    
                <div class="card-header">
                        <div class="card bg-light-info shadow-none position-relative overflow-hidden">
                            <div class="card-body px-4 py-3">
                                <div class="row align-items-center">
                                    <div class="col-9">
                                        <h4 class="fw-semibold mb-8">Tentang Perusahaan</h4>
                                        <nav aria-label="breadcrumb">
                                            <ol class="breadcrumb">
                                            <li class="breadcrumb-item"><a class="text-muted " href="{{ asset('/') }}">Beranda</a></li>
                                            <li class="breadcrumb-item" aria-current="page">Tentang</li>
                                            </ol>
                                        </nav>
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
             
        <div class="dark-transparent sidebartoggler"></div>
    </div>
   
    <div class="card overflow-hidden">
            <div class="card-body p-0">
              <img src="{{ asset('/') }}landingpage/dist/images/logos/pengelola.png"" alt="" class="img-fluid">
              <div class="row align-items-center">
                <div class="col-lg-4 order-lg-1 order-2">
                  <div class="d-flex align-items-center justify-content-around m-4">
                    
                </div>
              </div>
            </div>
          </div>

       <div class="tab-content" id="pills-tabContent">
            <div class="tab-pane fade show active" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab" tabindex="0">
              <div class="row">
                <div class="col-lg-12">
                  <div class="card shadow-none border">
                    <div class="card-body">
                      <h3 class="fw-semibold mb-3">UD Sinar Wahyu</h4>
                      <p class="mb-3">UD Berkat Sinar Wahyu merupakan perusahaan yang bergerak di bidang
                        pengolahan dan pengeringan tembakau di Kabupaten Jember, dan merupakan
                        salah satu perusahaan yang berkontribusi pada subsektor pertanian tembakau yang
                        merupakan produk unggulan pemerintah daerah. </p>
                        <p class="mb-3">Fokus utama perusahaan adalah
                        memproduksi tembakau berkualitas tinggi yang digunakan sebagai bahan baku
                        pembuatan rokok kretek. Tembakau yang digunakan oleh perusahaan sebagian
                        besar bersumber dari petani lokal dan dari varietas Kasturi Voor-Oogst. </p>
                        <p class="mb-3">UD
                        Berkat Sinar Wahyu bertujuan agar tembakau yang mereka terima berkualitas
                        baik dan bebas dari kerusakan, karena tembakau yang rusak akan mengakibatkan
                        penurunan harga jual. Setiap penurunan kualitas tembakau Kasturi Voor-Oogst
                        akan mengakibatkan penurunan indikator kinerja perusahaan, dan pada akhirnya
                        menimbulkan kerugian finansial bagi perusahaan</p>

                        <div class="border-top mt-7 pt-7">
                            <h3 class="fw-semibold">Nilai Mutu</h3>
                            <ol class="my-3 text-dark">
                            <li>Lokal Super</li>
                            <li>Lokal I</li>
                            <li>Lokal II</li>
                            <li>Lokal III</li>
                            <li>Semi Lokal</li>
                            <li>Export I</li>
                            <li>Export II</li>
                            </ol>
                        </div>
        </div>
        

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

