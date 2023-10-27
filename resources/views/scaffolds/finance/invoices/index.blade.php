@extends('dashboard.master')

@section('title', 'Invoices')

@section('content')
<div class="row">
    <form action="{{ route('invoices.create') }}" method="POST">
        @csrf

        <div class="col-lg-12 mb-3 row">
            <div class="col-md-6">
                <label class="form-label">Tipe TRX</label>
                <select class="form-select" id="invmst_code" name="invmst_code">
                    <option selected disabled>-- Pilih Tipe TRX --</option>
                    @foreach ($trx_type as $i)
                        <option value='{{ $i->trx_code }}'>{{ $i->trx_code }}</option>
                    @endforeach
                </select>
                @error('invmst_code')
                    <span class="invalid-feedback d-block" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label class="form-label">GL Category</label>
                    <input type="text" class="form-control @error('invmst_gl_category')is-invalid @enderror" id="invmst_gl_category" name="invmst_gl_category" placeholder="GL Category" value="{{ old('invmst_gl_category') }}">
                    @error('invmst_gl_category')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                @error('invmst_gl_category')
                    <span class="invalid-feedback d-block" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label class="form-label">Display</label>
                    <input type="text" class="form-control @error('invmst_display_code')is-invalid @enderror" id="invmst_display_code" name="invmst_display_code" placeholder="Display" value="{{ old('invmst_display_code') }}">
                    @error('invmst_display_code')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                @error('invmst_display_code')
                    <span class="invalid-feedback d-block" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="col-md-6">
                <label class="form-label">Auto</label>
                <select class="form-select" id="invmst_auto" name="invmst_auto">
                    <option selected disabled>-- Pilih Auto --</option>
                    <option value="Y">Ya</option>
                    <option value="N">Tidak</option>
                </select>
                @error('invmst_auto')
                    <span class="invalid-feedback d-block" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label class="form-label">Keterangan</label>
                    <input type="text" class="form-control @error('invmst_desc')is-invalid @enderror" id="invmst_desc" name="invmst_desc" placeholder="Keterangan" value="{{ old('invmst_desc') }}">
                    @error('invmst_desc')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                @error('invmst_desc')
                    <span class="invalid-feedback d-block" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="col-md-6">
                <label class="form-label">Entry</label>
                <select class="form-select" id="invmst_auto" name="invmst_auto">
                    <option selected disabled>-- Pilih Entry --</option>
                    <option value="Y">Ya</option>
                    <option value="N">Tidak</option>
                </select>
                @error('invmst_auto')
                    <span class="invalid-feedback d-block" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="col-md-6">
                <label class="form-label">Jurnal On Paid</label>
                <select class="form-select" id="invmst_jurnal_on_paid" name="invmst_jurnal_on_paid">
                    <option selected disabled>-- Pilih Jurnal On Paid --</option>
                    <option value="Y">Ya</option>
                    <option value="N">Tidak</option>
                </select>
                @error('invmst_jurnal_on_paid')
                    <span class="invalid-feedback d-block" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="col-md-6">
                <label class="form-label">Status</label>
                <select class="form-select" id="invmst_status" name="invmst_status">
                    <option selected disabled>-- Pilih Status --</option>
                    <option value="Y">Aktif</option>
                    <option value="N">Non Aktif</option>
                </select>
                @error('invmst_status')
                    <span class="invalid-feedback d-block" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="col-md-12 mt-3">
                <button class="btn btn-primary w-100">Submit</button>
            </div>
        </div>
    </form>
    <div class="col-lg-12 mb-3">
        <table id="example" class="table table-striped" style="width:100%">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Kode</th>
                    <th>Deskripsi</th>
                    <th>Tipe</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
            </tbody>
        </table>
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
