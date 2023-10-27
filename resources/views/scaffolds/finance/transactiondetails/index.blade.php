@extends('dashboard.master')

@section('title', 'Transaction')

@section('content')
<div class="row">
    <div class="col-md-6 text-center row">
        <div class="col-md-2">
            <b>KODE</b>
        </div>
        <div class="col-md-4">
            <b>KETERANGAN</b>
        </div>
        <div class="col-md-2">
            <b>FLAG</b>
        </div>
        <div class="col-md-4">
            <b>PARAMETER</b>
        </div>

        @foreach ($data as $i)
            <div class="col-md-2">
                <input type="text" class="form-control" id="trxdtl_code" name="trxdtl_code" placeholder="Period" value="{{ $i->trxdtl_code }}">
            </div>
            <div class="col-md-4">
                <input type="text" class="form-control" id="trxdtl_desc" name="trxdtl_desc" placeholder="Tahun" value="{{ $i->trxdtl_desc }}">
            </div>
            <div class="col-md-2">
                <select class="form-select" id="trxdtl_flag" name="trxdtl_flag">
                    <option>-- Pilih Flag --</option>
                    <option value="D" {{ $i->trxdtl_flag == 'D' ? 'selected' : '' }}>TITIPAN</option>
                    <option value="P" {{ $i->trxdtl_flag == 'P' ? 'selected' : '' }}>UANG MUKA</option>
                    <option value="T" {{ $i->trxdtl_flag == 'T' ? 'selected' : '' }}>PPH</option>
                </select>
            </div>
            <div class="col-md-4">
                <select class="form-select" id="trxdtl_param" name="trxdtl_param">
                    <option>-- Pilih Parameter --</option>
                    @foreach ($trx_headers as $t)
                        <option value="{{ $t->param_code }}" {{ $t->param_code == $i->trxdtl_param ? 'selected' : '' }}>{{ $t->param_desc }}</option>
                    @endforeach
                </select>
            </div>
        @endforeach
    </div>
    <div class="col-md-6 row vw-50" style="overflow-x: auto">
        <div class="w-auto">
            <b>SEGMEN 1</b>
        </div>
        <div class="w-auto">
            <b>SEGMEN 2</b>
        </div>
        <div class="w-auto">
            <b>SEGMEN 3</b>
        </div>
        <div class="w-auto">
            <b>SEGMEN 4</b>
        </div>
        <div class="w-auto">
            <b>SEGMEN 5</b>
        </div>
        <div class="w-auto">
            <b>SEGMEN 6</b>
        </div>
        <div class="w-auto">
            <b>SEGMEN 7</b>
        </div>
        <div class="w-auto">
            <b>SEGMEN 8</b>
        </div>
        <div class="w-auto">
            <b>SEGMEN 9</b>
        </div>
        <div class="w-auto">
            <b>SEGMEN 10</b>
        </div>
        <div class="w-auto">
            <b>SEGMEN 11</b>
        </div>
        <div class="w-auto">
            <b>SEGMEN 12</b>
        </div>
        <div class="w-auto">
            <b>IS SHARE</b>
        </div>
        @foreach ($data as $i)
            <div class="col-md-2">
                <input type="text" class="form-control" id="trxdtl_segment1" name="trxdtl_segment1" placeholder="" value="{{ $i->trxdtl_segment1 }}">
            </div>
            <div class="col-md-4">
                <input type="text" class="form-control" id="trxdtl_segment2" name="trxdtl_segment2" placeholder="" value="{{ $i->trxdtl_segment2 }}">
            </div>
            <div class="col-md-4">
                <input type="text" class="form-control" id="trxdtl_segment3" name="trxdtl_segment3" placeholder="" value="{{ $i->trxdtl_segment3 }}">
            </div>
            <div class="col-md-4">
                <input type="text" class="form-control" id="trxdtl_segment4" name="trxdtl_segment4" placeholder="" value="{{ $i->trxdtl_segment4 }}">
            </div>
            <div class="col-md-4">
                <input type="text" class="form-control" id="trxdtl_segment5" name="trxdtl_segment5" placeholder="" value="{{ $i->trxdtl_segment5 }}">
            </div>
            <div class="col-md-4">
                <input type="text" class="form-control" id="trxdtl_segment6" name="trxdtl_segment6" placeholder="" value="{{ $i->trxdtl_segment6 }}">
            </div>
            <div class="col-md-4">
                <input type="text" class="form-control" id="trxdtl_segment7" name="trxdtl_segment7" placeholder="" value="{{ $i->trxdtl_segment7 }}">
            </div>
            <div class="col-md-4">
                <input type="text" class="form-control" id="trxdtl_segment8" name="trxdtl_segment8" placeholder="" value="{{ $i->trxdtl_segment8 }}">
            </div>
            <div class="col-md-4">
                <input type="text" class="form-control" id="trxdtl_segment9" name="trxdtl_segment9" placeholder="" value="{{ $i->trxdtl_segment9 }}">
            </div>
            <div class="col-md-4">
                <input type="text" class="form-control" id="trxdtl_segment10" name="trxdtl_segment10" placeholder="" value="{{ $i->trxdtl_segment10 }}">
            </div>
            <div class="col-md-4">
                <input type="text" class="form-control" id="trxdtl_segment11" name="trxdtl_segment11" placeholder="" value="{{ $i->trxdtl_segment11 }}">
            </div>
            <div class="col-md-4">
                <input type="text" class="form-control" id="trxdtl_segment12" name="trxdtl_segment12" placeholder="" value="{{ $i->trxdtl_segment12 }}">
            </div>
            <div class="col-md-4">
                <input type="text" class="form-control" id="trxdtl_by_isshare" name="trxdtl_by_isshare" placeholder="" value="{{ $i->trxdtl_by_isshare }}">
            </div>
        @endforeach
    </div>
    <div class="col-md-12">
        {{-- <form action="{{ route('periods.store') }}" method="POST">
            @csrf

            <tfoot>
                <tr>
                    <td class="col-md-2">
                        <input type="text" class="form-control @error('period_name')is-invalid @enderror" id="period_name" name="period_name" placeholder="Period">
                        @error('period_name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </td>
                    <td>
                        <input type="text" class="form-control @error('period_year')is-invalid @enderror" id="period_year" name="period_year" placeholder="Tahun">
                        @error('period_year')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </td>
                    <td>
                        <input type="text" class="form-control @error('period_num')is-invalid @enderror" id="period_num" name="period_num" placeholder="Bulan">
                        @error('period_num')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </td>
                    <td>
                        <input type="date" class="form-control @error('period_start_date')is-invalid @enderror" id="period_start_date" name="period_start_date" placeholder="End Date">
                        @error('period_start_date')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </td>
                    <td>
                        <input type="date" class="form-control @error('period_end_date')is-invalid @enderror" id="period_end_date" name="period_end_date" placeholder="End Date">
                        @error('period_end_date')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </td>
                    <td>
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
                    </td>
                </tr>
                <tr>
                    <td colspan="6">
                        <button type="submit" class="btn btn-primary col-2">Create</button>
                    </td>
                </tr>
            </tfoot>
        </form> --}}
    </div>
</div>
@endsection

@section('scripts')
    <script type="text/javascript">
    $(function() {
        var table = $('#example').DataTable({
            processing: true,
            serverSide: true,
            scrollX: true,
            ajax: {
                "url": "{{ route('transactions.index') }}",
				"type": "GET"
            },
            columns: [{
                    data: "DT_RowIndex",
                    name: "DT_RowIndex",
                    orderable: true,
                    searchable: false
                },
                {
                    data: "trx_code",
                    name: "trx_code"
                },
                {
                    data: "trx_desc",
                    name: "trx_desc"
                },
                {
                    data: "trx_type",
                    name: "trx_type"
                },
                {
                    data: "trx_status",
                    name: "trx_status"
                },
                {
                    data: "action",
                    name: "action",
                    orderable: false,
                    searchable: false
                },
            ]
        });

        $('#example').on('click', '.delete[data-remote]', function(e) {
            e.preventDefault();
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            var url = $(this).data('remote');
            // confirm then
            $.ajax({
                url: url,
                type: 'DELETE',
                dataType: 'json',
                data: {
                    method: '_DELETE',
                    submit: true
                }
            }).always(function(data) {
                $('#example').DataTable().draw(false);
            });
        });
    });
    </script>
@endsection
