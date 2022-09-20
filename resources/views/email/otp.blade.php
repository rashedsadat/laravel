@component('mail::message')
Hi {{session('user')->name}}

Your OTP is {{$otp}}

Thanks,<br>
{{ config('app.name') }}
@endcomponent
