@extends('admin_master')
@push('css_admin')
    <link rel="stylesheet" href="{{ asset('/') }}dist/libs/select2/dist/css/select2.min.css">
@endpush
@section('admin')
    <div class="card bg-light-info shadow-none position-relative overflow-hidden">
        <div class="card-body px-4 py-3">
            <div class="row align-items-center">
                <div class="col-9">
                    <h4 class="fw-semibold mb-8">Ciri Fisik</h4>

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
        <form method="POST" @if(isset($id)) action="{{ asset('admin/ciri-fisik/update/'. $id) }}" @else action="{{ asset('admin/ciri-fisik/store') }}" @endif >
            @csrf
            <div>
                <div class="card-body">
                    <h5>@if(isset($id)) Update Ciri Fisik @else Create Ciri Fisik @endif</h5>
                    <div class="row pt-3">
                        <!--/span-->
                        <div class="col-md-12">
                            <div class="mb-3">
                                <label class="mb-2" for="nama_fisik">Nama Fisik</label>
                                <input
                                    type="text"
                                    class="form-control"
                                    id="nama_fisik"
                                    name="nama_fisik"
                                    placeholder="Masukan Nama Fisik"
                                    @if(isset($nama_fisik)) value="{{ $nama_fisik }}" @endif
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
                            href="{{ asset('admin/ciri-fisik') }}"
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
