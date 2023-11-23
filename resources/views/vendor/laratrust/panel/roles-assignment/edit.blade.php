@extends('dashboard.master')

@section('title', "User Role")

@section('content')
  <!--start::Col-->
  <div class="col-xxl-12">
    <!--begin::Card-->
    <div class="card">
        <!--begin::Card header-->
        <div class="card-header">
            <!--begin::Card title-->
            <div class="card-title m-0 flex-column">
                <h3 class="fw-bolder m-0">Edit Data</h3>
                <div class="text-muted fs-7 fw-bold">Edit Data</div>
            </div>
            <!--end::Card title-->
            <!--start::Button-->
            <!--start::Action-->
            <a href="{{ route('laratrust.roles-assignment.index') }}" class="btn btn-flex btn-light btn-light btn-active-primary fw-bolder align-self-center">
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
        <!--begin::Form-->
        <form class="form" action="{{route('laratrust.roles-assignment.update', ['roles_assignment' => $user->getKey(), 'model' => $modelKey])}}" method="POST">
            @csrf
            @method('PUT')

            <!--begin::Card body-->
            <div class="card-body p-9">
                <!--begin::Input group-->
                <div class="fv-row mb-10">
                    <!--begin::Label-->
                    <label class="d-flex align-items-center fs-5 fw-bold mb-2">
                        <span class="required">Nama</span>
                    </label>
                    <!--end::Label-->
                    <!--begin::Input-->
                    <input class="form-control form-control-lg form-control-solid" type="text" name="name"
                    placeholder="this-will-be-the-code-name"
                    value="{{$user->name ?? 'The model doesn\'t have a `name` attribute'}}"
                    readonly
                    autocomplete="off" />
                    <!--end::Input-->
                </div>
                <!--end::Input group-->
                <!--begin::Input group-->
                <div class="fv-row mb-10">
                    <!--begin::Label-->
                    <label class="d-flex align-items-center fs-5 fw-bold mb-2">
                        <span class="required">Roles</span>
                    </label>
                    <!--end::Label-->
                    <!--begin::Input-->
                    @foreach ($roles as $role)
                    <div class="form-check form-check-custom form-check-solid">
                      <input class="form-check-input" type="checkbox"
                      name="roles[]"
                      value="{{$role->getKey()}}"
                      {!! $role->assigned ? 'checked' : '' !!}
                      {!! $role->assigned && !$role->isRemovable ? 'onclick="return false;"' : '' !!}
                      @if (!$role->assigned && $role->isRemovable)
                      disabled
                      @endif
                      />
                      <label class="form-check-label" for="flexCheckDefault">
                        {{$role->display_name ?? $role->name}}
                      </label>
                    </div>
                    @endforeach
                    <!--end::Input-->
                </div>
                <!--end::Input group-->
                <!--begin::Input group-->
                <div class="fv-row mb-5">
                  @if ($permissions)
                    <!--begin::Label-->
                    <label class="d-flex align-items-center fs-5 fw-bold mb-2">
                        <span class="required">Permission</span>
                    </label>
                    <!--end::Label-->
                    <div class="row">
                    @foreach ($permissions as $permission)
                      <!--begin::Input-->
                      <div class="form-check form-check-custom form-check-solid col-3 mb-3">
                        <input class="form-check-input" type="checkbox"
                        class="form-check-input"
                        type="checkbox"
                        name="permissions[]"
                        value="{{$permission->getKey()}}"
                        {!! $permission->assigned ? 'checked' : '' !!}
                        />
                        <label class="form-check-label" for="flexCheckDefault">
                          {{$permission->display_name ?? $permission->name}}
                        </label>
                      </div>
                      <!--end::Input-->
                    @endforeach
                    </div>
                    <!--begin::Error-->
                    @error('password')
                        <span class="invalid-feedback d-block" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                    <!--end::Error-->
                  @endif
                </div>
                <!--end::Input group-->
            </div>
            <!--end::Card body-->
            <!--begin::Card footer-->
            <div class="card-footer d-flex justify-content-end py-6 px-9">
                <a
                  href="{{route("laratrust.roles-assignment.index", ['model' => $modelKey])}}"
                  class="btn btn-danger mx-2"
                >
                  Batal
                </a>
                <button class="btn btn-primary mx-2" type="submit">Simpan</button>
            </div>
            <!--end::Card footer-->
        </form>
        <!--end:Form-->
    </div>
    <!--end::Card-->
  </div>
  <!--end::Col-->
@endsection