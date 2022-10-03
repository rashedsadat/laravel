@extends('admin.layouts.admin')

@section('content')
<div class="dt-content">
    <!-- Entry Header -->
    @can('admin-user-create')
        <div class="pull-right">
            <a class="btn btn-success text-uppercase" href="{{ route('admin_users.create') }}"> Create New User</a>
        </div><br>
    @endcan
    <div class="dt-entry__header">
        
        <!-- Entry Heading -->
        <div class="dt-entry__heading">
            <h3 class="dt-entry__title">Admin List</h3>
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
                            <th class="text-uppercase" scope="col">Name</th>
                            <th class="text-uppercase" scope="col">Email</th>
                            <th class="text-uppercase" scope="col">Phone</th>
                            <th class="text-uppercase" scope="col">Gender</th>
                            <th class="text-uppercase" scope="col">Varification</th>
                            <th class="text-uppercase" scope="col">Role</th>
                            <th class="text-uppercase" scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php 
                            $index = 0;
                        @endphp
                        @foreach($users as $user)
                            @php $index++; @endphp
                            <tr>
                                <th>{{$index}}</th>
                                <td>{{$user['name']}}</td>
                                <td>{{$user['email']}}</td>
                                <td>{{$user['phone_no']}}</td>
                                <td>{{$user['gender']}}</td>
                                <td>{{$user['verified_at'] ? 'Yes' : 'No'}}</td>
                                <td>{{$role[$index - 1][0]}}</td>
                                <td>
                                    {{-- Edit --}}
                                    @can('admin-user-edit')
                                        <a class="btn btn-warning text-uppercase" href="{{route('admin_users.edit', $user['id'])}}" style="display: inline; padding: 3px;">Edit</a>
                                    @endcan

                                    {{-- DELETE --}}
                                    @can('admin-user-delete')
                                        <form method="POST" action="{{route('admin_users.destroy', $user['id'])}}" style="display: inline">
                                            @csrf
                                            @method("DELETE")
                                            <button class="btn btn-danger text-uppercase" style="padding: 3px" type="submit">Delete</button>
                                        </form>
                                    @endcan
                                    
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                <br>
                <div style="margin-left: 10px">{{ $users->links() }}</div>
                
            </div>
            <!-- /tables -->

        </div>
        <!-- /card body -->

    </div>
    <!-- /card -->
</div>
@endsection