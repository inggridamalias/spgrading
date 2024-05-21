@extends('admin_master')
@section('admin')
    <div class="card bg-light-info shadow-none position-relative overflow-hidden">
        <div class="card-body px-4 py-3">
            <div class="row align-items-center">
                <div class="col-9">
                    <h4 class="fw-semibold mb-8">Grade</h4>
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
    <div class="card">

        <form method="POST" @if(isset($id)) action="{{ asset('admin/grade/update/'. $id) }}" @else action="{{ asset('admin/grade/store') }}" @endif >
            @csrf
            <div>
                <div class="card-body">
                    <h5>@if(isset($id)) Update Data Grade @else Create Data Grade @endif</h5>
                    <div class="row pt-3">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="kode">Kode Grade</label>
                                <input
                                    type="text"
                                    class="form-control"
                                    id="kode"
                                    name="kode"
                                    placeholder="Masukan kode grade"
                                    @if(isset($kode_grade)) value="{{ $kode_grade }}" @endif
                                />

                            </div>
                        </div>
                        <!--/span-->
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="nama">Nama Grade</label>
                                <input
                                    type="text"
                                    class="form-control"
                                    id="nama"
                                    name="nama"
                                    placeholder="Masukan nama grade"
                                    @if(isset($nama_grade)) value="{{ $nama_grade }}" @endif
                                />

                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="mb-3">
                                <label for="nama">Harga</label>
                                <input
                                    type="text"
                                    class="form-control"
                                    id="harga"
                                    name="harga"
                                    placeholder="Masukan harga"
                                    @if(isset($nama_grade)) value="{{ $harga }}" @endif
                                />

                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-actions">
                    <div class="card-body border-top">
                        <button
                            type="submit"
                            class="btn btn-success px-4"
                        >
                            <div class="d-flex align-items-center">
                                <i class="ti ti-device-floppy me-1 fs-4"></i>
                                Save
                            </div>
                        </button>
                        <a
                            href="{{ asset('admin/grade') }}"
                            class="btn btn-danger px-4 ms-2 text-white"
                        >
                            <div class="d-flex align-items-center">
                                <i class="ti ti-arrow-back me-1 fs-4"></i>
                                Cancel
                            </div>

                        </a>
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection
