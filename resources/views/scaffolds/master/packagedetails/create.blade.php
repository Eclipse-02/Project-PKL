@extends('dashboard.master')

@section('title', 'Paket')

@section('content')
    <!--begin::Post-->
    <div class="post d-flex flex-column-fluid" id="kt_post">
        <!--begin::Container-->
        <div id="kt_content_container" class="container-xxl">
            <!--begin::Layout-->
                <div class="d-flex flex-column flex-lg-row">
                    <!--begin::Content-->
                    <div class="flex-lg-row-fluid mb-10 mb-lg-0 me-lg-7 me-xl-10">
                        <!--begin::Card-->
                        <div class="card">
                            <!--begin::Card body-->
                            <div class="card-body p-12">
                                <!--begin::Form-->
                                <form action="{{ route('packagedetails.store') }}" method="POST" id="kt_invoice_form">
                                    @csrf
                                    <input type="hidden" name="pkg_code" value="{{ $data->pkg_code }}">
                                    <input type="hidden" name="pkg_status" value="{{ $data->pkg_status }}">

                                    <!--begin::Wrapper-->
                                    <div class="d-flex align-items-start flex-xxl-row">
                                        <!--begin::Input group-->
                                        <div class="d-flex flex-equal justify-content-between fw-row text-nowrap order-1 order-xxl-2 me-4" data-bs-toggle="tooltip" data-bs-trigger="hover">
                                            <span class="fs-2x fw-bolder text-gray-800 d-flex flex-center">
                                                Package Detail -
                                                <span class="fw-bolder text-muted fs-3 w-125px ms-3">{{ $data->pkg_name }}</span>
                                            </span>
                                            <!--start::Button-->
                                            <!--start::Action-->
                                            <a href="{{ route('packages.index') }}" class="btn btn-flex btn-light btn-light btn-active-primary fw-bolder align-self-center">
                                                <!--begin::Svg Icon | path: assets/media/icons/duotune/arrows/arr002.svg-->
                                                <span class="svg-icon svg-icon-muted svg-icon-2">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                        <path d="M9.60001 11H21C21.6 11 22 11.4 22 12C22 12.6 21.6 13 21 13H9.60001V11Z" fill="black"/>
                                                        <path opacity="0.3" d="M9.6 20V4L2.3 11.3C1.9 11.7 1.9 12.3 2.3 12.7L9.6 20Z" fill="black"/>
                                                    </svg>
                                                </span>
                                                <!--end::Svg Icon-->Return</a>
                                            <!--end::Button-->
                                            <!--end::Action-->
                                        </div>
                                        <!--end::Input group-->
                                    </div>
                                    <!--end::Top-->
                                    <!--begin::Separator-->
                                    <div class="separator separator-dashed my-10"></div>
                                    <!--end::Separator-->
                                    <!--begin::Wrapper-->
                                    <div class="mb-0">
                                        <!--begin::Table wrapper-->
                                        <div class="table-responsive mb-10">
                                            <!--begin::Table-->
                                            <table class="table g-5 gs-0 mb-0 fw-bolder text-gray-700" data-kt-element="items">
                                                <!--begin::Table head-->
                                                <thead>
                                                    <tr class="border-bottom fs-7 fw-bolder text-gray-700 text-uppercase">
                                                        <th class="min-w-300px w-475px">Details</th>
                                                        <th class="min-w-300px w-475px">Price Unit</th>
                                                        <th class="min-w-75px w-75px text-end">Action</th>
                                                    </tr>
                                                </thead>
                                                <!--end::Table head-->
                                                <!--begin::Table body-->
                                                <tbody>
                                                    @foreach ($details as $i)
                                                    <tr data-kt-element="item" id="dtl_{{ $i->id }}">
                                                        <td class="pe-7">
                                                            <input type="text" class="form-control form-control-solid" name="dtl_desc[]" value="{{ $i->dtl_desc }}" placeholder="Detail" />
                                                        </td>
                                                        <td class="pe-7">
                                                            <input type="text" class="form-control form-control-solid" name="dtl_price[]" value="{{ $i->dtl_price }}" placeholder="Price" />
                                                        </td>
                                                        <td class="pt-5 text-end">
                                                            <button type="button" class="btn btn-sm btn-icon btn-active-color-primary swal-dtl-delete" value="{{ $i->id }}">
                                                                <!--begin::Svg Icon | path: icons/duotune/general/gen027.svg-->
                                                                <span class="svg-icon svg-icon-3">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                                        <path d="M5 9C5 8.44772 5.44772 8 6 8H18C18.5523 8 19 8.44772 19 9V18C19 19.6569 17.6569 21 16 21H8C6.34315 21 5 19.6569 5 18V9Z" fill="black" />
                                                                        <path opacity="0.5" d="M5 5C5 4.44772 5.44772 4 6 4H18C18.5523 4 19 4.44772 19 5V5C19 5.55228 18.5523 6 18 6H6C5.44772 6 5 5.55228 5 5V5Z" fill="black" />
                                                                        <path opacity="0.5" d="M9 4C9 3.44772 9.44772 3 10 3H14C14.5523 3 15 3.44772 15 4V4H9V4Z" fill="black" />
                                                                    </svg>
                                                                </span>
                                                                <!--end::Svg Icon-->
                                                            </button>
                                                        </td>
                                                    </tr>
                                                    @endforeach
                                                    <tr class="border-bottom border-bottom-dashed" data-kt-element="item">
                                                    </tr>
                                                    <tr class="border-bottom border-bottom-dashed" data-kt-element="item">
                                                        <td class="pe-7">
                                                            <input type="text" class="form-control form-control-solid" name="dtl_desc[]" placeholder="Detail" />
                                                        </td>
                                                        <td class="pe-7">
                                                            <input type="text" class="form-control form-control-solid" name="dtl_price[]" placeholder="Price" />
                                                        </td>
                                                        <td class="pt-5 text-end">
                                                            <button type="button" class="btn btn-sm btn-icon btn-active-color-primary" data-kt-element="remove-item">
                                                                <!--begin::Svg Icon | path: icons/duotune/general/gen027.svg-->
                                                                <span class="svg-icon svg-icon-3">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                                        <path d="M5 9C5 8.44772 5.44772 8 6 8H18C18.5523 8 19 8.44772 19 9V18C19 19.6569 17.6569 21 16 21H8C6.34315 21 5 19.6569 5 18V9Z" fill="black" />
                                                                        <path opacity="0.5" d="M5 5C5 4.44772 5.44772 4 6 4H18C18.5523 4 19 4.44772 19 5V5C19 5.55228 18.5523 6 18 6H6C5.44772 6 5 5.55228 5 5V5Z" fill="black" />
                                                                        <path opacity="0.5" d="M9 4C9 3.44772 9.44772 3 10 3H14C14.5523 3 15 3.44772 15 4V4H9V4Z" fill="black" />
                                                                    </svg>
                                                                </span>
                                                                <!--end::Svg Icon-->
                                                            </button>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                                <!--end::Table body-->
                                                <!--begin::Table foot-->
                                                <tfoot>
                                                    <tr class="border-top border-top-dashed align-top fs-6 fw-bolder text-gray-700">
                                                        <th class="text-primary">
                                                            <button class="btn btn-link py-1" data-kt-element="add-item">Add Detail</button>
                                                        </th>
                                                        <th class="text-primary" colspan="2">
                                                            <button type="submit" class="btn btn-primary w-100">Simpan</button>
                                                        </th>
                                                    </tr>
                                                    <tr class="border-top border-top-dashed align-top fs-6 fw-bolder text-gray-700">
                                                        <th class="text-primary">
                                                            @error('dtl_desc.*')
                                                                <!--start::Error-->
                                                                <span class="invalid-feedback d-block" role="alert">
                                                                    <strong>{{ $message }}</strong>
                                                                </span>
                                                                <!--end::Error-->
                                                            @enderror
                                                            @error('dtl_price.*')
                                                                <!--start::Error-->
                                                                <span class="invalid-feedback d-block" role="alert">
                                                                    <strong>{{ $message }}</strong>
                                                                </span>
                                                                <!--end::Error-->
                                                            @enderror
                                                        </th>
                                                    </tr>
                                                </tfoot>
                                                <!--end::Table foot-->
                                            </table>
                                        </div>
                                        <!--end::Table-->
                                        <!--begin::Item template-->
                                        <table class="table d-none" data-kt-element="item-template">
                                            <tr class="border-bottom border-bottom-dashed" data-kt-element="item">
                                                <td class="pe-7">
                                                    <input type="text" class="form-control form-control-solid" name="dtl_desc[]" placeholder="Detail" />
                                                </td>
                                                <td class="pe-7">
                                                    <input type="text" class="form-control form-control-solid" name="dtl_price[]" placeholder="Price" />
                                                </td>
                                                <td class="pt-5 text-end">
                                                    <button type="button" class="btn btn-sm btn-icon btn-active-color-primary" data-kt-element="remove-item">
                                                        <!--begin::Svg Icon | path: icons/duotune/general/gen027.svg-->
                                                        <span class="svg-icon svg-icon-3">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                                <path d="M5 9C5 8.44772 5.44772 8 6 8H18C18.5523 8 19 8.44772 19 9V18C19 19.6569 17.6569 21 16 21H8C6.34315 21 5 19.6569 5 18V9Z" fill="black" />
                                                                <path opacity="0.5" d="M5 5C5 4.44772 5.44772 4 6 4H18C18.5523 4 19 4.44772 19 5V5C19 5.55228 18.5523 6 18 6H6C5.44772 6 5 5.55228 5 5V5Z" fill="black" />
                                                                <path opacity="0.5" d="M9 4C9 3.44772 9.44772 3 10 3H14C14.5523 3 15 3.44772 15 4V4H9V4Z" fill="black" />
                                                            </svg>
                                                        </span>
                                                        <!--end::Svg Icon-->
                                                    </button>
                                                </td>
                                            </tr>
                                        </table>
                                        <!--end::Item template-->
                                    </div>
                                    <!--end::Wrapper-->
                                </form>
                                <!--end::Form-->
                            </div>
                            <!--end::Card body-->
                        </div>
                        <!--end::Card-->
                    </div>
                    <!--end::Content-->
                </div>
                <!--end::Layout-->
        </div>
        <!--end::Container-->
    </div>
    <!--end::Post-->
@endsection

@section('scripts')
<script src="{{ asset('master/html/theme/dist/assets/js/custom/apps/invoices/create.js') }}"></script>
<script type="text/javascript">
    $(function() {

        // var table = $('.table').DataTable({
        //     processing: true,
        //     scrollX: true,
        //     ajax: {
        //         "url": "{{ route('packages.index') }}",
		// 		"type": "GET"
        //     },
        //     columns: [{
        //             data: "DT_RowIndex",
        //             name: "DT_RowIndex",
        //             orderable: true,
        //             searchable: false
        //         },
        //         {
        //             data: "pkg_code",
        //             name: "pkg_code"
        //         },
        //         {
        //             data: "pkg_name",
        //             name: "pkg_name"
        //         },
        //         {
        //             data: "pkg_desc",
        //             name: "pkg_desc"
        //         },
        //         {
        //             data: "pkg_price",
        //             name: "pkg_price"
        //         },
        //         {
        //             data: "pkg_price_limit",
        //             name: "pkg_price_limit"
        //         },
        //         {
        //             data: "pkg_price_agent",
        //             name: "pkg_price_agent"
        //         },
        //         {
        //             data: "pkg_start",
        //             name: "pkg_start"
        //         },
        //         {
        //             data: "pkg_closed",
        //             name: "pkg_closed"
        //         },
        //         {
        //             data: "pkg_image",
        //             name: "pkg_image"
        //         },
        //         {
        //             data: "pkg_is_display",
        //             render: function (data) {
        //                 if (data == 'Y') {
        //                     return 'Ya';
        //                 } else {
        //                     return 'Tidak';
        //                 }
        //             }
        //         },
        //         {
        //             data: "dtl_sq_no",
        //             name: "dtl_sq_no"
        //         },
        //         {
        //             data: "dtl_desc",
        //             name: "dtl_desc"
        //         },
        //         {
        //             data: "dtl_price",
        //             name: "dtl_price"
        //         },
        //         {
        //             data: "pkg_status",
        //             render: function (data) {
        //                 if (data == 'NW') {
        //                     return 'New';
        //                 } else if (data == 'AC'){
        //                     return 'Aktif';
        //                 } else if (data == 'CN'){
        //                     return 'Cancel';
        //                 } else {
        //                     return 'Closed';
        //                 }
        //             }
        //         },
        //         {
        //             data: "action",
        //             name: "action",
        //             orderable: false,
        //             searchable: false
        //         },
        //     ]
        // });

        // // Stepper element
        // var element = document.querySelector("#kt_stepper_example_vertical");

        // // Initialize Stepper
        // var stepper = new KTStepper(element);

        // // Handle next step
        // stepper.on("kt.stepper.next", function (stepper) {
        //     stepper.goNext(); // go next step
        // });

        // // Handle previous step
        // stepper.on("kt.stepper.previous", function (stepper) {
        //     stepper.goPrevious(); // go previous step
        // });

        // // Handle navigation click
        // stepper.on("kt.stepper.click", function (stepper) {
        //     stepper.goTo(stepper.getClickedStepIndex()); // go to clicked step
        // });
        
        // // Handle submit button
        // stepper.on("kt.stepper.changed", function(stepper) {
        //     if (stepper.getCurrentStepIndex() === 4) {
        //         document.querySelector('[data-kt-stepper-action="submit"]').classList.remove("d-none")
        //         document.querySelector('[data-kt-stepper-action="submit"]').classList.add("d-inline-block")
        //         document.querySelector('[data-kt-stepper-action="next"]').classList.add("d-none")
        //     } else {
        //         document.querySelector('[data-kt-stepper-action="submit"]').classList.add("d-none")
        //         document.querySelector('[data-kt-stepper-action="submit"]').classList.remove("d-inline-block")
        //         document.querySelector('[data-kt-stepper-action="next"]').classList.remove("d-none")
        //     }
        // });

        // $('.filter-select').change(function() {
        //     table.column( $(this).data('column') )
        //         .search( $(this).val() )
        //         .draw();
        // });

        // // Currency
        // Inputmask("decimal", {
        //     numericInput: true,
        //     groupSeparator: '.',
        //     radixPoint: ",",
        //     digits: 2,
        //     autoGroup: true,
        //     autoUnmask: true,
        //     prefix: 'Rp. ',
        //     placeholder: '0,00',
        //     androidHack: "rtfm",
        //     //clearIncomplete: !0,
        // }).mask(".dtl_price");

        // $(document).on('click', '[data-kt-element="add-item"]', function () {
        //     console.log('send');
        //     Inputmask("decimal", {
        //         numericInput: true,
        //         groupSeparator: '.',
        //         radixPoint: ",",
        //         digits: 2,
        //         autoGroup: true,
        //         autoUnmask: true,
        //         prefix: 'Rp. ',
        //         placeholder: '0,00',
        //         androidHack: "rtfm",
        //         //clearIncomplete: !0,
        //     }).mask(".dtl_price");
        // })

    });
</script>
@endsection