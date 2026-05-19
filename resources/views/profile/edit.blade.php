@extends('admin.layouts.app')

@section('content')

<div class="container-fluid">

    <h2 class="mb-4">Profile Settings</h2>

    @if (session('status') === 'profile-updated')
        <div class="alert alert-success">
            Profile updated successfully.
        </div>
    @endif

    @if (session('status') === 'password-updated')
        <div class="alert alert-success">
            Password updated successfully.
        </div>
    @endif

    <div class="row">

        <!-- Profile Information -->
        <div class="col-lg-6 mb-4">

            <div class="card border-0 shadow-sm">

                <div class="card-header">
                    <h5 class="mb-0">Update Profile</h5>
                </div>

                <div class="card-body">

                    <form method="post" action="{{ route('profile.update') }}">
                        @csrf
                        @method('patch')

                        <div class="mb-3">
                            <label class="form-label">Name</label>

                            <input type="text"
                                   name="name"
                                   class="form-control"
                                   value="{{ old('name', auth()->user()->name) }}"
                                   required>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Email</label>

                            <input type="email"
                                   name="email"
                                   class="form-control"
                                   value="{{ old('email', auth()->user()->email) }}"
                                   required>
                        </div>

                        <button type="submit" class="btn btn-primary">
                            Update Profile
                        </button>

                    </form>

                </div>

            </div>

        </div>

        <!-- Password Update -->
        <div class="col-lg-6 mb-4">

            <div class="card border-0 shadow-sm">

                <div class="card-header">
                    <h5 class="mb-0">Change Password</h5>
                </div>

                <div class="card-body">

                    <form method="post" action="{{ route('password.update') }}">
                        @csrf
                        @method('put')

                        <div class="mb-3">
                            <label class="form-label">Current Password</label>

                            <input type="password"
                                   name="current_password"
                                   class="form-control"
                                   required>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">New Password</label>

                            <input type="password"
                                   name="password"
                                   class="form-control"
                                   required>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Confirm Password</label>

                            <input type="password"
                                   name="password_confirmation"
                                   class="form-control"
                                   required>
                        </div>

                        <button type="submit" class="btn btn-dark">
                            Change Password
                        </button>

                    </form>

                </div>

            </div>

        </div>

    </div>

</div>

@endsection