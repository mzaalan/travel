@component('mail::message')
Hello {{$data['data']}},
# Welcome to Round Booking
Please click button below to activate your account at RoundBooking

@component('mail::button', ['url' => url('verifyAccount'.'/'.$data['token'])])
Click To Activate
@endcomponent

Thanks,<br>
{{ config('app.name') }} Team
@endcomponent
