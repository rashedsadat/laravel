@extends('layouts.auth')

@section('content')
<!-- Loader -->
<div class="dt-loader-container">
    <div class="dt-loader">
        <svg class="circular" viewBox="25 25 50 50">
            <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10"></circle>
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
                    <h1 class="dt-login__title">Sign Up</h1>
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
                    <form action="" method="POST" enctype="multipart/form-data">
                        @csrf

                        <!-- User Name -->
                        <x-textbox labelClass="sr-only" for="name" id="name" labelName="User name" type="text" name="name" required="required" placeholder="User name" ariaDescribedby="name"/>

                        <!-- Email Address -->
                        <x-textbox labelClass="sr-only" for="email" id="email" labelName="User email" type="email" name="email" required="required" placeholder="Email" ariaDescribedby="email"/>

                        <!-- Password -->
                        <x-textbox labelClass="sr-only" for="password" id="password" labelName="Enter password" type="password" name="password" required="required" placeholder="Password" ariaDescribedby="password"/>

                        <!-- Confirm Password -->
                        <x-textbox labelClass="sr-only" for="password-confirm" id="password-confirm" labelName="Enter password" type="password" name="password_confirmation" required="required" placeholder="Confirm password" ariaDescribedby="password-confirm"/>

                        <!-- Phone Number -->
                        <x-textbox labelClass="sr-only" for="phone_no" id="phone_no" labelName="Phone No" name="phone_no" required="required" placeholder="Phone number" ariaDescribedby="phone_no"/>

                        <!-- Gender -->
                        <div class="form-group">
                            <div class="input-group">
                                <div class="input-group-text mr-5">
                                    <span class="mr-3">Male</span>
                                    <input type="radio" name="gender" id="male" value="male" checked>
                                </div>
                                <div class="input-group-text">
                                    <span class="mr-3">Female</span>
                                    <input type="radio" name="gender" id="female" value="female">
                                </div>
                            </div>
                        </div>

                        <!-- CheckBox Term's & Condition -->
                        <div class="custom-control custom-checkbox mb-6 mb-lg-8">
                            <input class="custom-control-input" type="checkbox" id="checkbox" checked="checked">
                            <label class="custom-control-label" for="checkbox">by signing up, I accept <a href="javascript:void(0)" class="px-2">Term &amp; Condition</a></label>
                        </div>

                        <!-- SignUp Or SignIn -->
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary text-uppercase">Sign Up</button>
                            <span class="d-inline-block ml-4">Or
                                <a class="d-inline-block font-weight-medium ml-3" href="{{route('login')}}">Sign In</a>
                            </span>
                        </div>

                        <!-- Via Social Registration -->
                        <div class="d-flex flex-wrap align-items-center mb-3 mb-md-4">
                            <span class="d-inline-block mr-2">Or connect with</span>

                            <!-- List -->
                            <ul class="dt-list dt-list-sm dt-list-cm-0 ml-auto">
                                <li class="dt-list__item">
                                    <!-- Facebook -->
                                    <a href="javascript:void(0)" class="btn btn-outline-primary dt-fab-btn size-30">
                                        <i class="icon icon-facebook icon-xl"></i>
                                    </a>
                                </li>

                                <li class="dt-list__item">
                                    <!-- Google+ -->
                                    <a href="javascript:void(0)" class="btn btn-outline-primary dt-fab-btn size-30">
                                        <i class="icon icon-google-plus icon-xl"></i>
                                    </a>
                                </li>

                                <li class="dt-list__item">
                                    <!-- Github -->
                                    <a href="javascript:void(0)" class="btn btn-outline-primary dt-fab-btn size-30">
                                        <i class="icon icon-github icon-xl"></i>
                                    </a>
                                </li>

                                <li class="dt-list__item">
                                    <!-- Twitter -->
                                    <a href="javascript:void(0)" class="btn btn-outline-primary dt-fab-btn size-30">
                                        <i class="icon icon-twitter icon-xl"></i>
                                    </a>
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