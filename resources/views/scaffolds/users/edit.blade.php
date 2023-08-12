@extends('dashboard.master')

@section('title', 'Update User')

@section('content')
<div class="row">
    <div class="col-lg-12 mb-3">
        <a href="{{ route('users.index') }}" class="btn btn-secondary mx-2">Return</a>
    </div>
    <div class="col-lg-12 mb-3">
        <form action="{{ route('users.update', $data->uid->id) }}" method="post">
        @csrf
        @method('PUT')

            <div class="row mx-2">
                <div class="col-lg-12 col-md-6">
                    <div class="form-group">
                        <label class="form-label">Employee ID</label>
                        <select class="form-select" id="empl_id" name="empl_id">
                            <option selected>-- Pilih Employee ID --</option>
                            @foreach ($employees as $i)
                                <option value="{{ $i->empl_id }}" {{ $data->empl_id == $i->empl_id ? 'selected' : '' }}>{{ $i->empl_name }} / {{ $i->empl_id }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="col-lg-12 col-md-6">
                    <div class="form-group">
                        <label class="form-label">Employee Branch</label>
                        <select class="form-select" id="empl_branch" name="empl_branch">
                            <option selected>-- Pilih Employee Branch --</option>
                            @foreach ($branches as $i)
                                <option value="{{ $i->branch_code }}" {{ $data->empl_branch == $i->branch_code ? 'selected' : '' }}>{{ $i->branch_name }} / {{ $i->branch_code }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="col-lg-12 col-md-6">
                    <div class="form-group">
                        <label class="form-label">Max Session</label>
                        <input type="text" class="form-control form-control-alternative" id="max_session" name="max_session" placeholder="Max Session" value="{{ $data->max_session }}">
                    </div>
                </div>
                <div class="col-lg-12 col-md-6">
                    <div class="form-group">
                        <label class="form-label">Expired Password</label>
                        <input type="date" class="form-control form-control-alternative" id="expired_pwd" name="expired_pwd" placeholder="Expired Password" value="{{ $data->expired_pwd }}">
                    </div>
                </div>
                <div class="col-lg-12 col-md-6">
                    <div class="form-group">
                        <label class="form-label">Name</label>
                        <input type="text" class="form-control form-control-alternative" id="name" name="name" placeholder="Name" value="{{ $data->name }}">
                    </div>
                </div>
                <div class="col-lg-12 col-md-6">
                    <div class="form-group">
                        <label class="form-label">Email</label>
                        <input type="text" class="form-control form-control-alternative" id="email" name="email" placeholder="Email" value="{{ $data->email }}">
                    </div>
                </div>
                <div class="col-lg-12 col-md-6">
                    <div class="form-group">
                        <label class="form-label">Password</label>
                        <input type="text" class="form-control form-control-alternative" id="password" name="password" placeholder="Password" value="{{ $data->password }}">
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