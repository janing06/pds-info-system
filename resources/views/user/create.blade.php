<x-app-layout>
    @section('title', '| Users | Create')

    <x-heading>
        <x-slot:title>
            Add User
        </x-slot:title>
    </x-heading>

    <div class="row mb-4">
        <div class="col-12 col-xl-12">

            <div class="card card-body border-0 shadow mb-4">
                <h2 class="h5 mb-4">User information</h2>

                <form method="POST" action="{{ route('users.store') }}">
                    @csrf

                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group mb-3">
                                <label for="first_name">First Name
                                    <x-asterisks />
                                </label>
                                <input type="text" id="first_name" name="first_name"
                                    class="form-control @error('first_name') is-invalid @enderror"
                                    placeholder="First Name" value="{{ old('first_name') }}" required>
                                @error('first_name')
                                    <x-input-error message="{{ $message }}" />
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group mb-3">
                                <label for="last_name">Last Name
                                    <x-asterisks />
                                </label>
                                <input type="text" id="last_name" name="last_name"
                                    class="form-control @error('last_name') is-invalid @enderror"
                                    placeholder="Last Name" value="{{ old('last_name') }}" required>
                                @error('last_name')
                                    <x-input-error message="{{ $message }}" />
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group mb-3">
                                <label for="email">Email
                                    <x-asterisks />
                                </label>
                                <input type="email" id="email" name="email"
                                    class="form-control @error('email') is-invalid @enderror" placeholder="Email"
                                    value="{{ old('email') }}" required>
                                @error('email')
                                    <x-input-error message="{{ $message }}" />
                                @enderror
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group mb-3">
                                <label for="role">Role
                                    <x-asterisks />
                                </label>
                                <select name="role" id="role"
                                    class="form-select @error('role') is-invalid @enderror">
                                    <option value="">Select Option</option>
                                    <option value="admin">Admin</option>
                                    <option value="user">User</option>
                                </select>
                                @error('role')
                                    <x-input-error message="{{ $message }}" />
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group mb-3">
                                <label for="status">Status
                                    <x-asterisks />
                                </label>
                                <select name="status" id="status"
                                    class="form-select @error('status') is-invalid @enderror"">
                                    <option value="active">Active</option>
                                    <option value="inactive">Inactive</option>
                                </select>
                                @error('status')
                                    <x-input-error message="{{ $message }}" />
                                @enderror
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group mb-3">
                                <label for="password">Password
                                    <x-asterisks />
                                </label>
                                <input type="password" id="password" name="password"
                                    class="form-control @error('password') is-invalid @enderror" placeholder="Password"
                                    required>
                                @error('password')
                                    <x-input-error message="{{ $message }}" />
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group mb-3">
                                <label for="password_confirmation">Confirm Password
                                    <x-asterisks />
                                </label>
                                <input class="form-control @error('password') is-invalid @enderror""
                                    id="password_confirmation" name="password_confirmation" type="password"
                                    placeholder="Confirm Password" required>
                                @error('password')
                                    <x-input-error message="{{ $message }}" />
                                @enderror
                            </div>
                        </div>
                    </div>

                    <div class="mt-3">
                        <button class="btn btn-gray-800 mt-2 animate-up-2" type="submit"><i
                                class="me-2 bi bi-save"></i> Save</button>
                        <a href="{{ route('users.index') }}" class="btn btn-gray-800 mt-2 animate-up-2"><i
                                class="me-2 bi bi-back"></i> Back</a>
                    </div>

                </form>

            </div>

        </div>
    </div>
</x-app-layout>
