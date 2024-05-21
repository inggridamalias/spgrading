@extends('admin_master')
@push('css_admin')

    <link rel="stylesheet" href="{{ asset('/') }}dist/libs/prismjs/themes/prism-okaidia.min.css">
    <link rel="stylesheet" href="{{ asset('/') }}dist/libs/datatables.net-bs5/css/dataTables.bootstrap5.min.css">

    <!-- Owl Carousel  -->
    <link rel="stylesheet" href="../../dist/libs/owl.carousel/dist/assets/owl.carousel.min.css">

@endpush
@section('admin')

        <div class="container-fluid">
          <!--  Owl carousel -->
          <div class="owl-carousel counter-carousel owl-theme">
            <div class="item">
              <div class="card border-0 zoom-in bg-light-primary shadow-none">
                <div class="card-body">
                  <div class="text-center">
                    <img src="../../dist/images/svgs/icon-user-male.svg" width="50" height="50" class="mb-3" alt="" />
                    <p class="fw-semibold fs-3 text-primary mb-1"> Dewan Direksi</p>
                    <h5 class="fw-semibold text-primary mb-0">3</h5>
                  </div>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="card border-0 zoom-in bg-light-warning shadow-none">
                <div class="card-body">
                  <div class="text-center">
                    <img src="../../dist/images/svgs/icon-briefcase.svg" width="50" height="50" class="mb-3" alt="" />
                    <p class="fw-semibold fs-3 text-warning mb-1">Karyawan</p>
                    <h5 class="fw-semibold text-warning mb-0">5</h5>
                  </div>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="card border-0 zoom-in bg-light-info shadow-none">
                <div class="card-body">
                  <div class="text-center">
                    <img src="../../dist/images/svgs/icon-mailbox.svg" width="50" height="50" class="mb-3" alt="" />
                    <p class="fw-semibold fs-3 text-info mb-1">Pekerja</p>
                    <h5 class="fw-semibold text-info mb-0">169</h5>
                  </div>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="card border-0 zoom-in bg-light-danger shadow-none">
                <div class="card-body">
                  <div class="text-center">
                    <img src="../../dist/images/svgs/icon-favorites.svg" width="50" height="50" class="mb-3" alt="" />
                    <p class="fw-semibold fs-3 text-danger mb-1">Mitra</p>
                    <h5 class="fw-semibold text-danger mb-0">175</h5>
                  </div>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="card border-0 zoom-in bg-light-success shadow-none">
                <div class="card-body">
                  <div class="text-center">
                    <img src="../../dist/images/svgs/icon-speech-bubble.svg" width="50" height="50" class="mb-3" alt="" />
                    <p class="fw-semibold fs-3 text-success mb-1">Nilai Mutu</p>
                    <h5 class="fw-semibold text-success mb-0">8</h5>
                  </div>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="card border-0 zoom-in bg-light-info shadow-none">
                <div class="card-body">
                  <div class="text-center">
                    <img src="../../dist/images/svgs/icon-connect.svg" width="50" height="50" class="mb-3" alt="" />
                    <p class="fw-semibold fs-3 text-info mb-1">Gudang</p>
                    <h5 class="fw-semibold text-info mb-0">3</h5>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!--  Row 1 -->
          <div class="row">
            <div class="col-lg-12 d-flex align-items-strech">
              <div class="card w-100">
                <div class="card-body">
                  <div class="d-sm-flex d-block align-items-center justify-content-between mb-9">
                    <div class="mb-3 mb-sm-0">
                      <h5 class="card-title fw-semibold">Jumlah Grade Yang Terpilih</h5>
                      <p class="card-subtitle mb-0"></p>
                    </div>
                  </div>
                  <div class="row align-items-center">
                    <div class="col-lg-12 col-md-8">
                      <div id="chart"></div>
                    </div>

                  </div>
                </div>
              </div>
            </div>
          </div>


@endsection
@push('js_admin')
    <script src="{{ asset('/') }}dist/libs/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="{{ asset('/') }}dist/js/datatable/datatable-basic.init.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.5.1/js/dataTables.buttons.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.5.1/js/buttons.flash.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.32/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.32/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.5.1/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.5.1/js/buttons.print.min.js"></script>
    <script src="{{ asset('/') }}dist/js/datatable/datatable-advanced.init.js"></script>
    <script src="../../dist/libs/jquery/dist/jquery.min.js"></script>
    <!-- ---------------------------------------------- -->
    <!-- core files -->
    <!-- ---------------------------------------------- -->
    <script src="../../dist/js/app.min.js"></script>
    <!-- ---------------------------------------------- -->
    <!-- current page js files -->
    <!-- ---------------------------------------------- -->
    <script src="../../dist/libs/owl.carousel/dist/owl.carousel.min.js"></script>
    <script src="../../dist/libs/apexcharts/dist/apexcharts.min.js"></script>
    {{--<script src="../../dist/js/dashboard.js"></script>--}}

    <script>
        $.ajax({
            url: '{{ asset('admin/dashboard/get') }}',
            type: 'GET',
            success: function (data){
                console.log(data)
                var chart = {
                    series: [
                        {
                            name: "Banyak Grade yg dipilih",
                            data: data.data,
                        }
                    ],
                    chart: {
                        toolbar: {
                            show: false,
                        },
                        type: "bar",
                        fontFamily: "Plus Jakarta Sans', sans-serif",
                        foreColor: "#adb0bb",
                        height: 320,
                        stacked: true,
                    },
                    colors: ["var(--bs-primary)", "var(--bs-secondary)"],
                    plotOptions: {
                        bar: {
                            horizontal: false,
                            barHeight: "60%",
                            columnWidth: "20%",
                            borderRadius: [6],
                            borderRadiusApplication: 'end',
                            borderRadiusWhenStacked: 'all'
                        },
                    },
                    dataLabels: {
                        enabled: false,
                    },
                    legend: {
                        show: false,
                    },
                    grid: {
                        borderColor: "rgba(0,0,0,0.1)",
                        strokeDashArray: 3,
                        xaxis: {
                            lines: {
                                show: false,
                            },
                        },
                    },
                    yaxis: {
                        min: -5,
                        max: 5,
                        title: {
                            // text: 'Age',
                        },
                    },
                    xaxis: {
                        axisBorder: {
                            show: false,
                        },
                        categories: data.grade,

                    },
                    yaxis: {
                        tickAmount: 4,
                    },
                    tooltip: {
                        theme: "dark",
                    },
                };

                var chart = new ApexCharts(document.querySelector("#chart"), chart);
                chart.render();
            },
        });
        $(function () {
            //
            // Carousel
            //
            $(".counter-carousel").owlCarousel({
                loop: true,
                margin: 30,
                mouseDrag: true,
                autoplay: true,
                autoplayTimeout: 4000,
                autoplaySpeed: 2000,
                nav: false,
                rtl: true,
                responsive: {
                    0: {
                        items: 2,
                    },
                    576: {
                        items: 2,
                    },
                    768: {
                        items: 3,
                    },
                    1200: {
                        items: 5,
                    },
                    1400: {
                        items: 6,
                    },
                },
            });

        })
    </script>
@endpush

