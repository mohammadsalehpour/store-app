<x-app-layout>

    <x-slot name="pagetitle">
        {{ __('Users') }}
    </x-slot>
    <x-slot name="pageActions">
        <a href="{{ route('admin.users.create') }}" class="btn fw-bold btn-primary">Create New User</a>
    </x-slot>

    <div class="card">
        <div class="card-body p-4">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">Phone</th>
                        <th scope="col">Address</th>
                        <th scope="col">UserType</th>
                        <th scope="col">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($users as $user)
                        <tr>
                            <th scope="row">{{ $user->id }}</th>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->email }}</td>
                            <td>{{ $user->phone }}</td>
                            <td>{{ $user->address }}</td>
                            <td>
                                @if ($user->user_type == 1)
                                    <h5><span class="badge bg-primary">Admin</span></h5>
                                @else
                                    <h5><span class="badge bg-secondary">User</span></h5>
                                @endif
                            </td>
                            <td>
                                <button type="button" class="btn btn-info">View</button>
                                <button type="button" class="btn btn-warning">Edit</button>
                                <button type="button" class="btn btn-danger">Delete</button>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

</x-app-layout>
