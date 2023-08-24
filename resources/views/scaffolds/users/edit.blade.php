@extends('dashboard.master')

@section('title', 'Update User')

@section('content')
<div class="row">
    <div class="col-lg-12 mb-3">
        <a href="{{ route('users.index') }}" class="btn btn-secondary mx-2">Return</a>
    </div>
    <div class="col-lg-12 mb-3">
        <form action="{{ route('users.update', $data->id) }}" method="post">
        @csrf
        @method('PUT')

            <div class="row mx-2">
                <div class="col-lg-12 col-md-6">
                    <div class="form-group">
                        <label class="form-label">Coy ID</label>
                        <select class="form-select @error('coy_id')is-invalid @enderror" id="coy_id" name="coy_id">
                            <option class="text-center" selected disabled>-- Pilih Coy ID --</option>
                            @foreach ($coys as $k)
                                <option value="{{ $k->coy_id }}" {{ old('coy_id') ? (old('coy_id') == $k->coy_id ? 'selected' : '') : ($data->coy_id == $k->coy_id ? 'selected' : '') }}>{{ $k->coy_name }}</option>
                            @endforeach
                        </select>
                        @error('coy_id')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="col-lg-12 col-md-6">
                    <div class="form-group">
                        <label class="form-label">Employee ID</label>
                        <select class="form-select @error('empl_id')is-invalid @enderror" id="empl_id" name="empl_id">
                            <option class="text-center" selected disabled>-- Pilih Employee ID --</option>
                            @foreach ($employees as $i)
                                <option value="{{ $i->empl_id }}" {{ old('empl_id') ? (old('empl_id') == $i->empl_id ? 'selected' : '') : ($data->empl_id == $i->empl_id ? 'selected' : '') }}>{{ $i->empl_name }} / {{ $i->empl_id }}</option>
                            @endforeach
                        </select>
                        @error('empl_id')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="col-lg-12 col-md-6">
                    <div class="form-group">
                        <label class="form-label">Employee Branch</label>
                        <select class="form-select @error('empl_branch')is-invalid @enderror" id="empl_branch" name="empl_branch">
                            <option class="text-center" selected disabled>-- Pilih Employee Branch --</option>
                            @foreach ($branches as $i)
                                <option value="{{ $i->branch_code }}" {{ old('empl_branch') ? (old('empl_branch') == $i->branch_code ? 'selected' : '') : ($data->empl_branch == $i->branch_code ? 'selected' : '') }}>{{ $i->branch_name }} / {{ $i->branch_code }}</option>
                            @endforeach
                        </select>
                        @error('empl_branch')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="col-lg-12 col-md-6">
                    <div class="form-group">
                        <label class="form-label">Max Session</label>
                        <input type="text" class="form-control @error('max_session')is-invalid @enderror" id="max_session" name="max_session" placeholder="Max Session" value="{{ old('max_session') ? old('max_session') : $data->max_session }}">
                        @error('max_session')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="col-lg-12 col-md-6">
                    <div class="form-group">
                        <label class="form-label">Expired Password</label>
                        <input type="date" class="form-control @error('expired_pwd')is-invalid @enderror" id="expired_pwd" name="expired_pwd" placeholder="Expired Password" value="{{ old('expired_pwd') ? old('expired_pwd') : $data->expired_pwd }}">
                        @error('expired_pwd')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="col-lg-12 col-md-6">
                    <div class="form-group">
                        <label class="form-label">Name</label>
                        <input type="text" class="form-control @error('name')is-invalid @enderror" id="name" name="name" placeholder="Name" value="{{ old('name') ? old('name') : $data->name }}">
                        @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="col-lg-12 col-md-6">
                    <div class="form-group">
                        <label class="form-label">Email</label>
                        <input type="text" class="form-control @error('email')is-invalid @enderror" id="email" name="email" placeholder="Email" value="{{ old('email') ? old('email') : $data->email }}">
                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="col-lg-12 col-md-6">
                    <div class="form-group">
                        <label class="form-label">Password</label>
                        <input type="text" class="form-control @error('password')is-invalid @enderror" id="password" name="password" placeholder="Password" value="{{ old('password') ? old('password') : $data->password }}">
                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
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