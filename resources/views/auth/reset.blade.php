@extends('layouts.auth')

@section('content')

<!-- Root -->
<div class="dt-root">
    <!-- Site Main -->
    <main class="dt-main">
        <!-- Site Content Wrapper -->
        <div class="dt-content-wrapper">
            <!-- Site Content -->
            <div class="dt-content">
                <!-- Login Container -->
                <div class="dt-login--container dt-forgot-password">
                    <!-- Login Content -->
                    <div class="dt-login__content-wrapper">
                        <!-- Login Content Inner -->
                        <div class="dt-login__content-inner">
                            <!-- Brand logo -->
                            <span class="dt-login__logo">
                                <a class="dt-brand__logo-link" href="">
                                    <img class="dt-brand__logo-img" src="{{asset('assets/images/logo.png')}}" alt="Wieldy">
                                </a>
                            </span>
                            <!-- /brand logo -->

                            <h2 class="mb-2">Forgot Your Password ?</h2>
                            <p class="mb-5">Don't worry. Recovering the password is easy. Just tell us the email you
                                have registered</p>

                            <!-- Form -->
                            <form action="{{route('password.email')}}" method="POST">
								@csrf

                                <!-- Enter Email -->
                                <x-textbox labelClass="sr-only" for="email" id="email" labelName="User email" type="email" name="email" required="required" placeholder="User email" ariaDescribedby="email"/>
                                <!-- /form group -->

                                <!-- Submit Button -->
                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary text-uppercase">Send</button>
                                </div>
                                <!-- /form group -->
                            </form>
                            <!-- /form -->
                        </div>
                        <!-- /login content inner -->
                    </div>
                    <!-- /login content -->
                </div>
                <!-- /login container -->
            </div>
            <!-- /site content -->
        </div>
        <!-- /site content wrapper -->
    </main>
    <!-- /site main -->
</div>
<!-- /root -->

@endsection