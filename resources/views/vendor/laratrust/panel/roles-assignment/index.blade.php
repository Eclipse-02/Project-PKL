@extends('dashboard.master')

@section('title', 'User Role')

@section('content')
  <!--begin::Col-->
  <div class="col-xxl-12">
    <!--begin::Widget-->
    <div class="card card-xxl-stretch mb-5 mb-xl-8">
        <!--begin::Body-->
        <div class="card-body d-flex flex-column p-0">
            <!--begin::Stats-->
            <div class="flex-grow-1 card-p pb-0">
                <div class="d-flex flex-stack flex-wrap">
                    <div class="me-2">
                        <a class="text-dark text-hover-primary fw-bolder fs-3">Data Table</a>
                        <div class="text-muted fs-7 fw-bold">Tabel Data</div>
                    </div>
                    <!--begin::Actions-->
                    <div class="d-flex align-items-center py-1">
                        <!--begin::Wrapper-->
                        <div class="me-4">
                            <!--begin::Menu-->
                            <a href="#" class="btn btn-sm btn-flex btn-light btn-active-primary fw-bolder" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                            <!--begin::Svg Icon | path: icons/duotune/general/gen031.svg-->
                            <span class="svg-icon svg-icon-5 svg-icon-gray-500 me-1">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                    <path d="M19.0759 3H4.72777C3.95892 3 3.47768 3.83148 3.86067 4.49814L8.56967 12.6949C9.17923 13.7559 9.5 14.9582 9.5 16.1819V19.5072C9.5 20.2189 10.2223 20.7028 10.8805 20.432L13.8805 19.1977C14.2553 19.0435 14.5 18.6783 14.5 18.273V13.8372C14.5 12.8089 14.8171 11.8056 15.408 10.964L19.8943 4.57465C20.3596 3.912 19.8856 3 19.0759 3Z" fill="black" />
                                </svg>
                            </span>
                            <!--end::Svg Icon-->Filter</a>
                            <!--begin::Menu 1-->
                            <div class="menu menu-sub menu-sub-dropdown w-250px w-md-300px" data-kt-menu="true" id="kt_menu_61484bf44d957">
                                <!--begin::Header-->
                                <div class="px-7 py-5">
                                    <div class="fs-5 text-dark fw-bolder d-inline">Filter Options</div>
                                    <span class="text-center text-muted text-uppercase fw-bolder"> / </span>
                                    <div class="text-muted fs-6 fw-bold d-inline">Opsi Filter</div>
                                </div>
                                <!--end::Header-->
                                <!--begin::Menu separator-->
                                <div class="separator border-gray-200"></div>
                                <!--end::Menu separator-->
                                <!--begin::Form-->
                                <div class="px-7 py-5">
                                    <!--begin::Input group-->
                                    <p class="fw-bold text-center">Tidak ada Filter untuk Tabel ini</p>
                                    <!--end::Input group-->
                                </div>
                                <!--end::Form-->
                            </div>
                            <!--end::Menu 1-->
                            <!--end::Menu-->
                        </div>
                        <!--end::Wrapper-->
                        <!--begin::Button-->
                        <a href="#" class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#create_modal">Create</a>
                        <!--end::Button-->
                    </div>
                    <!--end::Actions-->
                </div>
            </div>
            <!--end::Stats-->
            <!--start::Table-->
            <table class="table table-striped gy-7 gs-7">
                <!--start::Thead-->
                <thead>
                    <tr class="fw-bold fs-6 text-gray-800 border-bottom-2 border-gray-200">
                        <th class="min-w-50px">ID</th>
                        <th class="min-w-100px">User</th>
                        <th class="min-w-100px">Role</th>
                        @if(config('laratrust.panel.assign_permissions_to_user'))<th>Permissions</th>@endif
                        <th class="min-w-100px text-center"></th>
                    </tr>
                </thead>
                <!--end::Thead-->
                <!--start::Tbody-->
                <tbody>
                  @foreach ($users as $user)
                  <tr>
                    <td>
                      {{$user->getKey()}}
                    </td>
                    <td>
                      {{$user->name ?? 'The model doesn\'t have a `name` attribute'}}
                    </td>
                    <td>
                      {{$user->roles_count}}
                    </td>
                    @if(config('laratrust.panel.assign_permissions_to_user'))
                    <td>
                      {{$user->permissions_count}}
                    </td>
                    @endif
                    <td>
                      <a
                        href="{{route('laratrust.roles-assignment.edit', ['roles_assignment' => $user->getKey(), 'model' => $modelKey])}}"
                        class="btn btn-primary"
                      >Edit</a>
                    </td>
                  </tr>
                  @endforeach
                </tbody>
                <!--end::Tbody-->
            </table>
            <!--end::Table-->
        </div>
        <!--end::Body-->
    </div>
    <!--end::Widget-->
  </div>
  <!--end::Col-->
@endsection
