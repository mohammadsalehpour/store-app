<x-app-layout>

    <x-slot name="pagetitle">
        {{ __('New User') }}
    </x-slot>
    <x-slot name="pageActions">
        <a href="{{ route('admin.users.create') }}" class="btn fw-bold btn-primary">Create New User</a>
    </x-slot>

    <div class="card">
        <div class="card-body p-4">
            <form class="row g-3" action="{{ route('admin.users.store') }}" method="POST">
                @csrf
                <div class="col-md-12">
                    <label for="inputName5" class="form-label">Name</label>
                    <input type="text" class="form-control" name="name" id="inputName5">
                </div>
                <div class="col-md-6">
                    <label for="inputEmail5" class="form-label">Email</label>
                    <input type="email" class="form-control" name="email" id="inputEmail5">
                </div>
                <div class="col-md-6">
                    <label for="inputPhone5" class="form-label">Phone</label>
                    <input type="text" class="form-control" name="phone" id="inputPhone5">
                </div>
                <div class="col-12">
                    <label for="inputAddress5" class="form-label">Address</label>
                    <input type="text" class="form-control" name="address" id="inputAddres5s" placeholder="1234 Main St">
                </div>
                <div class="col-md-6">
                    <label for="inputPassword5" class="form-label">Password</label>
                    <input type="password" class="form-control" name="password" id="inputPassword5">
                </div>
                <div class="col-md-6">
                    <label for="inputConfirmPassword5" class="form-label">Confirm Password</label>
                    <input type="password" class="form-control" name="confirm_password" id="inputConfirmPassword5">
                </div>
                <div class="col-12">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="user_type" id="gridCheck">
                        <label class="form-check-label" for="gridCheck">
                            Admin
                        </label>
                    </div>
                </div>
                <div class="text-center">
                    <button type="submit" class="btn btn-success">Create</button>
                    <button type="reset" class="btn btn-secondary">Reset</button>
                </div>
            </form>
        </div>
    </div>

</x-app-layout>
