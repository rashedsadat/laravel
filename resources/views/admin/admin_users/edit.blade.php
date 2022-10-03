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
                <h3 class="dt-card__title">Edit admin user</h3>
            </div>
            <!-- /card heading -->

        </div>
        <!-- /card header -->

        <!-- Card Body -->
        <div class="dt-card__body">

            <!-- Form -->
            <form method="POST" action="{{ route('admin_users.update', $user['id']) }}">
                @csrf
                @method('PUT')
                <!-- Form Group -->
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" value="{{$user['name']}}" id="name" name="name" placeholder="Enter name" required>
                </div>

                <!-- Form Group -->
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" value="{{$user['email']}}" id="email" name="email" placeholder="Enter email" required>
                </div>

                <!-- Form Group -->
                <div class="form-group">
                    <label for="phone_no">Phone no</label>
                    <input type="text" class="form-control" value="{{$user['phone_no']}}" id="phone_no" name="phone_no" placeholder="Enter phone no." required>
                </div>

                <!-- Gender -->
                <div class="form-group">
                    <label for="phone_no">Gender</label>
                    <div class="input-group">
                        <div class="input-group-text mr-5">
                            <span class="mr-3">Male</span>
                            <input type="radio" name="gender" id="male" value="male" 
                            @if($user['gender'] == 'male')
                                checked
                            @endif>
                        </div>
                        <div class="input-group-text">
                            <span class="mr-3">Female</span>
                            <input type="radio" name="gender" id="female" value="female" 
                            @if($user['gender'] == 'female')
                                checked
                            @endif>
                        </div>
                    </div>
                </div>

                <!-- Input Group -->
                <div class="form-group">
                    <label class="col-form-label text-sm-right" for="simple-select">Select Role</label><br>

                    <div class="col-form-label text-sm-right">
                      <select class="form-control" id="simple-select" name="role">
                        <option>
                            @if($userRole)
                                {{$userRole[0]}}
                            @else
                                Select
                            @endif
                        </option>
                        @foreach($roles as $role)
                            @if($userRole)
                                @if($userRole[0] != $role['name'])
                                    <option value="{{$role['id']}}">{{$role['name']}}</option>
                                @endif
                            @else
                                <option value="{{$role['id']}}">{{$role['name']}}</option>
                            @endif   
                        @endforeach
                      </select>
                    </div>
                </div>
                <!-- /input group -->

                <br>

                <!-- Form Group -->
                <div class="form-group mb-0">
                    <button type="submit" class="btn btn-primary text-uppercase">Update</button>
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