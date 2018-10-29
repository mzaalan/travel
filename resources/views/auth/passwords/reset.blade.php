@extends('layouts.master')

@section('content')
    @include('shared.alert')
    <section class="section login">
        <div class="container">
            <div class="text-center pl-5 pr-5">
                <div class="has-circle">
                    <div class="login-wrap bx-bs">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="login-form">
                                    <div class="section-title mt-5">Forgot Password</div>
                                    <form method="POST" action="{{ route('password.request') }}" aria-label="{{ __('Reset Password') }}">
                                        @csrf

                                        <input type="hidden" name="token" value="{{ $token }}">

                                        <div class="form-group mt-5">
                                            <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus placeholder="Email">
                                            @if ($errors->has('email'))
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $errors->first('email') }}</strong>
                                                </span>
                                            @endif
                                        </div>

                                        <div class="form-group mt-5">
                                            <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required  placeholder="Password">
                                            @if ($errors->has('password'))
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $errors->first('password') }}</strong>
                                                </span>
                                            @endif
                                        </div>

                                        <div class="form-group mt-5">
                                            <input id="password-confirm" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password_confirmation" required  placeholder="Password Confirmation">
                                            @if ($errors->has('password'))
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $errors->first('password') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                        <div class="form-group text-center">
                                          <button type="submit" class="btn btn-primary">
                                              {{ __('Reset Password') }}
                                          </button>
                                        </div>

                                    </form>
                                </div>
                            </div>
                            <div class="col-md-6 login-right-bg" style="background-image:url({{asset('img/login-bg.jpg')}})"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>




@endsection
