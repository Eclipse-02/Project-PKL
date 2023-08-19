<aside class="sidenav bg-white navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-4 "
    id="sidenav-main">
    <div class="sidenav-header">
        <i class="fas fa-times p-3 cursor-pointer text-secondary opacity-5 position-absolute end-0 top-0 d-none d-xl-none"
            aria-hidden="true" id="iconSidenav"></i>
        <a class="navbar-brand m-0" href=" https://demos.creative-tim.com/argon-dashboard/pages/dashboard.html "
            target="_blank">
            <img src="{{ asset('dash/assets/img/logo-ct-dark.png') }}" class="navbar-brand-img h-100" alt="main_logo">
            <span class="ms-1 font-weight-bold">Argon Dashboard 2</span>
        </a>
    </div>
    <hr class="horizontal dark mt-0">
    <div class="collapse navbar-collapse  w-auto " id="sidenav-collapse-main">
        <ul class="navbar-nav">
            <li class="nav-item dropdown">
                <a class="nav-link {{ request()->is('dashboard*') ? 'active' : '' }}" href="{{ route('dashboard') }}">
                    <div
                        class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="ni ni-tv-2 text-primary text-sm opacity-10"></i>
                    </div>
                    <span class="nav-link-text ms-1">Dashboard</span>
                </a>
            </li>
            @role('office')
            <li class="nav-item mt-3">
                <h6 class="ps-4 ms-2 text-uppercase text-xs font-weight-bolder opacity-6">Master Setup</h6>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ request()->is('provinsis*') ? 'active' : '' }}" href="{{ route('provinsis.index') }}">
                    <div
                        class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="ni ni-square-pin text-primary text-sm opacity-10"></i>
                    </div>
                    <span class="nav-link-text ms-1">Provinsi</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ request()->is('kotas*') ? 'active' : '' }}" href="{{ route('kotas.index') }}">
                    <div
                        class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="ni ni-square-pin text-secondary text-sm opacity-10"></i>
                    </div>
                    <span class="nav-link-text ms-1">Kota</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ request()->is('kecamatans*') ? 'active' : '' }}" href="{{ route('kecamatans.index') }}">
                    <div
                        class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="ni ni-square-pin text-info text-sm opacity-10"></i>
                    </div>
                    <span class="nav-link-text ms-1">Kecamatan</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ request()->is('kelurahans*') ? 'active' : '' }}" href="{{ route('kelurahans.index') }}">
                    <div
                        class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="ni ni-square-pin text-warning text-sm opacity-10"></i>
                    </div>
                    <span class="nav-link-text ms-1">Kelurahan</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ request()->is('zips*') ? 'active' : '' }}" href="{{ route('zips.index') }}">
                    <div
                        class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="ni ni-map-big text-success text-sm opacity-10"></i>
                    </div>
                    <span class="nav-link-text ms-1">Zip</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ request()->is('areas*') ? 'active' : '' }}" href="{{ route('areas.index') }}">
                    <div
                        class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="ni ni-ungroup text-danger text-sm opacity-10"></i>
                    </div>
                    <span class="nav-link-text ms-1">Area</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ request()->is('branchs*') ? 'active' : '' }}" href="{{ route('branchs.index') }}">
                    <div
                        class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="ni ni-vector text-dark text-sm opacity-10"></i>
                    </div>
                    <span class="nav-link-text ms-1">Branch</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ request()->is('positions*') ? 'active' : '' }}" href="{{ route('positions.index') }}">
                    <div
                        class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="ni ni-chart-bar-32 text-primary text-sm opacity-10"></i>
                    </div>
                    <span class="nav-link-text ms-1">Position</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ request()->is('employees*') ? 'active' : '' }}" href="{{ route('employees.index') }}">
                    <div
                        class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="fas fa-user-tie text-secondary text-sm opacity-10"></i>
                    </div>
                    <span class="nav-link-text ms-1">Employee</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ request()->is('users*') ? 'active' : '' }}" href="{{ route('users.index') }}">
                    <div
                        class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="fas fa-users text-success text-sm opacity-10"></i>
                    </div>
                    <span class="nav-link-text ms-1">User</span>
                </a>
            </li>
            {{-- <li class="nav-item">
                <a class="nav-link {{ request()->is('userroles*') ? 'active' : '' }}" href="{{ route('userroles.index') }}">
                    <div
                        class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="fas fa-user-tag text-danger text-sm opacity-10"></i>
                    </div>
                    <span class="nav-link-text ms-1">User Role</span>
                </a>
            </li> --}}
            <li class="nav-item">
                <a class="nav-link {{ request()->is('parameters*') ? 'active' : '' }}" href="{{ route('parameters.index') }}">
                    <div
                        class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="fas fa-sliders-h text-warning text-sm opacity-10"></i>
                    </div>
                    <span class="nav-link-text ms-1">Parameter</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ request()->is('coys*') ? 'active' : '' }}" href="{{ route('coys.index') }}">
                    <div
                        class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="fas fa-sliders-h text-warning text-sm opacity-10"></i>
                    </div>
                    <span class="nav-link-text ms-1">Coy</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ request()->is('vaccines*') ? 'active' : '' }}" href="{{ route('vaccines.index') }}">
                    <div
                        class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="fas fa-sliders-h text-warning text-sm opacity-10"></i>
                    </div>
                    <span class="nav-link-text ms-1">Vaccine</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ request()->is('jobs*') ? 'active' : '' }}" href="{{ route('jobs.index') }}">
                    <div
                        class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="fas fa-sliders-h text-warning text-sm opacity-10"></i>
                    </div>
                    <span class="nav-link-text ms-1">Job</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ request()->is('edus*') ? 'active' : '' }}" href="{{ route('edus.index') }}">
                    <div
                        class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="fas fa-sliders-h text-warning text-sm opacity-10"></i>
                    </div>
                    <span class="nav-link-text ms-1">Edu</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ request()->is('countries*') ? 'active' : '' }}" href="{{ route('countries.index') }}">
                    <div
                        class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="fas fa-sliders-h text-warning text-sm opacity-10"></i>
                    </div>
                    <span class="nav-link-text ms-1">Country</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ request()->is('relations*') ? 'active' : '' }}" href="{{ route('relations.index') }}">
                    <div
                        class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="fas fa-sliders-h text-warning text-sm opacity-10"></i>
                    </div>
                    <span class="nav-link-text ms-1">Relation</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ request()->is('banks*') ? 'active' : '' }}" href="{{ route('banks.index') }}">
                    <div
                        class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="fas fa-sliders-h text-warning text-sm opacity-10"></i>
                    </div>
                    <span class="nav-link-text ms-1">Bank</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ request()->is('suppliersubtypes*') ? 'active' : '' }}" href="{{ route('suppliersubtypes.index') }}">
                    <div
                        class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="fas fa-sliders-h text-warning text-sm opacity-10"></i>
                    </div>
                    <span class="nav-link-text ms-1">Supplier Sub Type</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ request()->is('suppliers*') ? 'active' : '' }}" href="{{ route('suppliers.index') }}">
                    <div
                        class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="fas fa-sliders-h text-warning text-sm opacity-10"></i>
                    </div>
                    <span class="nav-link-text ms-1">Supplier</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ request()->is('supplieraccs*') ? 'active' : '' }}" href="{{ route('supplieraccs.index') }}">
                    <div
                        class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="fas fa-sliders-h text-warning text-sm opacity-10"></i>
                    </div>
                    <span class="nav-link-text ms-1">Supplier Acc</span>
                </a>
            </li>
            @endrole
        </ul>
    </div>
</aside>
