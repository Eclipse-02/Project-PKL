@extends('dashboard.master')

@section('title', 'Register Package')

@section('content')
<div class="row">
    <div class="col-lg-12 mb-3">
        <div class="dropdown" style="display: inline-block">
            <div class="hidden">
                
            </div>
            <button class="btn btn-primary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
            Export
            </button>
            <ul class="dropdown-menu">
                <form action="{{ route('registerpackages.export') }}" method="POST">
                    @csrf
                    <input type="hidden" id="start_date" name="start_date">
                    <input type="hidden" id="end_date" name="end_date">
                    <li><button class="dropdown-item" type="submit">Excel</button></li>
                </form>
                <li><a class="dropdown-item" href="#">PDF</a></li>
            </ul>
        </div>
        <a href="{{ route('registerpackages.create') }}" class="btn btn-success">Create</a>
        <div class="row mb-3">
            <div class="col-2 mx-1 text-end align-self-center">Tanggal</div>
            <div class="col-6">
                <div id="daterange"  class="float-end" style="background: #fff; cursor: pointer; padding: 5px 10px; border: 1px solid #ccc; width: 100%; text-align:center">
                    <i class="fa fa-calendar"></i>&nbsp;
                    <span></span> 
                    <i class="fa fa-caret-down"></i>
                </div>
            </div>
        </div>
        <div class="row mb-3">
            <div class="col-2 mx-1 text-end align-self-center">
                Status Data
            </div>
            <div class="col-4">
                <select data-column="5" class="form-control filter-select">
                    <option value="">All</option>
                    <option value="NW">New</option>
                    <option value="AC">Active</option>
                    <option value="CL">Cancel</option>
                </select>
            </div>
        </div>
        <div class="row mb-3">
            <div class="col-2 mx-1 text-end align-self-center">
                Jemaah Dari
            </div>
            <div class="col-6">
                <select data-column="4" class="form-control filter-select">
                    <option value="">All</option>
                    @foreach ($suppliers as $i)
                        <option value="{{ $i->supl_code }}">{{ $i->supl_name }}</option>
                    @endforeach
                </select>
            </div>
        </div>
    </div>
    <div class="col-lg-12 mb-3">
        <table id="daterange_table" class="table table-striped" style="width:100%">
            <thead>
                <tr>
                    <th>No</th>
                    <th>No Aplikasi</th>
                    <th>Nama</th>
                    <th>Tanggal Aplikasi</th>
                    <th>Jemaah Dari</th>
                    <th>Status Aplikasi</th>
                    <th>Tanggal Posting</th>
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
    var start_date = moment().subtract(1, 'M');
    $('#start_date').val(start_date.format('YYYY-MM-DD'));

    var end_date = moment();
    $('#end_date').val(end_date.format('YYYY-MM-DD'));

    $('#daterange span').html(start_date.format('MMMM D, YYYY') + ' - ' + end_date.format('MMMM D, YYYY'));

    $('#daterange').daterangepicker({
        startDate : start_date,
        endDate : end_date
    }, function(start_date, end_date){
        $('#daterange span').html(start_date.format('MMMM D, YYYY') + ' - ' + end_date.format('MMMM D, YYYY'));
        $('#start_date').val(start_date.format('YYYY-MM-DD'));
        $('#end_date').val(end_date.format('YYYY-MM-DD'));

        table.draw();
    });

    let table = $('#daterange_table').DataTable({
        searching: false,
        processing: true,
        serverSide: true,
        scrollX: true,
        ajax: {
            "url": "{{ route('registerpackages.index') }}",
            "data": function(data){
                data.from_date = $('#daterange').data('daterangepicker').startDate.format('YYYY-MM-DD');
                data.to_date = $('#daterange').data('daterangepicker').endDate.format('YYYY-MM-DD');
            }
        },
        columns: [{
                data: "DT_RowIndex",
                name: "DT_RowIndex",
                orderable: true,
                searchable: false
            },
            {
                data: "coy_id",
                name: "coy_id"
            },
            {
                data: "appl_name",
                name: "appl_name"
            },
            {
                data: "appl_date",
                name: "appl_date"
            },
            {
                data: "supl_code",
                name: "supl_code"
            },
            {
                data: "appl_st",
                name: "appl_st"
            },
            {
                data: "appl_posting_date",
                name: "appl_posting_date"
            },
            {
                data: "action",
                name: "action",
                orderable: false,
                searchable: false
            },
        ],
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
</script>
@endsection