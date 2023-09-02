@extends('dashboard.master')

@section('title', 'Route')

@section('content')
<div class="row">
    <div class="col-lg-12 mb-3">
        <a href="{{ route('dashboard') }}" class="btn btn-success">Create</a>
    </div>
    <div class="col-lg-12 mb-3">
        <table id="example" class="table table-striped text-center" style="width:100%">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Route Name</th>
                    <th>Route URL</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>Dashboard</td>
                    <td>{{ route('dashboard') }}</td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
@endsection

@section('scripts')
<script type="text/javascript">
    $(function() {
        new DataTable('#example');
    });
</script>
@endsection