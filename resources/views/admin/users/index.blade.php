@extends('templates.main')

@section('content')

    <div class="row">
        <div class="col-12">
            <h1 class="float-left">Users</h1>
            <a class="btn btn-sm btn-success float-right" href="{{ route('admin.users.create') }}" role="button">Create</a>
        </div>
    </div>
    <div class="card">
        <table class="table table-striped table-hover">
            <thead>
              <tr>
                <th scope="col">#id</th>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Roles</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($users as $user )
                <tr>
                    <th scope="row">{{ $user->id }}</th>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td></td>
                    <td>
                        <a class="btn btn-sm btn-info" href="{{ route('admin.users.edit', $user->id) }}" role="button">Edit</a>

                        <button type="button" class="btn btn-sm btn-warning" 
                        onclick="event.preventDefault();
                        document.getElementById('delete-user-form-{{ $user->id }}').submit()">
                            Delete
                        </button>

                        <form id="delete-user-form-{{ $user->id }}" action="{{ route('admin.users.destroy', $user->id) }}" method="POST" style="display: none">
                            @csrf
                            @method("DELETE")
                        </form>
                    </td>
                  </tr>
                @endforeach
            </tbody>
          </table>
          {{ $users->links() }}
    </div>
@endsection