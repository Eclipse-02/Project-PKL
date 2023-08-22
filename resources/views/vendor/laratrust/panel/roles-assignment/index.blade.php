@extends('dashboard.master')

@section('title', 'User Role')

@section('content')
<div class="row">
  <div class="col-lg-12 mb-3">
    <table id="example" class="table table-striped text-center" style="width:100%">
      <thead>
        <tr>
          <th>Id</th>
          <th>Name</th>
          <th>Roles</th>
          @if(config('laratrust.panel.assign_permissions_to_user'))<th>Permissions</th>@endif
          <th></th>
        </tr>
      </thead>
      <tbody>
        @foreach ($users as $user)
        <tr>
          <td>
            {{$user->getKey()}}
          </td>
          <td>
            {{$user->name ?? 'The model doesn\'t have a `name` attribute'}}
          </td>
          <td>
            {{$user->roles_count}}
          </td>
          @if(config('laratrust.panel.assign_permissions_to_user'))
          <td>
            {{$user->permissions_count}}
          </td>
          @endif
          <td>
            <a
              href="{{route('laratrust.roles-assignment.edit', ['roles_assignment' => $user->getKey(), 'model' => $modelKey])}}"
              class="btn btn-primary"
            >Edit</a>
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
</div>
@endsection
