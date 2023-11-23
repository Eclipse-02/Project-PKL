@extends('dashboard.account.master')

@section('inner-content')
    <div class="card mb-5 mb-xl-10">
        <!--begin::Card header-->
        <div class="card-header border-0 cursor-pointer" role="button" data-bs-toggle="collapse" data-bs-target="#kt_account_signin_method" aria-expanded="true">
            <div class="card-title m-0">
                <h3 class="fw-bolder m-0">Change Password</h3>
            </div>
        </div>
        <!--end::Card header-->
        <!--begin::Content-->
        <div id="kt_account_signin_method" class="collapse show" style="">
            <!--begin::Card body-->
            <div class="card-body border-top p-9">
                <!--begin::Password-->
                <div class="d-flex flex-wrap align-items-center">
                    <!--begin::Label-->
                    <div id="kt_signin_password">
                        <div class="fs-6 fw-bolder mb-1">Password</div>
                    </div>
                    <!--end::Label-->
                    <!--begin::Edit-->
                    <div id="kt_signin_password_edit" class="flex-row-fluid d-none">
                        <!--begin::Form-->
                        <form id="kt_signin_change_password" class="form fv-plugins-bootstrap5 fv-plugins-framework" action="{{ route('dashboard.account.updatepassword', auth()->user()->empl_id) }}" method="POST">
                            @csrf
                            @method('PUT')

                            <div class="row mb-3">
                                <div class="col-lg-4">
                                    <div class="fv-row mb-0 fv-plugins-icon-container">
                                        <label for="current_password" class="form-label fs-6 fw-bolder mb-3">Current Password</label>
                                        <input type="password" class="form-control form-control-lg form-control-solid" name="current_password" id="current_password">
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="fv-row mb-0 fv-plugins-icon-container">
                                        <label for="password" class="form-label fs-6 fw-bolder mb-3">New Password</label>
                                        <input type="password" class="form-control form-control-lg form-control-solid" name="password" id="password">
                                </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="fv-row mb-0 fv-plugins-icon-container">
                                        <label for="password_confirmation" class="form-label fs-6 fw-bolder mb-3">Confirm New Password</label>
                                        <input type="password" class="form-control form-control-lg form-control-solid" name="password_confirmation" id="password_confirmation">
                                </div>
                                </div>
                            </div>
                            <div class="d-flex">
                                <button id="kt_password_submit" type="submit" class="btn btn-primary me-2 px-6">Update Password</button>
                                <button id="kt_password_cancel" type="button" class="btn btn-color-gray-400 btn-active-light-primary px-6">Cancel</button>
                            </div>
                        </form>
                        <!--end::Form-->
                    </div>
                    <!--begin::Action-->
                    <div id="kt_signin_password_button" class="ms-auto">
                        <button class="btn btn-light btn-active-light-primary">Reset Password</button>
                    </div>
                    <!--end::Action-->
                    <!--end::Edit-->
                </div>
                <!--end::Password-->
            </div>
            <!--end::Card body-->
        </div>
        <!--end::Content-->
    </div>
@endsection

@section('inner-scripts')
    <script type="text/javascript">
        $(function () {

            $(document).on('click', '#kt_signin_password_button', function () {
                $('#kt_signin_password_edit').removeClass('d-none');
                $('#kt_signin_password_button').addClass('d-none');
                $('#kt_signin_password').addClass('d-none');
            });

            $(document).on('click', '#kt_password_cancel', function () {
                $('#kt_signin_password_button').removeClass('d-none');
                $('#kt_signin_password').removeClass('d-none');
                $('#kt_signin_password_edit').addClass('d-none');
            });
            

        });
    </script>
@endsection