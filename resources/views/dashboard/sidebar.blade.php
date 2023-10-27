<!--begin::Aside-->
<div id="kt_aside" class="aside aside-dark aside-hoverable" data-kt-drawer="true" data-kt-drawer-name="aside" data-kt-drawer-activate="{default: true, lg: false}" data-kt-drawer-overlay="true" data-kt-drawer-width="{default:'200px', '300px': '250px'}" data-kt-drawer-direction="start" data-kt-drawer-toggle="#kt_aside_mobile_toggle">
    <!--begin::Brand-->
    <div class="aside-logo flex-column-auto" id="kt_aside_logo">
        <!--begin::Logo-->
        <a href="{{ route('dashboard') }}">
            <img alt="Logo" src="{{ asset('master/html/theme/dist/assets/media/logos/logo-1-dark.svg') }}" class="h-25px logo" />
        </a>
        <!--end::Logo-->
        <!--begin::Aside toggler-->
        <div id="kt_aside_toggle" class="btn btn-icon w-auto px-0 btn-active-color-primary aside-toggle" data-kt-toggle="true" data-kt-toggle-state="active" data-kt-toggle-target="body" data-kt-toggle-name="aside-minimize">
            <!--begin::Svg Icon | path: icons/duotune/arrows/arr079.svg-->
            <span class="svg-icon svg-icon-1 rotate-180">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                    <path opacity="0.5" d="M14.2657 11.4343L18.45 7.25C18.8642 6.83579 18.8642 6.16421 18.45 5.75C18.0358 5.33579 17.3642 5.33579 16.95 5.75L11.4071 11.2929C11.0166 11.6834 11.0166 12.3166 11.4071 12.7071L16.95 18.25C17.3642 18.6642 18.0358 18.6642 18.45 18.25C18.8642 17.8358 18.8642 17.1642 18.45 16.75L14.2657 12.5657C13.9533 12.2533 13.9533 11.7467 14.2657 11.4343Z" fill="black" />
                    <path d="M8.2657 11.4343L12.45 7.25C12.8642 6.83579 12.8642 6.16421 12.45 5.75C12.0358 5.33579 11.3642 5.33579 10.95 5.75L5.40712 11.2929C5.01659 11.6834 5.01659 12.3166 5.40712 12.7071L10.95 18.25C11.3642 18.6642 12.0358 18.6642 12.45 18.25C12.8642 17.8358 12.8642 17.1642 12.45 16.75L8.2657 12.5657C7.95328 12.2533 7.95328 11.7467 8.2657 11.4343Z" fill="black" />
                </svg>
            </span>
            <!--end::Svg Icon-->
        </div>
        <!--end::Aside toggler-->
    </div>
    <!--end::Brand-->
    <!--begin::Aside menu-->
    <div class="aside-menu flex-column-fluid">
        <!--begin::Aside Menu-->
        <div class="hover-scroll-overlay-y my-5 my-lg-5" id="kt_aside_menu_wrapper" data-kt-scroll="true" data-kt-scroll-activate="{default: false, lg: true}" data-kt-scroll-height="auto" data-kt-scroll-dependencies="#kt_aside_logo, #kt_aside_footer" data-kt-scroll-wrappers="#kt_aside_menu" data-kt-scroll-offset="0">
            <!--begin::Menu-->
            <div class="menu menu-column menu-title-gray-800 menu-state-title-primary menu-state-icon-primary menu-state-bullet-primary menu-arrow-gray-500" id="#kt_aside_menu" data-kt-menu="true">
                <div class="menu-item">
                    <div class="menu-content pb-2">
                        <span class="menu-section text-muted text-uppercase fs-8 ls-1">Dashboard</span>
                    </div>
                </div>
                <div class="menu-item">
                    <a class="menu-link{{ request()->is('dashboard') ? ' active' : '' }}" href="{{ route('dashboard') }}">
                        <span class="menu-icon">
                            <i class="bi bi-house fs-3"></i>
                        </span>
                        <span class="menu-title">Dashboard</span>
                    </a>
                </div>
                @role('office')
                <div class="menu-item">
                    <div class="menu-content pb-2">
                        <span class="menu-section text-muted text-uppercase fs-8 ls-1">Office</span>
                    </div>
                </div>
                <div data-kt-menu-trigger="click" class="menu-item menu-accordion{{ request()->is('others/*') ? ' hover show' : '' }}">
                    <span class="menu-link">
                        <span class="menu-icon">
                            <i class="bi bi-back fs-3"></i>
                        </span>
                        <span class="menu-title">Others</span>
                        <span class="menu-arrow"></span>
                    </span>
                    <div class="menu-sub menu-sub-accordion menu-active-bg{{ request()->is('others/locations/*') ? ' show' : '' }}">
                        <div data-kt-menu-trigger="click" class="menu-item{{ request()->is('others/locations/*') ? ' here show' : '' }} menu-accordion">
                            <span class="menu-link">
                                <span class="menu-icon">
                                    <i class="bi bi-map fs-3"></i>
                                </span>
                                <span class="menu-title">Lokasi</span>
                                <span class="menu-arrow"></span>
                            </span>
                            <div class="menu-sub menu-sub-accordion menu-active-bg">
                                <div class="menu-item">
                                    <a class="menu-link{{ request()->is('others/locations/provinsis*') ? ' active' : '' }}" href="{{ route('provinsis.index') }}">
                                        <span class="menu-bullet">
                                            <span class="bullet bullet-dot"></span>
                                        </span>
                                        <span class="menu-title">Provinsi</span>
                                    </a>
                                </div>
                                <div class="menu-item">
                                    <a class="menu-link{{ request()->is('others/locations/kotas*') ? ' active' : '' }}" href="{{ route('kotas.index') }}">
                                        <span class="menu-bullet">
                                            <span class="bullet bullet-dot"></span>
                                        </span>
                                        <span class="menu-title">Kota</span>
                                    </a>
                                </div>
                                <div class="menu-item">
                                    <a class="menu-link{{ request()->is('others/locations/kecamatans*') ? ' active' : '' }}" href="{{ route('kecamatans.index') }}">
                                        <span class="menu-bullet">
                                            <span class="bullet bullet-dot"></span>
                                        </span>
                                        <span class="menu-title">Kecamatan</span>
                                    </a>
                                </div>
                                <div class="menu-item">
                                    <a class="menu-link{{ request()->is('others/locations/kelurahans*') ? ' active' : '' }}" href="{{ route('kelurahans.index') }}">
                                        <span class="menu-bullet">
                                            <span class="bullet bullet-dot"></span>
                                        </span>
                                        <span class="menu-title">Kelurahan</span>
                                    </a>
                                </div>
                                <div class="menu-item">
                                    <a class="menu-link{{ request()->is('others/locations/zips*') ? ' active' : '' }}" href="{{ route('zips.index') }}">
                                        <span class="menu-bullet">
                                            <span class="bullet bullet-dot"></span>
                                        </span>
                                        <span class="menu-title">Kode Pos</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="menu-item">
                            <a class="menu-link{{ request()->is('others/branches*') ? ' active' : '' }}" href="{{ route('branches.index') }}">
                                <span class="menu-icon">
                                    <i class="bi bi-bezier fs-3"></i>
                                </span>
                                <span class="menu-title">Cabang</span>
                            </a>
                        </div>
                        <div class="menu-item">
                            <a class="menu-link{{ request()->is('others/areas*') ? ' active' : '' }}" href="{{ route('areas.index') }}">
                                <span class="menu-icon">
                                    <i class="bi bi-crosshair fs-3"></i>
                                </span>
                                <span class="menu-title">Area</span>
                            </a>
                        </div>
                        <div class="menu-item">
                            <a class="menu-link{{ request()->is('others/positions*') ? ' active' : '' }}" href="{{ route('positions.index') }}">
                                <span class="menu-icon">
                                    <i class="bi bi-person-badge fs-3"></i>
                                </span>
                                <span class="menu-title">Jabatan</span>
                            </a>
                        </div>
                        <div class="menu-item">
                            <a class="menu-link{{ request()->is('others/employees*') ? ' active' : '' }}" href="{{ route('employees.index') }}">
                                <span class="menu-icon">
                                    <i class="bi bi-people fs-3"></i>
                                </span>
                                <span class="menu-title">Karyawan</span>
                            </a>
                        </div>
                        <div data-kt-menu-trigger="click" class="menu-item{{ request()->is('others/accounts/*') ? ' here show' : '' }} menu-accordion">
                            <span class="menu-link">
                                <span class="menu-icon">
                                    <i class="bi bi-person-circle fs-3"></i>
                                </span>
                                <span class="menu-title">Akun</span>
                                <span class="menu-arrow"></span>
                            </span>
                            <div class="menu-sub menu-sub-accordion menu-active-bg">
                                <div class="menu-item">
                                    <a class="menu-link{{ request()->is('others/accounts/users*') ? ' active' : '' }}" href="{{ route('users.index') }}">
                                        <span class="menu-bullet">
                                            <span class="bullet bullet-dot"></span>
                                        </span>
                                        <span class="menu-title">User</span>
                                    </a>
                                </div>
                                {{-- <div class="menu-item">
                                    <a class="menu-link{{ request()->is('others/accounts/permissions*') ? ' active' : '' }}" href="{{ route('laratrust.permissions.index') }}">
                                        <span class="menu-bullet">
                                            <span class="bullet bullet-dot"></span>
                                        </span>
                                        <span class="menu-title">Permissions</span>
                                    </a>
                                </div> --}}
                                {{-- <div csup --}}
                                <div class="menu-item">
                                    <a class="menu-link{{ request()->is('others/accounts/roles-assignment*') ? ' active' : '' }}" href="{{ route('laratrust.roles-assignment.index') }}">
                                        <span class="menu-bullet">
                                            <span class="bullet bullet-dot"></span>
                                        </span>
                                        <span class="menu-title">Roles Assignment</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="menu-item">
                            <a class="menu-link{{ request()->is('others/companies*') ? ' active' : '' }}" href="{{ route('companies.index') }}">
                                <span class="menu-icon">
                                    <i class="bi bi-buildings fs-3"></i>
                                </span>
                                <span class="menu-title">Perusahaan</span>
                            </a>
                        </div>
                        <div class="menu-item">
                            <a class="menu-link{{ request()->is('others/vaccines*') ? ' active' : '' }}" href="{{ route('vaccines.index') }}">
                                <span class="menu-icon">
                                    <i class="bi bi-capsule fs-3"></i>
                                </span>
                                <span class="menu-title">Vaksin</span>
                            </a>
                        </div>
                        <div class="menu-item">
                            <a class="menu-link{{ request()->is('others/jobs*') ? ' active' : '' }}" href="{{ route('jobs.index') }}">
                                <span class="menu-icon">
                                    <i class="bi bi-briefcase fs-3"></i>
                                </span>
                                <span class="menu-title">Pekerjaan</span>
                            </a>
                        </div>
                        <div class="menu-item">
                            <a class="menu-link{{ request()->is('others/educations*') ? ' active' : '' }}" href="{{ route('educations.index') }}">
                                <span class="menu-icon">
                                    <i class="bi bi-mortarboard fs-3"></i>
                                </span>
                                <span class="menu-title">Edukasi</span>
                            </a>
                        </div>
                        <div class="menu-item">
                            <a class="menu-link{{ request()->is('others/countries*') ? ' active' : '' }}" href="{{ route('countries.index') }}">
                                <span class="menu-icon">
                                    <i class="bi bi-globe fs-3"></i>
                                </span>
                                <span class="menu-title">Negara</span>
                            </a>
                        </div>
                        <div class="menu-item">
                            <a class="menu-link{{ request()->is('others/relations*') ? ' active' : '' }}" href="{{ route('relations.index') }}">
                                <span class="menu-icon">
                                    <i class="bi bi-link fs-3"></i>
                                </span>
                                <span class="menu-title">Relasi</span>
                            </a>
                        </div>
                        <div class="menu-item">
                            <a class="menu-link{{ request()->is('others/banks*') ? ' active' : '' }}" href="{{ route('banks.index') }}">
                                <span class="menu-icon">
                                    <i class="bi bi-bank fs-3"></i>
                                </span>
                                <span class="menu-title">Bank</span>
                            </a>
                        </div>
                    </div>
                </div>
                <div data-kt-menu-trigger="click" class="menu-item menu-accordion{{ request()->is('suppliers/*') ? ' hover show' : '' }}">
                    <span class="menu-link">
                        <span class="menu-icon">
                            <i class="bi bi-truck fs-3"></i>
                        </span>
                        <span class="menu-title">Pemasok</span>
                        <span class="menu-arrow"></span>
                    </span>
                    <div class="menu-sub menu-sub-accordion menu-active-bg{{ request()->is('suppliers/*') ? ' show' : '' }}">
                        <div class="menu-item">
                            <a class="menu-link{{ request()->is('suppliers/suppliersubtypes*') ? ' active' : '' }}" href="{{ route('suppliersubtypes.index') }}">
                                <span class="menu-bullet">
                                    <span class="bullet bullet-dot"></span>
                                </span>
                                <span class="menu-title">Sub Tipe</span>
                            </a>
                        </div>
                        <div class="menu-item">
                            <a class="menu-link{{ request()->is('suppliers/main*') ? ' active' : '' }}" href="{{ route('suppliers.index') }}">
                                <span class="menu-bullet">
                                    <span class="bullet bullet-dot"></span>
                                </span>
                                <span class="menu-title">Utama</span>
                            </a>
                        </div>
                        <div class="menu-item">
                            <a class="menu-link{{ request()->is('suppliers/supplieraccs*') ? ' active' : '' }}" href="{{ route('supplieraccs.index') }}">
                                <span class="menu-bullet">
                                    <span class="bullet bullet-dot"></span>
                                </span>
                                <span class="menu-title">Konfirmasi</span>
                            </a>
                        </div>
                    </div>
                </div>
                <div data-kt-menu-trigger="click" class="menu-item menu-accordion{{ request()->is('packages/*') ? ' hover show' : '' }}">
                    <span class="menu-link">
                        <span class="menu-icon">
                            <i class="bi bi-box-seam fs-3"></i>
                        </span>
                        <span class="menu-title">Paket</span>
                        <span class="menu-arrow"></span>
                    </span>
                    <div class="menu-sub menu-sub-accordion menu-active-bg{{ request()->is('packages/*') ? ' show' : '' }}">
                        <div class="menu-item">
                            <a class="menu-link{{ request()->is('packages/package*') ? ' active' : '' }}" href="{{ route('packages.index') }}">
                                <span class="menu-bullet">
                                    <span class="bullet bullet-dot"></span>
                                </span>
                                <span class="menu-title">Membuat Paket</span>
                            </a>
                        </div>
                        <div class="menu-item">
                            <a class="menu-link{{ request()->is('packages/registerpackages*') ? ' active' : '' }}" href="{{ route('registerpackages.index') }}">
                                <span class="menu-bullet">
                                    <span class="bullet bullet-dot"></span>
                                </span>
                                <span class="menu-title">Registrasi Paket</span>
                            </a>
                        </div>
                    </div>
                </div>
                @endrole
            </div>
            <!--end::Menu-->
        </div>
        <!--end::Aside Menu-->
    </div>
    <!--end::Aside menu-->
</div>
<!--end::Aside-->