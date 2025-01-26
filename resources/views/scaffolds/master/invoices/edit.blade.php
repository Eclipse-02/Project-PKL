@extends('dashboard.master')

@section('title', 'Registrasi Paket')

@section('content')
    <!--start::Col-->
    <div class="col-xxl-12">
        <!--begin::Card-->
        <div class="card">
            <!--begin::Card header-->
            <div class="card-header">
                <!--begin::Card title-->
                <div class="card-title m-0 flex-column">
                    <h3 class="fw-bolder m-0">Edit Registration Data</h3>
                    <div class="text-muted fs-7 fw-bold">Edit Data Registrasi</div>
                </div>
                <!--end::Card title-->
                <!--start::Button-->
                <!--start::Action-->
                <a href="{{ route('events.index') }}" class="btn btn-flex btn-light btn-light btn-active-primary fw-bolder align-self-center">
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
            <!--end::Card header-->
            <!--begin::Stepper-->
            <div class="stepper stepper-pills stepper-column d-flex flex-column flex-xl-row flex-row-fluid pt-10" id="kt_stepper_example_vertical" data-kt-stepper="true">
                <!--begin::Aside-->
                <div class="d-flex justify-content-center justify-content-xl-start flex-row-auto w-100 w-xl-300px">
                    <!--begin::Nav-->
                    <div class="stepper-nav ps-lg-10">
                        <!--begin::Step 1-->
                        <div class="stepper-item current" data-kt-stepper-element="nav" data-kt-stepper-action="step">
                            <!--begin::Line-->
                            <div class="stepper-line w-40px"></div>
                            <!--end::Line-->
                            <!--begin::Icon-->
                            <div class="stepper-icon w-40px h-40px">
                                <i class="stepper-check fas fa-check"></i>
                                <span class="stepper-number">1</span>
                            </div>
                            <!--end::Icon-->
                            <!--begin::Label-->
                            <div class="stepper-label">
                                <h3 class="stepper-title">Basic Info</h3>
                                <div class="stepper-desc">Informasi Dasar</div>
                            </div>
                            <!--end::Label-->
                        </div>
                        <!--end::Step 1-->
                        <!--begin::Step 2-->
                        <div class="stepper-item" data-kt-stepper-element="nav" data-kt-stepper-action="step">
                            <!--begin::Line-->
                            <div class="stepper-line w-40px"></div>
                            <!--end::Line-->
                            <!--begin::Icon-->
                            <div class="stepper-icon w-40px h-40px">
                                <i class="stepper-check fas fa-check"></i>
                                <span class="stepper-number">2</span>
                            </div>
                            <!--begin::Icon-->
                            <!--begin::Label-->
                            <div class="stepper-label">
                                <h3 class="stepper-title">Contact Details</h3>
                                <div class="stepper-desc">Detail Kontak</div>
                            </div>
                            <!--begin::Label-->
                        </div>
                        <!--end::Step 2-->
                        <!--begin::Step 3-->
                        <div class="stepper-item" data-kt-stepper-element="nav" data-kt-stepper-action="step">
                            <!--begin::Line-->
                            <div class="stepper-line w-40px"></div>
                            <!--end::Line-->
                            <!--begin::Icon-->
                            <div class="stepper-icon w-40px h-40px">
                                <i class="stepper-check fas fa-check"></i>
                                <span class="stepper-number">3</span>
                            </div>
                            <!--begin::Icon-->
                            <!--begin::Label-->
                            <div class="stepper-label">
                                <h3 class="stepper-title">Package Details</h3>
                                <div class="stepper-desc">Detail Paket</div>
                            </div>
                            <!--begin::Label-->
                        </div>
                        <!--end::Step 3-->
                    </div>
                    <!--end::Nav-->
                </div>
                <!--begin::Content-->
                <div class="flex-row-fluid py-lg-5 px-lg-15">
                    <!--begin::Form-->
                    <form class="form w-lg-500px mx-auto" action="{{ route('events.update', $data->id) }}" method="POST">
                        @csrf
                        @method('PUT')

                        <!--begin::Group-->
                        <div class="mb-5">
                            <!--begin::Step 1-->
                            <div class="current" data-kt-stepper-element="content">
                                <div class="w-100">
                                    <!--begin::Input group-->
                                    <div class="row mb-10">
                                        <!--begin::Col-->
                                        <div class="col-6 fv-row">
                                            <!--begin::Label-->
                                            <label class="form-label required">No Aplikasi</label>
                                            <!--end::Label-->

                                            <!--begin::Input-->
                                            <input class="form-control form-control form-control-solid @error('evn_code')is-invalid @enderror" type="text" name="evn_code" value="{{ $data->evn_code }}" readonly="readonly" />
                                            <!--end::Input-->

                                            <!--begin::Error-->
                                            @error('evn_code')
                                                <span class="invalid-feedback d-block" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                            <!--end::Error-->
                                        </div>
                                        <!--end::Col-->
                                        <!--begin::Col-->
                                        <div class="col-6 fv-row">
                                            <!--begin::Label-->
                                            <label class="form-label required">Aplikasi Status</label>
                                            <!--end::Label-->

                                            <!--begin::Input-->
                                            <select class="form-select form-select-solid @error('evn_status')is-invalid @enderror" name="evn_status" id="evn_status" data-control="select2" data-placeholder="Pilih Status" {{ $data->evn_status == 'CL' ? 'readonly' : '' }}>
                                                @if ($data->evn_status == 'NW')
                                                <option value="NW" {{ $data->evn_status == 'NW' ? 'selected' : '' }}>New</option>
                                                <option value="AC" {{ $data->evn_status == 'AC' ? 'selected' : '' }}>Accepted</option>
                                                <option value="CL" {{ $data->evn_status == 'CL' ? 'selected' : '' }}>Cancel</option>
                                                @elseif ($data->evn_status == 'AC')
                                                <option value="AC" {{ $data->evn_status == 'AC' ? 'selected' : '' }}>Accepted</option>
                                                <option value="CL" {{ $data->evn_status == 'CL' ? 'selected' : '' }}>Cancel</option>
                                                @endif
                                            </select>
                                            <!--end::Input-->

                                            <!--begin::Error-->
                                            @error('evn_status')
                                                <span class="invalid-feedback d-block" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                            <!--end::Error-->
                                        </div>
                                        <!--end::Col-->
                                    </div>
                                    <!--end::Input group-->

                                    <!--begin::Input group-->
                                    <div class="row mb-10">
                                        <!--begin::Col-->
                                        <div class="col-6 fv-row">
                                            <!--begin::Label-->
                                            <label class="form-label required">Paket</label>
                                            <!--end::Label-->

                                            <!--begin::Input-->
                                            <select class="form-select form-select-solid @error('pkg_code')is-invalid @enderror" name="pkg_code" id="pkg_code" data-placeholder="Pilih Title" disabled="disabled">
                                                <option></option>
                                                @foreach ($packages as $i)
                                                    <option value="{{ $i->pkg_code }}" {{ $i->pkg_code == $data->pkg_code ? 'selected' : '' }}>{{ $i->pkg_name }}</option>
                                                @endforeach
                                            </select>
                                            <!--end::Input-->

                                            <!--begin::Error-->
                                            @error('pkg_code')
                                                <span class="invalid-feedback d-block" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                            <!--end::Error-->
                                        </div>
                                        <!--end::Col-->
                                        <!--begin::Col-->
                                        <div class="col-6 fv-row">
                                            <!--begin::Label-->
                                            <label class="form-label required">Tanggal Aplikasi</label>
                                            <!--end::Label-->

                                            <!--begin::Input-->
                                            <input class="form-control form-control form-control-solid @error('evn_date')is-invalid @enderror" type="text" name="evn_date" value="{{ Carbon\Carbon::parse($data->evn_date)->isoFormat('dddd, D MMMM Y') }}" readonly="readonly" />
                                            <!--end::Input-->

                                            <!--begin::Error-->
                                            @error('evn_date')
                                                <span class="invalid-feedback d-block" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                            <!--end::Error-->
                                        </div>
                                        <!--end::Col-->
                                    </div>
                                    <!--end::Input group-->

                                    <!--begin::Input group-->
                                    <div class="fv-row mb-10">
                                        <!--begin::Label-->
                                        <label class="form-label required">Nama Instansi</label>
                                        <!--end::Label-->

                                        <!--begin::Textarea-->
                                        <input class="form-control form-control form-control-solid @error('evn_name')is-invalid @enderror" type="text" name="evn_name" value="{{ old('evn_name') ? old('evn_name') : $data->evn_name }}" />
                                        <!--end::Textarea-->

                                        <!--begin::Error-->
                                        @error('evn_name')
                                            <span class="invalid-feedback d-block" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                        <!--end::Error-->
                                    </div>
                                    <!--end::Input group-->
                                </div>
                            </div>
                            <!--begin::Step 1-->

                            <!--begin::Step 2-->
                            <div data-kt-stepper-element="content">
                                <div class="w-100">
                                    <!--begin::Input group-->
                                    <div class="fv-row mb-10">
                                        <!--begin::Label-->
                                        <label class="form-label">Alamat</label>
                                        <!--end::Label-->

                                        <!--begin::Textarea-->
                                        <textarea class="form-control form-control form-control-solid @error('evn_addr')is-invalid @enderror" name="evn_addr" data-kt-autosize="true">{{ old('evn_addr') ? old('evn_addr') : $data->evn_addr }}</textarea>
                                        <!--end::Textarea-->

                                        <!--begin::Error-->
                                        @error('evn_addr')
                                            <span class="invalid-feedback d-block" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                        <!--end::Error-->
                                    </div>
                                    <!--end::Input group-->

                                    <!--begin::Input group-->
                                    <div class="fv-row mb-10">
                                        <!--begin::Label-->
                                        <label class="form-label required">No NPWP</label>
                                        <!--end::Label-->

                                        <!--begin::Input-->
                                        <input class="form-control form-control form-control-solid @error('evn_npwp_no')is-invalid @enderror" type="text" name="evn_npwp_no" value="{{ old('evn_npwp_no') ? old('evn_npwp_no') : $data->evn_npwp_no }}" />
                                        <!--end::Input-->

                                        <!--begin::Error-->
                                        @error('evn_npwp_no')
                                            <span class="invalid-feedback d-block" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                        <!--end::Error-->
                                    </div>
                                    <!--end::Input group-->

                                    <!--begin::Input group-->
                                    <div class="fv-row mb-10">
                                        <!--begin::Label-->
                                        <label class="form-label required">Contact Person</label>
                                        <!--end::Label-->

                                        <!--begin::Input-->
                                        <input class="form-control form-control form-control-solid @error('evn_contact')is-invalid @enderror" type="text" name="evn_contact" value="{{ old('evn_contact') ? old('evn_contact') : $data->evn_contact }}" />
                                        <!--end::Input-->

                                        <!--begin::Error-->
                                        @error('evn_contact')
                                            <span class="invalid-feedback d-block" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                        <!--end::Error-->
                                    </div>
                                    <!--end::Input group-->

                                    <!--begin::Input group-->
                                    <div class="fv-row mb-10">
                                        <!--begin::Label-->
                                        <label class="form-label required">No HP</label>
                                        <!--end::Label-->

                                        <!--begin::Input-->
                                        <input class="form-control form-control form-control-solid @error('evn_tlp_no')is-invalid @enderror" type="text" name="evn_tlp_no" value="{{ old('evn_tlp_no') ? old('evn_tlp_no') : $data->evn_tlp_no }}" />
                                        <!--end::Input-->

                                        <!--begin::Error-->
                                        @error('evn_tlp_no')
                                            <span class="invalid-feedback d-block" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                        <!--end::Error-->
                                    </div>
                                    <!--end::Input group-->
                                </div>
                            </div>
                            <!--begin::Step 2-->

                            <!--begin::Step 3-->
                            <div data-kt-stepper-element="content">
                                <div class="w-100">
                                    <!--begin::Input group-->
                                    <div class="fv-row mb-10">
                                        <!--begin::Table wrapper-->
                                        <div class="table-responsive mb-10">
                                            <!--begin::Table-->
                                            <table class="table g-5 gs-0 mb-0 fw-bolder text-gray-700" data-kt-element="items">
                                                <!--begin::Table head-->
                                                <thead>
                                                    <tr class="border-bottom fs-7 fw-bolder text-gray-700 text-uppercase">
                                                        <th class="min-w-300px w-475px">Details</th>
                                                        <th class="min-w-150px w-300px">Price Unit</th>
                                                        <th class="min-w-150px w-300px">Qty</th>
                                                        <th class="min-w-150px w-300px">Total</th>
                                                    </tr>
                                                </thead>
                                                <!--end::Table head-->
                                                <!--begin::Table body-->
                                                <tbody id="dtl_tbody">
                                                    @foreach ($details as $i)
                                                        <tr id="item_{{ $i->dtl_sq_no }}">
                                                            <td class="pe-7">
                                                                <input type="text" class="form-control form-control-solid" value="{{ $i->dtl_desc }}" name="dtl_desc[]" placeholder="Detail" readonly="readonly" />
                                                            </td>
                                                            <td class="pe-7">
                                                                <input type="text" class="form-control form-control-solid" value="{{ $i->dtl_unit_price }}" name="dtl_unit_price[]" placeholder="Unit Price" readonly="readonly" />
                                                            </td>
                                                            <td class="pe-7">
                                                                <input type="text" class="form-control form-control-solid" value="{{ $i->dtl_qty }}" name="dtl_qty[]" placeholder="Qty" />
                                                            </td>
                                                            <td class="pe-7">
                                                                <input type="text" class="form-control form-control-solid" value="{{ $i->dtl_price }}" name="dtl_price[]" placeholder="Price" readonly="readonly" />
                                                            </td>
                                                        </tr>
                                                    @endforeach
                                                </tbody>
                                                <!--end::Table body-->
                                            </table>
                                        </div>
                                        <!--end::Table-->
                                    </div>
                                    <!--end::Input group-->
                                </div>
                            </div>
                            <!--begin::Step 3-->
                        </div>
                        <!--end::Group-->

                        <!--begin::Actions-->
                        <div class="d-flex flex-stack">
                            <!--begin::Wrapper-->
                            <div class="me-2">
                                <button type="button" class="btn btn-light btn-active-light-primary" data-kt-stepper-action="previous">
                                    Kembali
                                </button>
                            </div>
                            <!--end::Wrapper-->

                            <!--begin::Wrapper-->
                            <div>
                                <button type="submit" class="btn btn-primary" data-kt-stepper-action="submit">
                                    <span class="indicator-label">
                                        Simpan
                                    </span>
                                    <span class="indicator-progress">
                                        Please wait... <span class="spinner-border spinner-border-sm align-middle ms-2"></span>
                                    </span>
                                </button>

                                <button type="button" class="btn btn-primary" data-kt-stepper-action="next">
                                    Lanjut
                                </button>
                            </div>
                            <!--end::Wrapper-->
                        </div>
                        <!--end::Actions-->
                    </form>
                    <!--end::Form-->
                </div>
            </div>
            <!--end::Stepper-->
        </div>
        <!--end::Card-->
    </div>
    <!--end::Col-->
@endsection

@section('scripts')
<script type="text/javascript">
$(document).ready(function() {

    // Stepper element
    var element = document.querySelector("#kt_stepper_example_vertical");

    // Initialize Stepper
    var stepper = new KTStepper(element);

    // Handle next step
    stepper.on("kt.stepper.next", function (stepper) {
        stepper.goNext(); // go next step
    });

    // Handle previous step
    stepper.on("kt.stepper.previous", function (stepper) {
        stepper.goPrevious(); // go previous step
    });

    // Handle navigation click
    stepper.on("kt.stepper.click", function (stepper) {
        stepper.goTo(stepper.getClickedStepIndex()); // go to clicked step
    });

    // Handle submit button
    stepper.on("kt.stepper.changed", function(stepper) {
        if (stepper.getCurrentStepIndex() === 3) {
            document.querySelectorAll('[data-kt-stepper-action="submit"]')[0].classList.remove("d-none")
            document.querySelectorAll('[data-kt-stepper-action="submit"]')[0].classList.add("d-inline-block")
            document.querySelectorAll('[data-kt-stepper-action="submit"]')[1].classList.remove("d-none")
            document.querySelectorAll('[data-kt-stepper-action="submit"]')[1].classList.add("d-inline-block")
            document.querySelector('[data-kt-stepper-action="next"]').classList.add("d-none")
        } else {
            document.querySelectorAll('[data-kt-stepper-action="submit"]')[0].classList.add("d-none")
            document.querySelectorAll('[data-kt-stepper-action="submit"]')[0].classList.remove("d-inline-block")
            document.querySelectorAll('[data-kt-stepper-action="submit"]')[1].classList.add("d-none")
            document.querySelectorAll('[data-kt-stepper-action="submit"]')[1].classList.remove("d-inline-block")
            document.querySelector('[data-kt-stepper-action="next"]').classList.remove("d-none")
        }
    });

    $(document).on('change', '[name="dtl_qty[]"]', function () {
        let price = $('[id^="item_"]').find('[name="dtl_unit_price[]"]').val();
        let qty = $('[id^="item_"]').find('[name="dtl_qty[]"]').val();
        let value = price * qty;
        $('[id^="item_"]').find('[name="dtl_price[]"]').val(value);
    });

    $('.filter-select').change(function() {
        table.column( $(this).data('column') )
            .search( $(this).val() )
            .draw();
    });

    Inputmask("9999-9999-9999-9999", {
        "numericInput": true,
        "reverse": false
    }).mask("[name='evn_npwp_no']");

    Inputmask({
        "mask": "+62 999-9999-9999",
        "placeholder": "+62 000-0000-0000"
    }).mask("[name='evn_tlp_no']");

});
</script>
@endsection