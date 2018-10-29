@component('mail::message')
    # Order Shipped
    Hi {{$name}}
    Your Account must verified!
    click into this link to verify your account <a href="{{route('verifyUser')}}">{{$verification_code}}</a>

    Thanks,<br>
    {{ config('app.name') }}
@endcomponent
