@component('mail::message')
Hi {{Auth::user()->name}}

Your OTP is {{$otp}}

Thanks,<br>
{{ config('app.name') }}
@endcomponent
