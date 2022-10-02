@extends('admin.layouts.admin')

@section('content')
<div class="dt-content">
    <!-- Entry Header -->
    <div class="pull-right">
        <a class="btn btn-success" href="{{ route('permissions.index') }}">Back</a>
    </div><br>

    <!-- Card -->
    <div class="dt-card">

        <!-- Card Header -->
        <div class="dt-card__header">

            <!-- Card Heading -->
            <div class="dt-card__heading">
                <h3 class="dt-card__title">Edit permission</h3>
            </div>
            <!-- /card heading -->

        </div>
        <!-- /card header -->

        <!-- Card Body -->
        <div class="dt-card__body">

            <!-- Form -->
            <form method="POST" action="{{route('permissions.update', $data['id'])}}">
                @csrf
                @method('PUT')
                <!-- Form Group -->
                <div class="form-group">
                    <label for="name">Permission name</label>
                    <input type="text" class="form-control" id="name" name="name" value="{{$data['name']}}" placeholder="Enter permission name" required>
                </div>
                <!-- /form group -->

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