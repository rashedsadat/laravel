@extends('admin.layouts.admin')

@section('content')
<!-- Site Content-->
<div class="dt-content">
    <!-- Page Header -->
    <div class="dt-page__header">
        <h1 class="dt-page__title">Data Table</h1>
    </div>
    <!-- /page header -->

    <!-- Grid -->
    <div class="row">
        <!-- Grid Item -->
        <div class="col-xl-12">
            <!-- Entry Header -->
            <div class="dt-entry__header">
                <!-- Entry Heading -->
                <div class="dt-entry__heading">
                    <h3 class="dt-entry__title">
                        User Data Table
                    </h3>
                </div>
                <!-- /entry heading -->
            </div>
            <!-- /entry header -->

            <!-- Card -->
            <div class="dt-card">
                <!-- Card Body -->
                <div class="dt-card__body">
                    <!-- Tables -->
                    <div class="table-responsive">
                        <table id="data-table" class="table table-striped table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>Sr.</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Gender</th>
                                    <th>Phone</th>
                                    <th>Verification</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>

                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>Sr.</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Gender</th>
                                    <th>Phone</th>
                                    <th>Verification</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                    <!-- /tables -->
                </div>
                <!-- /card body -->
            </div>
            <!-- /card -->
        </div>
        <!-- /grid item -->
    </div>
    <!-- /grid -->
</div>
<!--  /site content -->
@endsection