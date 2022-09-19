@extends('layouts.auth')

@section('content')
<!-- Loader -->
<div class="dt-loader-container">
    <div class="dt-loader">
        <svg class="circular" viewBox="25 25 50 50">
            <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10">
            </circle>
        </svg>
    </div>
</div>
<!-- /loader -->

<!-- Root -->
<div class="dt-root">

    <!-- Login Container -->
    <div class="dt-login--container dt-app-login--container">

        <!-- Login Content -->
        <div class="dt-login__content-wrapper">

            <!-- Login Background Section -->
            <div class="dt-login__bg-section">

                <div class="dt-login__bg-content">
                    <!-- Login Title -->
                    <h1 class="dt-login__title">Sign In</h1>
                    <!-- /login title -->

                    <p class="f-16">By Signing Up, you can avail full features of our services.</p>

                    <p class="f-16">Get an account !!!</p>
                </div>


                <!-- Brand logo -->
                <div class="dt-login__logo">
                    <a class="dt-brand__logo-link" href="index-2.html">
                        <img class="dt-brand__logo-img" src="assets/images/logo-white.png" alt="Wieldy">
                    </a>
                </div>
                <!-- /brand logo -->

            </div>
            <!-- /login background section -->

            <!-- Login Content Section -->
            <div class="dt-login__content">

                <!-- Login Content Inner -->
                <div class="dt-login__content-inner">

                    <!-- Form -->
                    <form action="{{route('login')}}" method="POST">
                        @csrf
                        <!-- Form Group -->
                        <x-textbox labelClass="sr-only" for="email" id="email" labelName="Email address" type="email" name="email" required="required" placeholder="Enter email" ariaDescribedby="email"/>
                        <!-- /form group -->

                        <!-- Form Group -->
                        <x-textbox labelClass="sr-only" for="password" id="password" labelName="Password" type="password" name="password" required="required" placeholder="Enter password" ariaDescribedby="password"/>
                        <!-- /form group -->

                        <!-- Form Group -->
                        <div class="custom-control custom-checkbox mb-6 mb-lg-8">
                            <input class="custom-control-input" type="checkbox" id="checkbox-1" checked="checked">
                            <label class="custom-control-label" for="checkbox-1">by signing up, I accept <a
                                    href="javascript:void(0)" class="px-2">Term &amp; Condition</a></label>
                        </div>
                        <!-- /form group -->

                        <!-- Form Group -->
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary text-uppercase">Sign In</button>
                            <span class="d-inline-block ml-4">Or
                                <a class="d-inline-block font-weight-medium ml-3" href="{{route('register')}}">Sign
                                    Up</a>
                            </span>

                            <!-- Forgot Password -->
                            <span class="d-inline-block">
                                <a class="btn btn-link ml-0" href="{{ route('password.request') }}">
                                    Forgot Your Password?
                                </a>
                            </span>
                        </div>

                        <!-- Form Group -->
                        <div class="d-flex flex-wrap align-items-center mb-3 mb-md-4">
                            <span class="d-inline-block mr-2">Or connect with</span>

                            <!-- List -->
                            <ul class="dt-list dt-list-sm dt-list-cm-0 ml-auto">
                                <li class="dt-list__item">
                                    <!-- Fab Button -->
                                    <a href="javascript:void(0)" class="btn btn-outline-primary dt-fab-btn size-30">
                                        <i class="icon icon-facebook icon-xl"></i>
                                    </a>
                                    <!-- /fab button -->
                                </li>

                                <li class="dt-list__item">
                                    <!-- Fab Button -->
                                    <a href="javascript:void(0)" class="btn btn-outline-primary dt-fab-btn size-30">
                                        <i class="icon icon-google-plus icon-xl"></i>
                                    </a>
                                    <!-- /fab button -->
                                </li>

                                <li class="dt-list__item">
                                    <!-- Fab Button -->
                                    <a href="javascript:void(0)" class="btn btn-outline-primary dt-fab-btn size-30">
                                        <i class="icon icon-github icon-xl"></i>
                                    </a>
                                    <!-- /fab button -->
                                </li>

                                <li class="dt-list__item">
                                    <!-- Fab Button -->
                                    <a href="javascript:void(0)" class="btn btn-outline-primary dt-fab-btn size-30">
                                        <i class="icon icon-twitter icon-xl"></i>
                                    </a>
                                    <!-- /fab button -->
                                </li>
                            </ul>
                            <!-- /list -->
                        </div>
                        <!-- /form group -->
                        
                    </form>
                    <!-- /form -->

                </div>
                <!-- /login content inner -->

            </div>
            <!-- /login content section -->

        </div>
        <!-- /login content -->

    </div>
    <!-- /login container -->

</div>
<!-- /root -->
@endsection