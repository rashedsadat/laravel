@component('mail::message')
Hi {{Auth::guard()->user()->name}}

Your OTP is {{$otp}}

Thanks,<br>
{{ config('app.name') }}
@endcomponent
