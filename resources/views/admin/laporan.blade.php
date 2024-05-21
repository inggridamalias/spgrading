@extends('admin_master')
@push('css_admin')
    <link rel="stylesheet" href="{{ asset('/') }}dist/libs/prismjs/themes/prism-okaidia.min.css">
    <link rel="stylesheet" href="{{ asset('/') }}dist/libs/datatables.net-bs5/css/dataTables.bootstrap5.min.css">

@endpush
@section('admin')
    <div class="card bg-light-info shadow-none position-relative overflow-hidden">
        <div class="card-body px-4 py-3">
            <div class="row align-items-center">
                <div class="col-9">
                    <h4 class="fw-semibold mb-8">Laporan Hasil Grading</h4>
                    {{--<nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a class="text-muted text-decoration-none" href="./index.html">Dashboard</a></li>
                            <li class="breadcrumb-item" aria-current="page">Horizontal Form</li>
                        </ol>
                    </nav>--}}
                </div>
                <div class="col-3">
                    <div class="text-center mb-n5">
                        <img src="{{ asset('/') }}dist/images/breadcrumb/ChatBc.png" alt="" class="img-fluid mb-n4">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <section class="datatables">
        <div class="card">
            <div class="card-body">

                {{--<p class="card-subtitle mb-3">Data table example</p>--}}
                <div class="table-responsive">
                    <table id="laporan"
                           class="table border table-striped table-bordered">
                        <thead>
                        <!-- start row -->
                        <tr>
                            <th>#</th>
                            <th>Nama</th>
                            <th>No HP</th>
                            <th>Alamat</th>
                            <th>Tanggal</th>
                            <th>Kode Grading</th>
                            <th>Grading</th>
                            <th>Kepercayaan (%)</th>
                        </tr>
                        <!-- end row -->
                        </thead>
                        <tbody>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
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

    <script>
        $(document).ready(function () {


            $("#laporan").DataTable({
                responsive: false,
                buttons: ["copy", "excel", "pdf",],
                // buttons: ["copy", "csv", "excel", "pdf", "print",],
                /*buttons: [
                    {
                        extend: 'edit',
                        editor: myEditor
                    }
                ],*/
                dom: "<'row'<'col-sm-12 col-md-6'l><'col-sm-12 col-md-6'f>>" +
                    "<'row'<'col-sm-12'tr>>" +
                    "<'row'<'col-sm-12 col-md-5'i><'col-sm-12 col-md-7'p>>" +
                    'B',
                ajax: {
                    url: '{!! asset("admin/laporan") !!}',
                    type: 'GET',
                },
                columns: [
                    {data: null},
                    {data: 'biograding.nama'},
                    {data: 'biograding.no_hp'},
                    {data: 'biograding.alamat'},
                    {data: 'biograding.tgl'},
                    {data: 'grade.kode_grade'},
                    {data: 'grade.nama_grade'},
                    {data: 'cf'},

                ],
                columnDefs: [
                    {
                        targets: -1,
                        title: 'Actions',
                        width:120,
                        orderable: false,
                        className: "text-center align-middle",
                        render: function(data, type, full, meta) {
                            return `<form id="form_`+data.id+`" action="{{asset('admin/grading/destroy') }}/`+data.id+`"\
                                                method="post" novalidate="false" style="display: inline-block;">\
                                                    @method('delete')\
                                                    @csrf\
                                                    <a href="javascript:;" class="btn-hapus btn mr-2" data-id="`+data.id+`">
                                                        <i class="ti ti-trash text-danger fs-4 me-2 mr-3"></i>
                                                    </a>\
                        </form>`;
                        },
                    },
                    {
                        targets: 0,
                        title: '#',
                        width:40,
                        orderable: true,
                        className: "text-center align-middle",
                        render: function(data, type, full, meta) {
                            return meta.row + meta.settings._iDisplayStart + 1;
                        },
                    },
                    {
                        targets: 1,
                        orderable: true,
                        className: "text-left align-middle",

                    },
                    {
                        targets: 2,
                        orderable: true,
                        className: "text-left align-middle",

                    }, {
                        targets: 3,
                        orderable: true,
                        className: "text-left align-middle",

                    }, {
                        targets: 4,
                        orderable: true,
                        className: "text-left align-middle",

                    }, {
                        targets: 5,
                        orderable: true,
                        className: "text-center align-middle",

                    }, {
                        targets: 6,
                        orderable: true,
                        className: "text-left align-middle",

                    }, {
                        targets: 7,
                        orderable: true,
                        className: "text-center align-middle",

                    },
                ],
            });

            $(".buttons-copy, .buttons-csv, .buttons-print, .buttons-pdf, .buttons-excel"
            ).addClass("btn btn-primary mr-1");
            $('body').on('click', '.btn-hapus', function (event) {
                var id = $(this).data('id');
                dataDelete(id);
            });
            var dataDelete = function(id) {
                swal.fire({
                    title: "Apakah anda yakin?",
                    text: "Setelah dihapus, data tidak dapat dikembalikan!",
                    icon: "warning",
                    showCancelButton: true,
                    confirmButtonText: 'Yes, Delete it!',
                }).then(function(result) {
                    if (result.value) {
                        $('#form_' + id).submit();
                    }
                });
            }

        });


    </script>
@endpush

