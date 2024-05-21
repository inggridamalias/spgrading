<nav class="sidebar-nav scroll-sidebar" data-simplebar>
    <ul id="sidebarnav">
        <!-- =================== -->
        <!-- Dashboard -->
        <!-- =================== -->
        <li class="sidebar-item">
            <a class="sidebar-link" href="{{ asset('admin/dashboard') }}" aria-expanded="false">
                          <span>
                            <i class="ti ti-home"></i>
                          </span>
                <span class="hide-menu">Dashboard</span>
            </a>
        </li>

        <!-- ============================= -->
        <!-- Apps -->
        <!-- ============================= -->
        <li class="nav-small-cap">
            <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
            <span class="hide-menu">Master</span>
        </li>
        <li class="sidebar-item">
            <a class="sidebar-link" href="{{ asset('admin/grade') }}" aria-expanded="false">
                            <span>
                                <i class="ti ti-leaf"></i>
                            </span>
                <span class="hide-menu">Grade</span>
            </a>
        </li>
        <li class="sidebar-item">
            <a class="sidebar-link" href="{{ asset('admin/ciri-fisik') }}" aria-expanded="false">
                            <span>
                                <i class="ti ti-layout-grid"></i>
                            </span>
                <span class="hide-menu">Ciri Fisik</span>
            </a>
        </li>
        <li class="sidebar-item">
            <a class="sidebar-link" href="{{ asset('admin/detail-ciri-fisik') }}" aria-expanded="false">
                            <span>
                                <i class="ti ti-list-details"></i>
                            </span>
                <span class="hide-menu">Detail Ciri Fisik</span>
            </a>
        </li>
        <li class="sidebar-item">
            <a class="sidebar-link" href="{{ asset('admin/laporan') }}" aria-expanded="false">
                            <span>
                                <i class="ti ti-notes"></i>
                            </span>
                <span class="hide-menu">Laporan</span>
            </a>
        </li>

    </ul>
    <!-- <div class="unlimited-access hide-menu bg-light-primary position-relative my-7 rounded">
        <div class="d-flex">
            <div class="unlimited-access-title">
                <h6 class="fw-semibold fs-4 mb-6 text-dark w-85">Unlimited Access</h6>
                <button class="btn btn-primary fs-2 fw-semibold lh-sm">Signup</button>
            </div>
            <div class="unlimited-access-img">
                <img src="{{ asset('/') }}dist/images/backgrounds/rocket.png" alt="" class="img-fluid">
            </div>
        </div>
    </div> -->
</nav>
