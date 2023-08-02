<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
        <img src="{{ asset('dash/dist/img/AdminLTELogo.png') }}" alt="AdminLTE Logo"
            class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">AdminLTE 3</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="{{ asset('dash/dist/img/user2-160x160.jpg') }}" class="img-circle elevation-2"
                    alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block">{{ auth()->user()->name }}</a>
            </div>
        </div>

        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                data-accordion="false">
                <li class="nav-header">DASHBOARD</li>
                <!-- Dashboard -->
                <li class="nav-item">
                    <a href="pages/widgets.html" class="nav-link {{ request()->is('dashboard') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Dashboard
                        </p>
                    </a>
                </li>
                <!-- Back Office Menu -->
                @role('office')
                    <li class="nav-header">BACK OFFICE</li>
                    <!-- Master Utilty -->
                    <li class="nav-item {{ request()->is('master-utilty/*') ? 'active' : '' }}">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-tachometer-alt"></i>
                            <p>
                                Master Utilty
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="./index.html" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Master Setup</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <!-- Order Management -->
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-tachometer-alt"></i>
                            <p>
                                Order Management
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="./index.html" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Master Marketing</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="./index.html" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Registrasi</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="./index.html" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Insetif Agen</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <!-- Keuangan -->
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-tachometer-alt"></i>
                            <p>
                                Keuangan
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="./index.html" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Input Invoice</p>
                                </a>
                            </li>
                        </ul>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="./index.html" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Pembayaran</p>
                                </a>
                            </li>
                        </ul>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="./index.html" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Penerimaan Uang</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                @endrole
                <!-- Agen Menu -->
                @role('agen')
                    <li class="nav-header">AGEN</li>
                    <!-- Registrasi -->
                    <li class="nav-item">
                        <a href="pages/widgets.html"
                            class="nav-link {{ request()->is('dashboard/registrasi') ? 'active' : '' }}">
                            <i class="nav-icon fas fa-tachometer-alt"></i>
                            <p>
                                Registrasi
                            </p>
                        </a>
                    </li>
                    <!-- Pembayaran -->
                    <li class="nav-item">
                        <a href="pages/widgets.html"
                            class="nav-link {{ request()->is('dashboard/pembayaran') ? 'active' : '' }}">
                            <i class="nav-icon fas fa-tachometer-alt"></i>
                            <p>
                                Pembayaran
                            </p>
                        </a>
                    </li>
                    <!-- Status Registrasi -->
                    <li class="nav-item">
                        <a href="pages/widgets.html"
                            class="nav-link {{ request()->is('dashboard/status-registrasi') ? 'active' : '' }}">
                            <i class="nav-icon fas fa-tachometer-alt"></i>
                            <p>
                                Status Registrasi
                            </p>
                        </a>
                    </li>
                    <!-- View Insetif -->
                    <li class="nav-item">
                        <a href="pages/widgets.html"
                            class="nav-link {{ request()->is('dashboard/view-insetif') ? 'active' : '' }}">
                            <i class="nav-icon fas fa-tachometer-alt"></i>
                            <p>
                                View Insetif
                            </p>
                        </a>
                    </li>
                    <!-- Berita -->
                    <li class="nav-item">
                        <a href="pages/widgets.html"
                            class="nav-link {{ request()->is('dashboard/berita') ? 'active' : '' }}">
                            <i class="nav-icon fas fa-tachometer-alt"></i>
                            <p>
                                Berita
                            </p>
                        </a>
                    </li>
                @endrole
                <!-- Konsumen Menu -->
                @role('konsumen')
                    <li class="nav-header">KONSUMEN</li>
                    <!-- Registrasi -->
                    <li class="nav-item">
                        <a href="{{ route('registrasi.create') }}"
                            class="nav-link {{ request()->is('dashboard/registrasi') ? 'active' : '' }}">
                            <i class="nav-icon fas fa-tachometer-alt"></i>
                            <p>
                                Registrasi
                            </p>
                        </a>
                    </li>
                    <!-- Pembayaran -->
                    <li class="nav-item">
                        <a href="pages/widgets.html"
                            class="nav-link {{ request()->is('dashboard/pembayaran') ? 'active' : '' }}">
                            <i class="nav-icon fas fa-tachometer-alt"></i>
                            <p>
                                Pembayaran
                            </p>
                        </a>
                    </li>
                    <!-- Status Registrasi -->
                    <li class="nav-item">
                        <a href="pages/widgets.html"
                            class="nav-link {{ request()->is('dashboard/status-registrasi') ? 'active' : '' }}">
                            <i class="nav-icon fas fa-tachometer-alt"></i>
                            <p>
                                Status Registrasi
                            </p>
                        </a>
                    </li>
                    <!-- Berita -->
                    <li class="nav-item">
                        <a href="pages/widgets.html"
                            class="nav-link {{ request()->is('dashboard/berita') ? 'active' : '' }}">
                            <i class="nav-icon fas fa-tachometer-alt"></i>
                            <p>
                                Berita
                            </p>
                        </a>
                    </li>
                @endrole
            </ul>
        </nav>
    </div>
    <!-- /.sidebar -->
</aside>
