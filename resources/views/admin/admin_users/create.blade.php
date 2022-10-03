@extends('admin.layouts.admin')

@section('content')
<div class="dt-content">
    <!-- Entry Header -->
    <div class="pull-right">
        <a class="btn btn-success" href="{{ route('admin_users.index') }}">Back</a>
    </div><br>

    <!-- Card -->
    <div class="dt-card">

        <!-- Card Header -->
        <div class="dt-card__header">

            <!-- Card Heading -->
            <div class="dt-card__heading">
                <h3 class="dt-card__title">Create new user</h3>
            </div>
            <!-- /card heading -->

        </div>
        <!-- /card header -->

        <!-- Card Body -->
        <div class="dt-card__body">

            <!-- Form -->
            <form method="POST" action="{{ route('admin_users.store') }}">
                @csrf
                <!-- Form Group -->
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="Enter name"
                        required>
                </div>

                <!-- Form Group -->
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="Enter email"
                        required>
                </div>

                <!-- Form Group -->
                <div class="form-group">
                    <label for="phone_no">Phone no</label>
                    <input type="text" class="form-control" id="phone_no" name="phone_no" placeholder="Enter phone no."
                        required>
                </div>

                <!-- Gender -->
                <div class="form-group">
                    <label for="phone_no">Gender</label>
                    <div class="input-group">
                        <div class="input-group-text mr-5">
                            <span class="mr-3">Male</span>
                            <input type="radio" name="gender" id="male" value="male" checked>
                        </div>
                        <div class="input-group-text">
                            <span class="mr-3">Female</span>
                            <input type="radio" name="gender" id="female" value="female">
                        </div>
                    </div>
                </div>

                <!-- Input Group -->
                <div class="form-group">
                    <label class="col-form-label text-sm-right" for="simple-select">Select Role</label><br>

                    <div class="col-form-label text-sm-right">
                      <select class="form-control" id="simple-select" name="role">
                        <option>Select</option>
                        @foreach($roles as $role)
                            <option value="{{$role['id']}}">{{$role['name']}}</option>
                        @endforeach
                      </select>
                    </div>
                </div>
                <!-- /input group -->

                <!-- Form Group -->
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" class="form-control" id="password" name="password" placeholder="Enter password" required>
                </div>
                <!-- /Form Group -->

                <!-- Form Group -->
                <div class="form-group">
                    <label for="password-confirm">Confirm Password</label>
                    <input type="password" class="form-control" id="password-confirm" name="password_confirmation" placeholder="Confirm password" required>
                </div>
                <!-- /Form Group -->

                <br>

                <!-- Form Group -->
                <div class="form-group mb-0">
                    <button type="submit" class="btn btn-primary text-uppercase">Create</button>
                </div>
                <!-- /form group -->

            </form>
            <!-- /form -->

        </div>
        <!-- /card body -->

    </div>
    <!-- /card -->
</div>
@endsection