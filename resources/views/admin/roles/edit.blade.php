@extends('admin.layouts.admin')

@section('content')
<div class="dt-content">
    <!-- Entry Header -->
    <div class="pull-right">
        <a class="btn btn-success" href="{{ route('roles.index') }}">Back</a>
    </div><br>

    <!-- Card -->
    <div class="dt-card">

        <!-- Card Header -->
        <div class="dt-card__header">

            <!-- Card Heading -->
            <div class="dt-card__heading">
                <h3 class="dt-card__title">Edit role</h3>
            </div>
            <!-- /card heading -->

        </div>
        <!-- /card header -->

        <!-- Card Body -->
        <div class="dt-card__body">

            <!-- Form -->
            <form method="POST" action="{{ route('roles.update', $role['id']) }}">
                @csrf
                @method('PUT')
                <!-- Form Group -->
                <div class="form-group">
                    <label for="name">Update Role name</label>
                    <input type="text" class="form-control" id="name" name="name" value="{{$role->name}}" placeholder="Enter role name"
                        required>
                </div>

                <label>Check Permission</label>
                @foreach($permissions as $permission)
                    <!-- Input Group -->
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <div class="input-group-text">
                                <input type="checkbox" name="permission[]" value="{{$permission->id}}" aria-label="Checkbox for following text input" 
                                @foreach ($rolePermissions as $value)
                                    @if($value == $permission->id)
                                        checked
                                    @endif
                                @endforeach>
                            </div>
                        </div>
                        <input type="text" value="{{$permission->name}}" class="form-control" aria-label="Text input with checkbox">
                    </div>
                    <!-- /input group -->
                    <br>
                @endforeach

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