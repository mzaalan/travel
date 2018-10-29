@component('mail::message')
Hello {{$user->name}},
# Welcome to Round Booking
Please click button below to activate your account at RoundBooking

@component('mail::button', ['url' => route('verify.token',$user->verify_token)])
Click To Activate
@endcomponent

Thanks,<br>
{{ config('app.name') }} Team
@endcomponent
