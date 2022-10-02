@extends('admin.layouts.admin')

@section('content')
<div class="dt-content">
    <!-- Entry Header -->
    <div class="pull-right">
        <a class="btn btn-success text-uppercase" href="{{ route('roles.create') }}"> Create New Roles</a>
    </div><br>
    <div class="dt-entry__header">
        
        <!-- Entry Heading -->
        <div class="dt-entry__heading">
            <h3 class="dt-entry__title">Permission List</h3>
        </div>
        <!-- /entry heading -->

    </div>
    <!-- /entry header -->

    <!-- Card -->
    <div class="dt-card overflow-hidden">

        <!-- Card Body -->
        <div class="dt-card__body p-0">

            <!-- Tables -->
            <div class="table-responsive">
                <table class="table table-hover mb-0">
                    <thead>
                        <tr>
                            <th scope="col">Sr.</th>
                            <th class="text-uppercase" scope="col">role name</th>
                            <th class="text-uppercase" scope="col">User type</th>
                            <th class="text-uppercase" scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php 
                            $index = 0;
                        @endphp
                        @foreach($roles as $role)
                            @php $index++; @endphp
                            <tr>
                                <th>{{$index}}</th>
                                <td>{{$role['name']}}</td>
                                <td>{{$role['guard_name']}}</td>
                                <td>
                                    {{-- Edit --}}
                                    <a class="btn btn-warning text-uppercase" href="{{route('roles.edit', $role['id'])}}" style="display: inline; padding: 3px;">Edit</a>

                                    {{-- DELETE --}}
                                    <form method="POST" action="{{route('roles.destroy', $role['id'])}}" style="display: inline">
                                        @csrf
                                        @method("DELETE")
                                        <button class="btn btn-danger text-uppercase" style="padding: 3px" type="submit">Delete</button>
                                    </form>
                                    
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                <br>
                <div style="margin-left: 10px">{{ $roles->links() }}</div>
                
            </div>
            <!-- /tables -->

        </div>
        <!-- /card body -->

    </div>
    <!-- /card -->
</div>
@endsection