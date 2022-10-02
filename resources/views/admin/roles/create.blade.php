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
                <h3 class="dt-card__title">Create new role</h3>
            </div>
            <!-- /card heading -->

        </div>
        <!-- /card header -->

        <!-- Card Body -->
        <div class="dt-card__body">

            <!-- Form -->
            <form method="POST" action="{{ route('roles.store') }}">
                @csrf
                <!-- Form Group -->
                <div class="form-group">
                    <label for="name">New Role name</label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="Enter role name"
                        required>
                </div>

                <label>Check Permission</label>
                @foreach($permissions as $permission)
                    <!-- Input Group -->
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <div class="input-group-text">
                                <input type="checkbox" name="permission[]" value="{{$permission->id}}" aria-label="Checkbox for following text input">
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