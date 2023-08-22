@extends('dashboard.master')

@section('title', "Edit {$modelKey}")

@section('content')
<div class="row">
  <div class="col-lg-12 mb-3">
      <a href="{{ url('userroles') }}" class="btn btn-secondary mx-2">Return</a>
  </div>
  <div class="col-lg-12 mb-3">
    <form
        method="POST"
        action="{{route('laratrust.roles-assignment.update', ['roles_assignment' => $user->getKey(), 'model' => $modelKey])}}"
      >
        @csrf
        @method('PUT')
        <div class="form-group">
          <label class="form-label">Name</label>
          <input type="text" class="form-control"name="name"
          placeholder="this-will-be-the-code-name"
          value="{{$user->name ?? 'The model doesn\'t have a `name` attribute'}}"
          readonly
          autocomplete="off">
        </div>
        <div class="form-group">
          <span class="form-label">Roles</span>
          @foreach ($roles as $role)
            <div class="form-check">
              <input
                class="form-check-input"
                type="checkbox"
                name="roles[]"
                value="{{$role->getKey()}}"
                {!! $role->assigned ? 'checked' : '' !!}
                {!! $role->assigned && !$role->isRemovable ? 'onclick="return false;"' : '' !!}
                @if (!$role->assigned && $role->isRemovable)
                disabled
                @endif
                >
              <label class="form-check-label" for="flexCheckChecked">
                {{$role->display_name ?? $role->name}}
              </label>
            </div>
          @endforeach
        </div>
        @if ($permissions)
          <span class="form-label mb-1">Permissions</span>
          <div class="form-group row mx-1">
            @foreach ($permissions as $permission)
              <div class="form-check col-3">
                <input
                  class="form-check-input"
                  type="checkbox"
                  name="permissions[]"
                  value="{{$permission->getKey()}}"
                  {!! $permission->assigned ? 'checked' : '' !!}
                  >
                <label class="form-check-label" for="flexCheckChecked">
                  {{$permission->display_name ?? $permission->name}}
                </label>
              </div>
            @endforeach
          </div>
        @endif
        <div class="d-flex justify-content-end">
          <a
            href="{{route("laratrust.roles-assignment.index", ['model' => $modelKey])}}"
            class="btn btn-danger mx-2"
          >
            Cancel
          </a>
          <button class="btn btn-primary mx-2" type="submit">Save</button>
        </div>
      </form>
  </div>
</div>
@endsection