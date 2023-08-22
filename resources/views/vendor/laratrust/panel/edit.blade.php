@extends('dashboard.master')

@section('title', $model ? "Edit {$type}" : "New {$type}")

@section('content')
  <div>
  </div>
  <div class="row mx-2">
    <form
      x-data="laratrustForm()"
      x-init="{!! $model ? '' : '$watch(\'displayName\', value => onChangeDisplayName(value))'!!}"
      method="POST"
      action="{{$model ? route("laratrust.{$type}s.update", $model->getKey()) : route("laratrust.{$type}s.store")}}"
    >
      @csrf
      @if ($model)
        @method('PUT')
      @endif
      
      <div class="form-group">
        <label class="form-label">Name/Code</label>
        <input 
          type="text"
          class="form-control"
          name="name"
          placeholder="this-will-be-the-code-name"
          value="{{ $model->name }}"
          readonly
          autocomplete="off"
        >
        @error('name')
            <div class="text-red-500 text-sm mt-1">{{ $message}} </div>
        @enderror
      </div>

      <div class="form-group">
        <label class="form-label">Display Name</label>
        <input 
          type="text"
          class="form-control"
          name="display_name"
          placeholder="Edit user profile"
          value="{{ $model->display_name }}"
          autocomplete="off"
        >
      </div>

      <div class="form-group">
        <label class="form-label">Description</label>
        <textarea
        class="form-control form-control-alternative"
        rows="3"
        name="description"
        placeholder="Some description for the {{$type}}"
        >{{ $model->description ?? old('description') }}</textarea>
      </div>

      @if($type == 'role')
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
          href="{{route("laratrust.{$type}s.index")}}"
          class="btn btn-danger mx-2"
        >
          Cancel
        </a>
        <button class="btn btn-primary" type="submit">Save</button>
      </div>
    </form>
  </div>
  <script>
    window.laratrustForm =  function() {
      return {
        displayName: '{{ $model->display_name ?? old('display_name') }}',
        name: '{{ $model->name ?? old('name') }}',
        toKebabCase(str) {
          return str &&
            str
              .match(/[A-Z]{2,}(?=[A-Z][a-z]+[0-9]*|\b)|[A-Z]?[a-z]+[0-9]*|[A-Z]|[0-9]+/g)
              .map(x => x.toLowerCase())
              .join('-')
              .trim();
        },
        onChangeDisplayName(value) {
          this.name = this.toKebabCase(value);
        }
      }
    }
  </script>
@endsection