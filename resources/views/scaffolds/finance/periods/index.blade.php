@extends('dashboard.master')

@section('title', 'GL Period')

@section('content')
    <!--begin::Col-->
    <div class="col-xxl-12">
        <!--begin::Widget-->
        <div class="card card-xxl-stretch mb-5 mb-xl-8">
            <!--begin::Body-->
            <div class="card-body d-flex flex-column px-4 py-6">
                <div class="row text-center">
                    {{-- header --}}
                    <div class="col-md-2 mb-3">
                        <b>PERIOD</b>
                    </div>
                    <div class="col-md-2 mb-3">
                        <b>TAHUN</b>
                    </div>
                    <div class="col-md-2 mb-3">
                        <b>BULAN</b>
                    </div>
                    <div class="col-md-2 mb-3">
                        <b>TANGGAL AWAL</b>
                    </div>
                    <div class="col-md-2 mb-3">
                        <b>TANGGAL AKHIR</b>
                    </div>
                    <div class="col-md-2 mb-3">
                        <b>STATUS</b>
                    </div>

                    {{-- body --}}
                    {{-- <div class="row text-center justify-content-around" style="max-height: 50vh; overflow-y: auto; width: calc(100% + 16px)"> --}}
                    @foreach ($data as $i)
                        <div class="col-md-2 mb-2">
                            <input type="text" class="form-control" id="period_name" name="period_name" placeholder="Period" value="{{ $i->period_name }}">
                        </div>
                        <div class="col-md-2 mb-2">
                            <input type="text" class="form-control" id="period_year" name="period_year" placeholder="Tahun" value="{{ $i->period_year }}">
                        </div>
                        <div class="col-md-2 mb-2">
                            <input type="text" class="form-control" id="period_num" name="period_num" placeholder="Bulan" value="{{ $i->period_num }}">
                        </div>
                        <div class="col-md-2 mb-2">
                            <input type="date" class="form-control" id="period_start_date" name="period_start_date" placeholder="Tanggal Awal" value="{{ $i->period_start_date }}">
                        </div>
                        <div class="col-md-2 mb-2">
                            <input type="date" class="form-control" id="period_end_date" name="period_end_date" placeholder="Tanggal Akhir" value="{{ $i->period_end_date }}">
                        </div>
                        <div class="col-md-2 mb-2" id="status">
                            <input type="hidden" value="{{ $i->id }}">
                            <select class="form-select" id="period_status" name="period_status">
                                <option value="OP" {{ $i->period_status == 'OP' ? 'selected' : '' }}>OPEN</option>
                                <option value="CL" {{ $i->period_status == 'CL' ? 'selected' : '' }}>CLOSE</option>
                            </select>
                        </div>
                    @endforeach
                    {{-- </div> --}}

                    <form action="{{ route('finances.periods.store') }}" method="POST">
                        @csrf

                        <div class="row border-top border-primary mt-2">
                            <div class="col-md-2 mt-2">
                                <input type="text" class="form-control @error('period_name')is-invalid @enderror" id="period_name" name="period_name" placeholder="Period">
                                @error('period_name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="col-md-2 mt-2">
                                <input type="text" class="form-control @error('period_year')is-invalid @enderror" id="period_year" name="period_year" placeholder="Tahun">
                                @error('period_year')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="col-md-2 mt-2">
                                <input type="text" class="form-control @error('period_num')is-invalid @enderror" id="period_num" name="period_num" placeholder="Bulan">
                                @error('period_num')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="col-md-2 mt-2">
                                <input type="date" class="form-control @error('period_start_date')is-invalid @enderror" id="period_start_date" name="period_start_date" placeholder="End Date">
                                @error('period_start_date')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="col-md-2 mt-2">
                                <input type="date" class="form-control @error('period_end_date')is-invalid @enderror" id="period_end_date" name="period_end_date" placeholder="End Date">
                                @error('period_end_date')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="col-md-2 mt-2">
                                <select class="form-select  @error('period_status')is-invalid @enderror" id="period_status" name="period_status">
                                    <option value="" selected disabled>-- Pilih Status --</option>
                                    <option value="OP">OPEN</option>
                                    <option value="CL">CLOSE</option>
                                </select>
                                @error('period_status')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="col-md-12 mt-3">
                                <button type="submit" class="btn btn-primary w-100">Create</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <!--end::Body-->
        </div>
        <!--end::Widget-->
    </div>
    <!--end::Col-->
@endsection

@section('scripts')
    <script type="text/javascript">
    $(document).ready(function() {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $(document).on('click', '#period_year', function() {
            $(this).datepicker({
                viewMode: 'years',
                minViewMode: 'years',
                format: 'yyyy',
                autoclose: true
            });
        });

        $(document).on('click', '#period_num', function() {
            $(this).datepicker({
                viewMode: 'months',
                minViewMode: 'months',
                format: 'mm',
                autoclose: true
            });
        });

        $(document).on('change', '#status', function() {
            var id = $(this).children('input').val()
            var value = $(this).children('select').val();
            $.ajax({
                url: 'http://127.0.0.1:8000/periods/' + id,
                type: 'PUT',
                data: {
                    period_status: value
                },
                success: function(msg){
                    alert("Successfully Changed!");
                }
            });
        });
    });
    </script>
@endsection
