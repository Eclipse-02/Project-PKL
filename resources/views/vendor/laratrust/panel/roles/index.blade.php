@extends('dashboard.master')

@section('title', 'Roles Permissions')

@section('content')
<div class="row">
  <div class="col-lg-12 mb-3">
    <table id="example" class="table table-striped text-center" style="width:100%">
      <thead>
        <tr>
          <th>Id</th>
          <th>Display Name</th>
          <th>Name</th>
          <th>Permissions</th>
          <th></th>
        </tr>
      </thead>
      <tbody>
        @foreach ($roles as $role)
        <tr>
          <td>
            {{$role->getKey()}}
          </td>
          <td>
            {{$role->display_name}}
          </td>
          <td>
            {{$role->name}}
          </td>
          @if(config('laratrust.panel.assign_permissions_to_user'))
          <td>
            {{$role->permissions_count}}
          </td>
          @endif
          <td>
            @if (\Laratrust\Helper::roleIsEditable($role))
            <a href="{{route('laratrust.roles.edit', $role->getKey())}}" class="btn btn-primary m-0">Edit</a>
            @else
            <a href="{{route('laratrust.roles.show', $role->getKey())}}" class="btn btn-primary m-0">Details</a>
            @endif
            <form
              action="{{route('laratrust.roles.destroy', $role->getKey())}}"
              method="POST"
              onsubmit="return confirm('Are you sure you want to delete the record?');"
              class="d-inline-flex"
            >
              @method('DELETE')
              @csrf
              <button
                type="submit"
                class="btn btn-danger"
                @if(!\Laratrust\Helper::roleIsDeletable($role)) disabled @endif
              >Delete</button>
            </form>
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
</div>
@endsection
