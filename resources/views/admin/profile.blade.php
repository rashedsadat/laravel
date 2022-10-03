@extends('admin.layouts.admin')

@section('content')
<!-- Site Content -->
<div class="dt-content">

    <!-- Profile -->
    <div class="profile">

        <!-- Profile Banner -->
        <div class="profile__banner">

            <!-- Profile Banner Top -->
            <div class="profile__banner-top">
                <!-- Avatar Wrapper -->
                <div class="dt-avatar-wrapper">
                    <!-- Avatar -->
                    <img class="dt-avatar dt-avatar__shadow size-90 mr-sm-4"
                        src="{{ asset(session('path')) }}"
                        alt="Dinesh Suthar">
                    <!-- /avatar -->

                    <!-- Info -->
                    <div class="dt-avatar-info">
                        <span class="dt-avatar-name display-4 mb-2 font-weight-light">{{Auth::guard()->user()->name}}</span>
                        <span class="f-16">Florida, USA</span>
                    </div>
                    <!-- /info -->
                </div>
                <!-- /avatar wrapper -->

                <div class="ml-sm-auto">
                    <!-- List -->
                    <ul class="dt-list dt-list-bordered dt-list-one-third">
                        <!-- List Item -->
                        <li class="dt-list__item text-center">
                            <h4 class="font-weight-medium mb-0 text-white">2k+</h4>
                            <span class="d-inline-block f-12">Followers</span>
                        </li>
                        <!-- /list item -->
                        <!-- List Item -->
                        <li class="dt-list__item text-center">
                            <h4 class="font-weight-medium mb-0 text-white">847</h4>
                            <span class="d-inline-block f-12">Following</span>
                        </li>
                        <!-- /list item -->
                        <!-- List Item -->
                        <li class="dt-list__item text-center">
                            <h4 class="font-weight-medium mb-0 text-white">324</h4>
                            <span class="d-inline-block f-12">Friends</span>
                        </li>
                        <!-- /list item -->
                    </ul>
                    <!-- /list -->
                </div>
            </div>
            <!-- /profile banner top -->

            <!-- Profile Banner Bottom -->
            <div class="profile__banner-bottom">

                <!-- Navbar -->
                <ul class="navbar-nav">

                    <!-- Nav Item -->
                    <li class="nav-item active">
                        <a class="nav-link " href="">Timeline</a>
                    </li>
                    <!-- /nav item -->

                    <!-- Nav Item -->
                    <li class="nav-item">
                        <a class="nav-link" href="">About</a>
                    </li>
                    <!-- /nav item -->

                    <!-- Nav Item -->
                    <li class="nav-item">
                        <a class="nav-link" href="">Photos</a>
                    </li>
                    <!-- /nav item -->

                    <!-- Nav Item -->
                    <li class="nav-item">
                        <a class="nav-link" href="">Friends
                            <small class="text-light-gray">287</small>
                        </a>
                    </li>
                    <!-- /nav item -->

                    <!-- Nav Item -->
                    <li class="nav-item">
                        <a class="nav-link" href="">More</a>
                    </li>
                    <!-- /nav item -->

                </ul>
                <!-- /navbar -->

                <!-- Dropdown -->
                <div class="dropdown pl-3 mt-2 ml-auto">

                    <!-- Dropdown Button -->
                    <a href="#" class="dropdown-toggle no-arrow text-white" data-toggle="dropdown" aria-haspopup="true"
                        aria-expanded="false">
                        <i class="icon icon-setting icon-xl mr-2"></i>
                        <span class="d-none d-sm-inline-block">Settings</span>
                    </a>
                    <!-- /dropdown button -->

                    <!-- Dropdown Menu -->
                    <div class="dropdown-menu dropdown-menu-right">
                        <a class="dropdown-item" href="">Action</a>
                        <a class="dropdown-item" href="">Another action</a>
                        <a class="dropdown-item" href="">Something else here</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="">Separated link</a>
                    </div>
                    <!-- /dropdown menu -->

                </div>
                <!-- /dropdown -->

            </div>
            <!-- /profile banner bottom -->

        </div>
        <!-- /profile banner -->

        <!-- Profile Content -->
        <div class="profile-content">

            <!-- Grid -->
            <div class="row">

                <!-- Grid Item -->
                <div class="col-xl-4 order-xl-2">


                    <!-- Grid -->
                    <div class="row">

                        <!-- Grid Item -->
                        <div class="col-xl-12 col-md-6 col-12 order-xl-2">

                            <!-- Card -->
                            <div class="dt-card dt-card__full-height">

                                <!-- Card Header -->
                                <div class="dt-card__header">

                                    <!-- Card Heading -->
                                    <div class="dt-card__heading">
                                        <h3 class="dt-card__title">Friends - 530 <span class="f-12 text-light-gray">(27
                                                Mutual)</span>
                                        </h3>
                                    </div>
                                    <!-- /card heading -->

                                </div>
                                <!-- /card header -->

                                <!-- Card Body -->
                                <div class="dt-card__body pb-5">

                                    <!-- List -->
                                    <ul class="dt-list dt-list-sm">
                                        <!-- List Item -->
                                        <li class="dt-list__item col-4">
                                            <!-- User Information -->
                                            <a href="" class="card user-bg-card user-bg-card-sm mb-0"
                                                style="background-image: url('{{asset('assets/images/user-avatar/jimmy-jo.jpg')}}');">

                                                <!-- Dot Shape -->
                                                <span
                                                    class="dot-shape dot-shape-lg bg-success pulse-success dt-status"></span>
                                                <!-- /dot Shape -->

                                                <span class="user-bg-card__info">
                                                    <span class="dt-avatar-name f-10 mb-0">Domnic Harris</span>
                                                </span> </a>
                                            <!-- /user information -->
                                        </li>
                                        <!-- /list item -->

                                        <!-- List Item -->
                                        <li class="dt-list__item col-4">
                                            <!-- User Information -->
                                            <a href="" class="card user-bg-card user-bg-card-sm mb-0"
                                                style="background-image: url({{asset('assets/images/user-avatar/alex-dolgove.jpg')}});">

                                                <!-- Dot Shape -->
                                                <span
                                                    class="dot-shape dot-shape-lg bg-yellow pulse-yellow dt-status"></span>
                                                <!-- /dot Shape -->

                                                <span class="user-bg-card__info">
                                                    <span class="dt-avatar-name f-10 mb-0">Kayli Brown</span>
                                                </span> </a>
                                            <!-- /user information -->
                                        </li>
                                        <!-- /list item -->

                                        <!-- List Item -->
                                        <li class="dt-list__item col-4">
                                            <!-- User Information -->
                                            <a href="" class="card user-bg-card user-bg-card-sm mb-0"
                                                style="background-image: url({{asset('assets/images/user-avatar/domnic-brown.jpg')}});">

                                                <!-- Dot Shape -->
                                                <span
                                                    class="dot-shape dot-shape-lg bg-success pulse-success dt-status"></span>
                                                <!-- /dot Shape -->

                                                <span class="user-bg-card__info">
                                                    <span class="dt-avatar-name f-10 mb-0">Bob Builder</span>
                                                </span> </a>
                                            <!-- /user information -->
                                        </li>
                                        <!-- /list item -->

                                        <!-- List Item -->
                                        <li class="dt-list__item col-4">
                                            <!-- User Information -->
                                            <a href="" class="card user-bg-card user-bg-card-sm mb-0"
                                                style="background-image: url({{asset('assets/images/user-avatar/selena.jpg')}});">

                                                <!-- Dot Shape -->
                                                <span
                                                    class="dot-shape dot-shape-lg bg-danger pulse-danger dt-status"></span>
                                                <!-- /dot Shape -->

                                                <span class="user-bg-card__info">
                                                    <span class="dt-avatar-name f-10 mb-0">Chelsea Johns</span>
                                                </span> </a>
                                            <!-- /user information -->
                                        </li>
                                        <!-- /list item -->

                                        <!-- List Item -->
                                        <li class="dt-list__item col-4">
                                            <!-- User Information -->
                                            <a href="" class="card user-bg-card user-bg-card-sm mb-0"
                                                style="background-image: url({{asset('assets/images/user-avatar/kadir-m.jpg')}});">

                                                <!-- Dot Shape -->
                                                <span
                                                    class="dot-shape dot-shape-lg bg-light pulse-light dt-status"></span>
                                                <!-- /dot Shape -->

                                                <span class="user-bg-card__info">
                                                    <span class="dt-avatar-name f-10 mb-0">Ken Ramirez</span>
                                                </span> </a>
                                            <!-- /user information -->
                                        </li>
                                        <!-- /list item -->

                                        <!-- List Item -->
                                        <li class="dt-list__item col-4">
                                            <!-- User Information -->
                                            <a href=""
                                                class="card user-bg-card user-bg-card-sm mb-0 more-thumb"
                                                style="background-image: url({{asset('assets/images/user-avatar/steve-smith.jpg')}});">

                                                <span class="count-number display-4">+22</span> </a>
                                            <!-- /user information -->
                                        </li>
                                        <!-- /list item -->
                                    </ul>
                                    <!-- /list -->

                                </div>
                                <!-- /card body -->

                            </div>
                            <!-- /card -->

                        </div>
                        <!-- /grid item -->


                        <!-- Grid Item -->
                        <div class="col-xl-12 col-md-6 col-12 order-xl-1">

                            <!-- Card -->
                            <div class="dt-card dt-card__full-height">

                                <!-- Card Header -->
                                <div class="dt-card__header">

                                    <!-- Card Heading -->
                                    <div class="dt-card__heading">
                                        <h3 class="dt-card__title">Contact</h3>
                                    </div>
                                    <!-- /card heading -->

                                </div>
                                <!-- /card header -->

                                <!-- Card Body -->
                                <div class="dt-card__body">
                                    <!-- Media -->
                                    <div class="media mb-5">

                                        <i class="icon icon-email icon-xl mr-5"></i>

                                        <!-- Media Body -->
                                        <div class="media-body">
                                            <span class="d-block text-light-gray f-12 mb-1">Mail</span>
                                            <a href="">{{Auth::guard()->user()->email}}</a>
                                        </div>
                                        <!-- /media body -->

                                    </div>
                                    <!-- /media -->

                                    <!-- Media -->
                                    <div class="media mb-5">

                                        <i class="icon icon-link icon-xl mr-5"></i>

                                        <!-- Media Body -->
                                        <div class="media-body">
                                            <span class="d-block text-light-gray f-12 mb-1">Web Page</span>
                                            <a href="">example.com</a>
                                        </div>
                                        <!-- /media body -->

                                    </div>
                                    <!-- /media -->

                                    <!-- Media -->
                                    <div class="media">

                                        <i class="icon icon-phone icon-xl mr-5"></i>

                                        <!-- Media Body -->
                                        <div class="media-body">
                                            <span class="d-block text-light-gray f-12 mb-1">Phone</span>
                                            <span class="h5">+1-987 (454) 987</span>
                                        </div>
                                        <!-- /media body -->

                                    </div>
                                    <!-- /media -->
                                </div>
                                <!-- /card body -->

                            </div>
                            <!-- /card -->

                        </div>
                        <!-- /grid item -->

                        <!-- Grid Item -->
                        <div class="col-12 order-xl-3">

                            <!-- Card -->
                            <div class="dt-card dt-card__full-height">

                                <!-- Card Header -->
                                <div class="dt-card__header">

                                    <!-- Card Heading -->
                                    <div class="dt-card__heading">
                                        <h3 class="dt-card__title">Photos</h3>
                                    </div>
                                    <!-- /card heading -->

                                </div>
                                <!-- /card header -->

                                <!-- Card Body -->
                                <div class="dt-card__body">

                                    <!-- List -->
                                    <ul class="dt-gallery-list">
                                        <li><img src="{{asset('assets/images/wall/p1.jpg')}}" class="img-fluid w-100" alt="Image Title"></li>
                                        <li><img src="{{asset('assets/images/wall/p2.jpg')}}" class="img-fluid w-100" alt="Image Title"></li>
                                        <li><img src="{{asset('assets/images/wall/p3.jpg')}}" class="img-fluid w-100" alt="Image Title"></li>
                                        <li><img src="{{asset('assets/images/wall/p4.jpg')}}" class="img-fluid w-100" alt="Image Title"></li>
                                        <li><img src="{{asset('assets/images/wall/p5.jpg')}}" class="img-fluid w-100" alt="Image Title"></li>
                                        <li><img src="{{asset('assets/images/wall/p6.jp')}}g" class="img-fluid w-100" alt="Image Title"></li>
                                    </ul>
                                    <!-- /list -->

                                    <div class="mt-5">
                                        <a href=""><span>Go to gallery </span> <i
                                                class="icon icon-long-arrow-right icon-xl ml-1"></i> </a>
                                    </div>

                                </div>
                                <!-- /card Body -->

                            </div>
                            <!-- /card -->

                        </div>
                        <!-- /grid item -->

                    </div>
                    <!-- /grid -->

                </div>
                <!-- /grid item -->

                <!-- Grid Item -->
                <div class="col-xl-8 order-xl-1">

                    <!-- Card -->
                    <div class="card">

                        <!-- Card Header -->
                        <div class="card-header card-nav bg-transparent d-flex justify-content-between">
                            <h2 class="mb--20">About</h2>

                            <ul class="card-header-links nav nav-underline" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" data-toggle="tab" href="#tab-pane1" role="tab"
                                        aria-controls="tab-pane1" aria-selected="true">Overview</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#tab-pane2" role="tab"
                                        aria-controls="tab-pane2" aria-selected="true">Work</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#tab-pane3" role="tab"
                                        aria-controls="tab-pane3" aria-selected="true">Education</a>
                                </li>
                            </ul>

                        </div>
                        <!-- /card header -->

                        <!-- Card Body -->
                        <div class="card-body pb-2">

                            <!-- Tab Content-->
                            <div class="tab-content mt-5">

                                <!-- Tab panel -->
                                <div id="tab-pane1" class="tab-pane active">

                                    <!-- List -->
                                    <ul class="dt-list dt-list-one-third">
                                        <!-- List Item -->
                                        <li class="dt-list__item">
                                            <!-- Media -->
                                            <div class="media">

                                                <i class="icon icon-company icon-4x mr-5 align-self-center text-warning"></i>

                                                <!-- Media Body -->
                                                <div class="media-body">
                                                    <span class="d-block text-light-gray f-12 mb-1">Works at</span>
                                                    <h5 class="mb-0">G-axon Tech Pvt. Ltd.</h5>
                                                </div>
                                                <!-- /media body -->

                                            </div>
                                            <!-- /media -->
                                        </li>
                                        <!-- /list item -->

                                        <!-- List Item -->
                                        <li class="dt-list__item">
                                            <!-- Media -->
                                            <div class="media">

                                                <i class="icon icon-birthday-new icon-4x mr-5 align-self-center text-warning"></i>

                                                <!-- Media Body -->
                                                <div class="media-body">
                                                    <span class="d-block text-light-gray f-12 mb-1">Birthday</span>
                                                    <h5 class="mb-0">Oct 25, 1984</h5>
                                                </div>
                                                <!-- /media body -->

                                            </div>
                                            <!-- /media -->
                                        </li>
                                        <!-- /list item -->

                                        <!-- List Item -->
                                        <li class="dt-list__item">
                                            <!-- Media -->
                                            <div class="media">

                                                <i class="icon icon-graduation icon-4x mr-5 align-self-center text-warning"></i>

                                                <!-- Media Body -->
                                                <div class="media-body">
                                                    <span class="d-block text-light-gray f-12 mb-1">Went to</span>
                                                    <h5 class="mb-0">Oxford University</h5>
                                                </div>
                                                <!-- /media body -->

                                            </div>
                                            <!-- /media -->
                                        </li>
                                        <!-- /list item -->

                                        <!-- List Item -->
                                        <li class="dt-list__item">
                                            <!-- Media -->
                                            <div class="media">

                                                <i class="icon icon-home icon-4x mr-5 align-self-center text-warning"></i>

                                                <!-- Media Body -->
                                                <div class="media-body">
                                                    <span class="d-block text-light-gray f-12 mb-1">Lives in
                                                        London</span>
                                                    <h5 class="mb-0">From Switzerland</h5>
                                                </div>
                                                <!-- /media body -->

                                            </div>
                                            <!-- /media -->
                                        </li>
                                        <!-- /list item -->

                                        <!-- List Item -->
                                        <li class="dt-list__item">
                                            <!-- Media -->
                                            <div class="media">

                                                <i class="icon icon-family icon-4x mr-5 align-self-center text-warning"></i>

                                                <!-- Media Body -->
                                                <div class="media-body">
                                                    <span class="d-block text-light-gray f-12 mb-1">4 Family
                                                        Members</span>

                                                    <!-- Project Team -->
                                                    <ul class="dt-list dt-list-sm">
                                                        <li>
                                                            <!-- Avatar -->
                                                            <a class="dt-avatar size-25" href="">
                                                                <img src="{{asset('assets/images/user-avatar/steve-smith.jpg')}}"
                                                                    alt="Steve Smith"> </a>
                                                            <!-- /avatar -->
                                                        </li>
                                                        <li>
                                                            <!-- Avatar -->
                                                            <a class="dt-avatar size-25" href="">
                                                                <img src="{{asset('assets/images/user-avatar/alex-dolgove.jpg')}}"
                                                                    alt="Alex Dolgove"> </a>
                                                            <!-- /avatar -->
                                                        </li>
                                                        <li>
                                                            <!-- Avatar -->
                                                            <a class="dt-avatar size-25" href="">
                                                                <img src="{{asset('assets/images/user-avatar/man-3.jpg')}}"
                                                                    alt="Dinesh Suthar"> </a>
                                                            <!-- /avatar -->
                                                        </li>
                                                        <li>
                                                            <!-- Avatar -->
                                                            <a class="dt-avatar size-25" href="">
                                                                <img src="{{asset('assets/images/user-avatar/selena.jpg')}}"
                                                                    alt="Selena"> </a>
                                                            <!-- /avatar -->
                                                        </li>
                                                    </ul>
                                                    <!-- /project team -->

                                                </div>
                                                <!-- /media body -->

                                            </div>
                                            <!-- /media -->
                                        </li>
                                        <!-- /list item -->
                                    </ul>
                                    <!-- /list -->

                                </div>
                                <!-- /tab panel -->

                                <!-- Tab panel -->
                                <div id="tab-pane2" class="tab-pane">

                                    <!-- List -->
                                    <ul class="dt-list dt-list-one-third">
                                        <!-- List Item -->
                                        <li class="dt-list__item">
                                            <!-- Media -->
                                            <div class="media">

                                                <i class="icon icon-company icon-4x mr-5 align-self-center text-warning"></i>

                                                <!-- Media Body -->
                                                <div class="media-body">
                                                    <span class="d-block text-light-gray f-12 mb-1">Works at</span>
                                                    <h5 class="mb-0">G-axon Tech Pvt. Ltd.</h5>
                                                </div>
                                                <!-- /media body -->

                                            </div>
                                            <!-- /media -->
                                        </li>
                                        <!-- /list item -->

                                        <!-- List Item -->
                                        <li class="dt-list__item">
                                            <!-- Media -->
                                            <div class="media">

                                                <i class="icon icon-birthday-new icon-4x mr-5 align-self-center text-warning"></i>

                                                <!-- Media Body -->
                                                <div class="media-body">
                                                    <span class="d-block text-light-gray f-12 mb-1">Birthday</span>
                                                    <h5 class="mb-0">Oct 25, 1984</h5>
                                                </div>
                                                <!-- /media body -->

                                            </div>
                                            <!-- /media -->
                                        </li>
                                        <!-- /list item -->

                                        <!-- List Item -->
                                        <li class="dt-list__item">
                                            <!-- Media -->
                                            <div class="media">

                                                <i class="icon icon-graduation icon-4x mr-5 align-self-center text-warning"></i>

                                                <!-- Media Body -->
                                                <div class="media-body">
                                                    <span class="d-block text-light-gray f-12 mb-1">Went to</span>
                                                    <h5 class="mb-0">Oxford University</h5>
                                                </div>
                                                <!-- /media body -->

                                            </div>
                                            <!-- /media -->
                                        </li>
                                        <!-- /list item -->

                                        <!-- List Item -->
                                        <li class="dt-list__item">
                                            <!-- Media -->
                                            <div class="media">

                                                <i class="icon icon-home icon-4x mr-5 align-self-center text-warning"></i>

                                                <!-- Media Body -->
                                                <div class="media-body">
                                                    <span class="d-block text-light-gray f-12 mb-1">Lives in
                                                        London</span>
                                                    <h5 class="mb-0">From Switzerland</h5>
                                                </div>
                                                <!-- /media body -->

                                            </div>
                                            <!-- /media -->
                                        </li>
                                        <!-- /list item -->

                                        <!-- List Item -->
                                        <li class="dt-list__item">
                                            <!-- Media -->
                                            <div class="media">

                                                <i class="icon icon-family icon-4x mr-5 align-self-center text-warning"></i>

                                                <!-- Media Body -->
                                                <div class="media-body">
                                                    <span class="d-block text-light-gray f-12 mb-1">4 Family
                                                        Members</span>

                                                    <!-- Project Team -->
                                                    <ul class="dt-list dt-list-sm">
                                                        <li>
                                                            <!-- Avatar -->
                                                            <a class="dt-avatar size-25" href="">
                                                                <img src="{{asset('assets/images/user-avatar/steve-smith.jpg')}}"
                                                                    alt="Steve Smith"> </a>
                                                            <!-- /avatar -->
                                                        </li>
                                                        <li>
                                                            <!-- Avatar -->
                                                            <a class="dt-avatar size-25" href="">
                                                                <img src="{{asset('assets/images/user-avatar/alex-dolgove.jpg')}}"
                                                                    alt="Alex Dolgove"> </a>
                                                            <!-- /avatar -->
                                                        </li>
                                                        <li>
                                                            <!-- Avatar -->
                                                            <a class="dt-avatar size-25" href="">
                                                                <img src="{{asset('assets/images/user-avatar/man-3.jpg')}}"
                                                                    alt="Dinesh Suthar"> </a>
                                                            <!-- /avatar -->
                                                        </li>
                                                        <li>
                                                            <!-- Avatar -->
                                                            <a class="dt-avatar size-25" href="">
                                                                <img src="{{asset('assets/images/user-avatar/selena.jpg')}}"
                                                                    alt="Selena"> </a>
                                                            <!-- /avatar -->
                                                        </li>
                                                    </ul>
                                                    <!-- /project team -->

                                                </div>
                                                <!-- /media body -->

                                            </div>
                                            <!-- /media -->
                                        </li>
                                        <!-- /list item -->
                                    </ul>
                                    <!-- /list -->

                                </div>
                                <!-- /tab panel -->

                                <!-- Tab panel -->
                                <div id="tab-pane3" class="tab-pane">

                                    <!-- List -->
                                    <ul class="dt-list dt-list-one-third">
                                        <!-- List Item -->
                                        <li class="dt-list__item">
                                            <!-- Media -->
                                            <div class="media">

                                                <i class="icon icon-company icon-4x mr-5 align-self-center text-warning"></i>

                                                <!-- Media Body -->
                                                <div class="media-body">
                                                    <span class="d-block text-light-gray f-12 mb-1">Works at</span>
                                                    <h5 class="mb-0">G-axon Tech Pvt. Ltd.</h5>
                                                </div>
                                                <!-- /media body -->

                                            </div>
                                            <!-- /media -->
                                        </li>
                                        <!-- /list item -->

                                        <!-- List Item -->
                                        <li class="dt-list__item">
                                            <!-- Media -->
                                            <div class="media">

                                                <i class="icon icon-birthday-new icon-4x mr-5 align-self-center text-warning"></i>

                                                <!-- Media Body -->
                                                <div class="media-body">
                                                    <span class="d-block text-light-gray f-12 mb-1">Birthday</span>
                                                    <h5 class="mb-0">Oct 25, 1984</h5>
                                                </div>
                                                <!-- /media body -->

                                            </div>
                                            <!-- /media -->
                                        </li>
                                        <!-- /list item -->

                                        <!-- List Item -->
                                        <li class="dt-list__item">
                                            <!-- Media -->
                                            <div class="media">

                                                <i class="icon icon-graduation icon-4x mr-5 align-self-center text-warning"></i>

                                                <!-- Media Body -->
                                                <div class="media-body">
                                                    <span class="d-block text-light-gray f-12 mb-1">Went to</span>
                                                    <h5 class="mb-0">Oxford University</h5>
                                                </div>
                                                <!-- /media body -->

                                            </div>
                                            <!-- /media -->
                                        </li>
                                        <!-- /list item -->

                                        <!-- List Item -->
                                        <li class="dt-list__item">
                                            <!-- Media -->
                                            <div class="media">

                                                <i class="icon icon-home icon-4x mr-5 align-self-center text-warning"></i>

                                                <!-- Media Body -->
                                                <div class="media-body">
                                                    <span class="d-block text-light-gray f-12 mb-1">Lives in
                                                        London</span>
                                                    <h5 class="mb-0">From Switzerland</h5>
                                                </div>
                                                <!-- /media body -->

                                            </div>
                                            <!-- /media -->
                                        </li>
                                        <!-- /list item -->

                                        <!-- List Item -->
                                        <li class="dt-list__item">
                                            <!-- Media -->
                                            <div class="media">

                                                <i class="icon icon-family icon-4x mr-5 align-self-center text-warning"></i>

                                                <!-- Media Body -->
                                                <div class="media-body">
                                                    <span class="d-block text-light-gray f-12 mb-1">4 Family
                                                        Members</span>

                                                    <!-- Project Team -->
                                                    <ul class="dt-list dt-list-sm">
                                                        <li>
                                                            <!-- Avatar -->
                                                            <a class="dt-avatar size-25" href="">
                                                                <img src="{{asset('assets/images/user-avatar/steve-smith.jpg')}}"
                                                                    alt="Steve Smith"> </a>
                                                            <!-- /avatar -->
                                                        </li>
                                                        <li>
                                                            <!-- Avatar -->
                                                            <a class="dt-avatar size-25" href="">
                                                                <img src="{{asset('assets/images/user-avatar/alex-dolgove.jpg')}}"
                                                                    alt="Alex Dolgove"> </a>
                                                            <!-- /avatar -->
                                                        </li>
                                                        <li>
                                                            <!-- Avatar -->
                                                            <a class="dt-avatar size-25" href="">
                                                                <img src="{{asset('assets/images/user-avatar/man-3.jpg')}}"
                                                                    alt="Dinesh Suthar"> </a>
                                                            <!-- /avatar -->
                                                        </li>
                                                        <li>
                                                            <!-- Avatar -->
                                                            <a class="dt-avatar size-25" href="">
                                                                <img src="{{asset('assets/images/user-avatar/selena.jpg')}}"
                                                                    alt="Selena"> </a>
                                                            <!-- /avatar -->
                                                        </li>
                                                    </ul>
                                                    <!-- /project team -->

                                                </div>
                                                <!-- /media body -->

                                            </div>
                                            <!-- /media -->
                                        </li>
                                        <!-- /list item -->
                                    </ul>
                                    <!-- /list -->

                                </div>
                                <!-- /tab panel -->

                            </div>
                            <!-- /tab content-->

                        </div>
                        <!-- /card body -->

                    </div>
                    <!-- /card -->

                    <!-- Card -->
                    <div class="card">

                        <!-- Card Body -->
                        <div class="card-body">
                            <h2 class="card-title">Biography</h2>
                            <!-- Card Text -->
                            <h6 class="card-subtitle">A little flash back of Kiley Brown</h6>
                            <!-- /card text -->

                            <!-- Card Text -->
                            <p class="card-text lead">
                                Donec dignissim gravida sem, ut cursus dolor hendrerit et. Morbi volutpat.
                            </p>
                            <!-- /card text -->

                            <!-- Card Text -->
                            <p class="card-text">
                                Augue mauris dignissim arcu, ut venenatis metus ante eu orci. Donec non maximus neque,
                                ut finibus ex. Quisque semper ornare magna, sed ullamcorper risus luctus quis. Etiam
                                tristique dui vitae diam rutrum sodales. Mauris feugiat lectus felis, nec ullamcorper
                                risus elementum at. Aliquam erat volutpat. Nullam et est eget metus gravida tincidunt.
                                Phasellus sed odio eu lacus venenatis.
                            </p>
                            <!-- /card text -->

                            <!-- Card Text -->
                            <p class="card-text">
                                Suspendisse vel bibendum ex. Interdum et malesuada fames ac ante ipsum primis in
                                faucibus. Sed a felis nisi. Lorem ipsum dolor sit amet, consectetur adipiscing elit. In
                                molestie ultricies urna non volutpat. Nam fermentum cursus elit, et tempus metus
                                scelerisque imperdiet. Sed tincidunt molestie justo, a vulputate velit sagittis at.
                                Pellentesque consequat leo tortor.
                            </p>
                            <!-- /card text -->

                        </div>
                        <!-- /card body -->

                    </div>
                    <!-- /card -->

                    <!-- Card -->
                    <div class="dt-card">

                        <!-- Card Header -->
                        <div class="dt-card__header">

                            <!-- Card Heading -->
                            <div class="dt-card__heading">
                                <h2 class="mb-2">Events</h2>
                                <p class="text-light-gray f-12">What Kiley is up-to</p>
                            </div>
                            <!-- /card heading -->

                        </div>
                        <!-- /card header -->

                        <!-- Card Body -->
                        <div class="dt-card__body">

                            <!-- Card -->
                            <div class="card shadow-none horizontal rounded-0 pb-8 border-bottom">

                                <!-- Slider -->
                                <div class="dt-slider rounded-xl overflow-hidden">

                                    <img class="img-fluid" src="{{asset('assets/images/card/beach.jpg')}}" alt="Beach">

                                </div>
                                <!-- /slider -->

                                <!-- Card Stacked -->
                                <div class="card-stacked">

                                    <!-- Card Body -->
                                    <div class="card-body py-sm-0 px-0 px-sm-6 px-md-8">

                                        <!-- Badges -->
                                        <span class="badge bg-teal text-white text-uppercase mb-2">Music concert</span>
                                        <!-- /badges -->

                                        <!-- Card Title-->
                                        <h3 class="card-title font-weight-normal text-truncate mb-2">Veld Music Festival
                                        </h3>
                                        <!-- Card Title-->

                                        <p class="card-text text-light-gray">
                                            <i class="icon icon-location icon-lg icon-fw mr-2"></i><span>Downsview Park,
                                                Toronto, Ontario</span>
                                        </p>

                                    </div>
                                    <!-- /card body -->

                                    <!-- Card Footer -->
                                    <div
                                        class="card-footer d-flex flex-column justify-content-between p-0 text-sm-right">
                                        <!-- Pricing -->
                                        <a href="" class="display-5  mb-6">
                                            <i class="icon icon-calendar icon-fw mr-2"></i><span
                                                class="align-middle">Oct 23, 2019</span> </a>
                                        <!-- /pricing -->

                                        <!-- Card Button -->
                                        <a class="card-link f-14" href="">
                                            <span>Check in detail</span> <i
                                                class="icon icon-long-arrow-right icon-xl ml-1"></i> </a>
                                        <!-- /card button -->
                                    </div>
                                    <!-- /card footer -->

                                </div>
                                <!-- /card stacked -->

                            </div>
                            <!-- /card -->

                            <!-- Card -->
                            <div class="card shadow-none horizontal rounded-0 pb-8 border-bottom">

                                <!-- Slider -->
                                <div class="dt-slider rounded-xl overflow-hidden">

                                    <img class="img-fluid" src="{{asset('assets/images/card/sunset.jpg')}}" alt="Sunset">

                                </div>
                                <!-- /slider -->

                                <!-- Card Stacked -->
                                <div class="card-stacked">

                                    <!-- Card Body -->
                                    <div class="card-body py-sm-0 px-0 px-sm-6 px-md-8">

                                        <!-- Badges -->
                                        <span class="badge bg-teal text-white text-uppercase mb-2">Music concert</span>
                                        <!-- /badges -->

                                        <!-- Card Title-->
                                        <h3 class="card-title font-weight-normal text-truncate mb-2">Veld Music Festival
                                        </h3>
                                        <!-- Card Title-->

                                        <p class="card-text text-light-gray">
                                            <i class="icon icon-location icon-lg icon-fw mr-2"></i><span>Downsview Park,
                                                Toronto, Ontario</span>
                                        </p>

                                    </div>
                                    <!-- /card body -->

                                    <!-- Card Footer -->
                                    <div
                                        class="card-footer d-flex flex-column justify-content-between p-0 text-sm-right">
                                        <!-- Pricing -->
                                        <a href="" class="display-5  mb-6">
                                            <i class="icon icon-calendar icon-fw mr-2"></i><span
                                                class="align-middle">Oct 23, 2019</span> </a>
                                        <!-- /pricing -->

                                        <!-- Card Button -->
                                        <a class="card-link f-14" href="">
                                            <span>Check in detail</span> <i
                                                class="icon icon-long-arrow-right icon-xl ml-1"></i> </a>
                                        <!-- /card button -->
                                    </div>
                                    <!-- /card footer -->

                                </div>
                                <!-- /card stacked -->

                            </div>
                            <!-- /card -->

                            <!-- Card -->
                            <div class="card shadow-none horizontal rounded-0 mb-0">

                                <!-- Slider -->
                                <div class="dt-slider rounded-xl overflow-hidden">

                                    <img class="img-fluid" src="{{asset('assets/images/widget/water-skating.jpg')}}" alt="Beach">

                                </div>
                                <!-- /slider -->

                                <!-- Card Stacked -->
                                <div class="card-stacked">

                                    <!-- Card Body -->
                                    <div class="card-body py-sm-0 px-0 px-sm-6 px-md-8">

                                        <!-- Badges -->
                                        <span class="badge bg-teal text-white text-uppercase mb-2">Music concert</span>
                                        <!-- /badges -->

                                        <!-- Card Title-->
                                        <h3 class="card-title font-weight-normal text-truncate mb-2">Veld Music Festival
                                        </h3>
                                        <!-- Card Title-->

                                        <p class="card-text text-light-gray">
                                            <i class="icon icon-location icon-lg icon-fw mr-2"></i><span>Downsview Park,
                                                Toronto, Ontario</span>
                                        </p>

                                    </div>
                                    <!-- /card body -->

                                    <!-- Card Footer -->
                                    <div
                                        class="card-footer d-flex flex-column justify-content-between p-0 text-sm-right">
                                        <!-- Pricing -->
                                        <a href="" class="display-5  mb-6">
                                            <i class="icon icon-calendar icon-fw mr-2"></i><span
                                                class="align-middle">Oct 23, 2019</span> </a>
                                        <!-- /pricing -->

                                        <!-- Card Button -->
                                        <a class="card-link f-14" href="">
                                            <span>Check in detail</span> <i
                                                class="icon icon-long-arrow-right icon-xl ml-1"></i> </a>
                                        <!-- /card button -->
                                    </div>
                                    <!-- /card footer -->

                                </div>
                                <!-- /card stacked -->

                            </div>
                            <!-- /card -->

                        </div>
                        <!-- /card body -->

                    </div>
                    <!-- /card -->

                </div>
                <!-- /grid item -->

            </div>
            <!-- /grid -->

        </div>
        <!-- /profile content -->

    </div>
    <!-- /profile -->

</div>
<!-- /site content -->
@endsection