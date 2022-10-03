<!-- Sidebar -->
<aside id="main-sidebar" class="dt-sidebar">
    <div class="dt-sidebar__container">

        <!-- Sidebar Notification -->
        <div class="dt-sidebar__notification  d-none d-lg-block">
            <!-- Dropdown -->
            <div class="dropdown mb-6" id="user-menu-dropdown">
                
                <!-- Dropdown Link -->
                <a href="#" class="dropdown-toggle dt-avatar-wrapper text-body mt-3" data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false">
                    <img class="dt-avatar" src="{{ asset(session('path')) }}"
                        alt="{{Auth::guard()->user()->name}}">
                    <span class="dt-avatar-info">
                        <span class="dt-avatar-name">{{ Auth::user()->name }}</span>
                    </span> </a>
                <!-- /dropdown link -->

                <!-- Dropdown Option -->
                <div class="dropdown-menu dropdown-menu-right">
                    <div class="dt-avatar-wrapper flex-nowrap p-6 mt--5 bg-gradient-purple text-white rounded-top">
                        <a type="button" href="{{route('admin.profilePicture')}}">
                            <img class="dt-avatar" src="{{ asset(session('path')) }}" alt="{{Auth::guard()->user()->name}}">
                        </a>
                        {{-- <button type="button" id="addNew" class="btn btn-primary float-right" data-toggle="modal" data-target="#sendDataModal" onclick="showModal('Add new user','Submit')">Add New
                        </button> --}}
                        
                        <span class="dt-avatar-info ml-3">
                            <span class="dt-avatar-name">{{ Auth::user()->name }}</span>
                            <span class="f-12">Administrator</span>
                        </span>
                    </div>
                    <a class="dropdown-item" href="{{route('admin.home')}}">Dashboard</a>
                    <a class="dropdown-item" href="{{route('admin.profile')}}">Profile</a>
                    <a class="dropdown-item" href="{{route('logout')}}" onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();">Logout</a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </div>
                <!-- /dropdown option -->

            </div>
            <!-- /dropdown -->


            <ul class="dt-list dt-list-xl">
                <li class="dt-list__item pl-5 pr-5">
                    <a href="javascript:void(0)" class="dt-list__link"><i
                            class="icon icon-search-new icon-xl"></i></a>
                </li>
                <li class="dt-list__item pl-5 pr-5">
                    <a href="javascript:void(0)" class="dt-list__link"><i
                            class="icon icon-notification icon-xl"></i></a>
                </li>
                <li class="dt-list__item pl-5 pr-5">
                    <a href="javascript:void(0)" class="dt-list__link"><i
                            class="icon icon-chat-new icon-xl"></i></a>
                </li>
            </ul>
        </div>
        <!-- /sidebar notification -->

        <!-- Sidebar Navigation -->
        <ul class="dt-side-nav">

            <!-- Menu Header -->
            <li class="dt-side-nav__item dt-side-nav__header">
                <span class="dt-side-nav__text">main</span>
            </li>
            <!-- /menu header -->

            <!-- Menu Item -->
            <li class="dt-side-nav__item">
                <a href="{{route('admin.home')}}" class="dt-side-nav__link" title="Dashboard">
                    <i class="icon icon-dashboard icon-fw icon-xl"></i> <span
                        class="dt-side-nav__text">Dashboard</span> </a>

                {{-- <!-- Sub-menu -->
                <ul class="dt-side-nav__sub-menu">
                    <li class="dt-side-nav__item">
                        <a href="index-2.html" class="dt-side-nav__link" title="Crypto"> <i
                                class="icon icon-crypto icon-fw icon-sm"></i>
                            <span class="dt-side-nav__text">Crypto</span> </a>
                    </li>
                    <li class="dt-side-nav__item">
                        <a href="dashboard-crm.html" class="dt-side-nav__link" title="CRM"> <i
                                class="icon icon-crm icon-fw icon-sm"></i>
                            <span class="dt-side-nav__text">Crm</span> </a>
                    </li>

                    <li class="dt-side-nav__item">
                        <a href="dashboard-listing.html" class="dt-side-nav__link" title="Listing">
                            <i class="icon icon-listing-dbrd icon-fw icon-sm"></i> <span
                                class="dt-side-nav__text">Listing</span> </a>
                    </li>

                </ul>
                <!-- /sub-menu --> --}}

            </li>

            {{-- Manage permission --}}
            <li class="dt-side-nav__item">
                <a href="{{route('permissions.index')}}" class="dt-side-nav__link" title="Widgets"> <i
                        class="icon icon-widgets icon-fw icon-xl"></i>
                    <span class="dt-side-nav__text">Manage Permissions</span> </a>
            </li>

            {{-- Manage Role --}}
            <li class="dt-side-nav__item">
                <a href="{{route('roles.index')}}" class="dt-side-nav__link" title="Widgets"> <i
                        class="icon icon-widgets icon-fw icon-xl"></i>
                    <span class="dt-side-nav__text">Manage Roles</span> </a>
            </li>

            {{-- Manage Admin users --}}
            <li class="dt-side-nav__item">
                <a href="{{route('admin_users.index')}}" class="dt-side-nav__link" title="Widgets"> <i
                        class="icon icon-widgets icon-fw icon-xl"></i>
                    <span class="dt-side-nav__text">Manage Admin Users</span> </a>
            </li>

        </ul>
        <!-- /sidebar navigation -->

    </div>
</aside>
<!-- /sidebar -->