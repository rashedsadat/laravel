@extends('admin.layouts.admin')

@push('style')
<style>
    .dropzone .dz-preview.dz-error .dz-error-message {
        display: none;
    }
</style>
        
@endpush

@section('content')
    <!-- Site Content -->
    <div class="dt-content">

        <!-- Page Header -->
        <div class="dt-page__header">
            <h1 class="dt-page__title">File Upload</h1>
        </div>
        <!-- /page header -->

        <!-- Grid -->
        <div class="row">

            <!-- Grid Item -->
            <div class="col-12">

                <!-- Card -->
                <div class="dt-card">

                    <!-- Card Header -->
                    <div class="dt-card__header">

                        <!-- Card Heading -->
                        <div class="dt-card__heading">
                            <h3 class="dt-card__title">Upload Zone</h3>
                        </div>
                        <!-- /card heading -->

                    </div>
                    <!-- /card header -->

                    <!-- Card Body -->
                    <div class="dt-card__body">

                        <!-- Dropzone -->
                        {{-- <form id="dropzone" method="POST" action="{{route('admin.upload_profile_pic')}}" class="dropzone border-dashed border-primary" enctype="multipart/form-data">
                            @csrf

                            <div class="fallback">
                                <input name="avatar" type="file"/>
                            </div>
                            <button type="submit" class="btn btn-primary text-uppercase mr-5">Upload</button>
                        </form> --}}
                        <!-- /dropzone -->

                        <!-- Form Row -->
                        <form method="POST" action="{{route('admin.upload_profile_pic')}}" enctype="multipart/form-data">
                            @csrf
                            <div class="form-row">
                                <div class="col-md-12 col-sm-9">
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="file-field" name="avatar" />
                                        <label class="custom-file-label text-uppercase" for="file-field">Upload image...</label>
                                    </div>
                                </div>
                            </div>

                            <button type="submit" class="btn btn-primary text-uppercase mr-5 mt-5">Upload</button>
                        </form>
                        
                        <!-- /form row -->
                        

                    </div>
                    <!-- /card body -->

                </div>
                <!-- /card -->

            </div>
            <!-- /grid item -->

        </div>
        <!-- /grid -->

    </div>
    <!-- /site content -->
@endsection