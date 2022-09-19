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

                            <h2 class="mb-2">Validate Account</h2>
                            <p class="mb-5">Select a method to validate your account.</p>

                            <form action="{{route('send_verify_code')}}" method="POST">
                                @csrf
                                {{-- Radio Button --}}
                                <div class="btn-group btn-group-toggle mb-5" data-toggle="buttons">
                                    <label class="btn btn-outline-secondary">
                                        <input type="radio" name="otp_via" id="otpemail" value="otpemail">Email
                                    </label>
                                    <label class="btn btn-outline-secondary active">
                                        <input type="radio" name="otp_via" id="otpsms" value="otpsms" checked>SMS
                                    </label>
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary text-uppercase">Send varification code</button>
                                </div>
                            </form>
                            
                            <hr>
                            <!-- Form -->
                            <form action="{{route('confirm_verification')}}" method="POST">
								@csrf

                                <!-- Enter Email -->
                                <x-textbox labelClass="sr-only" for="otp" id="otp" labelName="OTP code" type="text" name="otp" required="required" placeholder="Place OTP" ariaDescribedby="otp"/>
                                <!-- /form group -->

                                <!-- Submit Button -->
                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary text-uppercase">Varify</button>
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