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
                    <h4 class="fw-semibold mb-8">Detail Ciri Fisik</h4>
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
                <div class="mb-2 text-end">
                    <a href="{{ asset('admin/detail-ciri-fisik/create') }}" class="btn btn-primary px-4">
                        <div class="d-flex align-items-center">
                            <i class="ti ti-plus me-2 fs-4"></i>
                            Create
                        </div>
                    </a>
                </div>
                {{--<p class="card-subtitle mb-3">Data table example</p>--}}
                <div class="table-responsive">
                    <table id="detail_grade_table"
                           class="table border table-striped table-bordered">
                        <thead>
                        <!-- start row -->
                        <tr>
                            <th>#</th>
                            <th>Grade</th>
                            <th>Ciri Ciri Fisik Daun</th>
                            <th>Nilai Kepercayaan</th>
                            <th>Nilai Tidak Percaya</th>
                            <th>Action</th>
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


            $("#detail_grade_table").DataTable({
                responsive: false,
                buttons: ["copy", "excel", "pdf"],
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
                    url: '{!! asset("admin/detail-ciri-fisik") !!}',
                    type: 'GET',
                },
                columns: [
                    {data: null},
                    {data: null},
                    {data: null},
                    {data: 'mb'},
                    {data: 'md'},
                    {data: null},
                ],
                columnDefs: [
                    {
                        targets: -1,
                        title: 'Actions',
                        width:120,
                        orderable: false,
                        className: "text-center align-middle",
                        render: function(data, type, full, meta) {
                            return `<a href="{{ asset('admin/detail-ciri-fisik/edit/') }}/`+data.id+`" \
                                                title="edit" class="btn"\
                                                data-id="`+data.id+`">\
                                                <i class="ti ti-pencil text-success fs-4 me-2"></i></a>\
                                                \
                                <form id="form_`+data.id+`" action="{{asset('admin/detail-ciri-fisik/destroy') }}/`+data.id+`"\
                                                method="post" novalidate="false" style="display: inline-block;">\
                                                    @method('delete')\
                                                    @csrf\
                                                <a href="javascript:;" class="btn-hapus btn mr-2" id="`+data.id+`">\
                                                    <i class="ti ti-trash text-danger fs-4 me-2 mr-3"></i></a>\
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
                        render: function(data, type, full, meta) {
                            return data.grade.kode_grade+` [`+data.grade.nama_grade+`]`;
                        },
                    },
                    {
                        targets: 2,
                        orderable: true,
                        className: "text-left align-middle",
                        render: function(data, type, full, meta) {
                            return data.kode_detail_fisik+` [`+data.ciri.nama_fisik +` `+data.nama_detail_fisik+`]`;
                        },
                    },
                    {
                        targets: 3,
                        orderable: true,
                        className: "text-center align-middle",
                    },
                    {
                        targets: 4,
                        orderable: true,
                        className: "text-center align-middle",
                    },
                ],
            });

            $(".buttons-copy, .buttons-csv, .buttons-print, .buttons-pdf, .buttons-excel"
            ).addClass("btn btn-primary mr-1");
            $('body').on('click', '.btn-hapus', function (event) {
                dataDelete($(this).attr('id'));
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