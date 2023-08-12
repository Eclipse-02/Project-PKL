@extends('dashboard.master')

@section('title', 'Update User Role')

@section('content')
<div class="row">
    <div class="col-lg-12 mb-3">
        <a href="{{ route('userroles.index') }}" class="btn btn-secondary mx-2">Return</a>
    </div>
    <div class="col-lg-12 mb-3">
        <form action="{{ route('userroles.update', $data->id) }}" method="post">
        @csrf
        @method('PUT')

            <div class="row mx-2">
                <div class="col-lg-12 col-md-6">
                    <div class="form-group">
                        <label class="form-label">User Name</label>
                        <input type="text" class="form-control form-control-alternative" id="name" name="name" placeholder="User Name" value="{{ $data->name }}" readonly>
                    </div>
                </div>
                <div class="col-lg-12 col-md-6">
                    <div class="form-group">
                        <label class="form-label">User Role</label>
                        <select class="form-select" id="role" name="role">
                            <option class="text-center">-- Pilih Role --</option>
                            @foreach ($roles as $i)
                                <option class="text-center" value="{{ $i->id }}" {{ $data->role_id == $i->id ? 'selected' : '' }}>{{ $i->display_name }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="col-lg-12 col-md-6">
                    <button type="submit" class="btn btn-primary w-100">Submit</button>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection