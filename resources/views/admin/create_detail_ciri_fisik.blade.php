@extends('admin_master')
@push('css_admin')
    <link rel="stylesheet" href="{{ asset('/') }}dist/libs/select2/dist/css/select2.min.css">
@endpush
@section('admin')
    <div class="card bg-light-info shadow-none position-relative overflow-hidden">
        <div class="card-body px-4 py-3">
            <div class="row align-items-center">
                <div class="col-9">
                    <h4 class="fw-semibold mb-8">Detail Ciri Fisik</h4>

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
        <form method="POST" @if(isset($id)) action="{{ asset('admin/detail-ciri-fisik/update/'. $id) }}" @else action="{{ asset('admin/detail-ciri-fisik/store') }}" @endif >
            @csrf
            <div>
                <div class="card-body">
                    <h5>@if(isset($id)) Update Detail Ciri Fisik @else Create Detail Ciri Fisik @endif</h5>
                    <div class="row pt-3">
                        <!--/span-->
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label class="mb-2" for="id_grade">Grade</label>
                                <select
                                    class="form-control form-select "
                                    id="id_grade"
                                    name="id_grade"
                                >
                                    @foreach($grade as $item)
                                        <option value="{{ $item->id }}"  @if(isset($id_grade)) @if($item->id == $id_grade) selected @endif @endif>
                                            {{ $item->nama_grade }}
                                        </option>
                                    @endforeach

                                </select>


                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label class="mb-2" for="id_ciri_fisik">Ciri Fisik</label>
                                <select
                                    class="form-control form-select "
                                    id="id_ciri_fisik"
                                    name="id_ciri_fisik"
                                >
                                    @foreach($ciri as $item)
                                        <option value="{{ $item->id }}" @if(isset($id_ciri_fisik)) @if($item->id == $id_ciri_fisik) selected @endif @endif>
                                            {{ $item->nama_fisik }}
                                        </option>
                                    @endforeach

                                </select>


                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="mb-3">
                                <label class="mb-2" for="kode_detail_fisik">Kode Detail Fisik</label>
                                <input
                                    type="text"
                                    class="form-control"
                                    id="kode_detail_fisik"
                                    name="kode_detail_fisik"
                                    placeholder="Input Kode Detail"
                                    @if(isset($kode_detail_fisik)) value="{{ $kode_detail_fisik }}" @endif
                                />

                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="mb-3">
                                <label class="mb-2" for="detail_nama_fisik">Nama Detail Fisik</label>
                                <input
                                    type="text"
                                    class="form-control"
                                    id="detail_nama_fisik"
                                    name="detail_nama_fisik"
                                    placeholder="Masukan Detail Nama Fisik"
                                    @if(isset($detail_nama_fisik)) value="{{ $detail_nama_fisik }}" @endif
                                />

                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="mb-3">
                                <label class="mb-2" for="mb">Nilai Kepercayaan</label>
                                <input
                                    type="text"
                                    class="form-control"
                                    id="mb"
                                    name="mb"
                                    placeholder="Masukan Nilai Kepercayaan"
                                    @if(isset($mb)) value="{{ $mb }}" @else value="0" @endif
                                />

                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="mb-3">
                                <label class="mb-2" for="md">Nilai Tidak Percaya</label>
                                <input
                                    type="text"
                                    class="form-control"
                                    id="md"
                                    name="md"
                                    placeholder="Masukan Nilai Tidak Percaya"
                                    @if(isset($md)) value="{{ $md }}" @else value="0" @endif
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
                            href="{{ asset('admin/detail-ciri-fisik') }}"
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
@push('js_admin')
    <script src="{{ asset('/') }}dist/libs/select2/dist/js/select2.full.min.js"></script>
    <script src="{{ asset('/') }}dist/libs/select2/dist/js/select2.min.js"></script>
    <script>
        $(".select2").select2();
    </script>
@endpush
