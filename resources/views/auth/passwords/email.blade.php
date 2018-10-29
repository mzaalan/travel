@extends('layouts.master')

@section('content')
    @include('shared.alert')
    @if (session('status'))
        <div class="alert alert-success" role="alert">
            {{ session('status') }}
        </div>
    @endif
    <section class="section login">
        <div class="container">
            <div class="text-center pl-5 pr-5">
                <div class="has-circle">
                    <div class="login-wrap bx-bs">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="login-form">
                                    <div class="section-title mt-5">{{ __('Reset Password') }}</div>
                                    <form method="POST" action="{{ route('password.email') }}" aria-label="{{ __('Reset Password') }}">
                                        @csrf
                                        <div class="form-group mt-5">
                                            <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus placeholder="Email">
                                            @if ($errors->has('email'))
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $errors->first('email') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                        <div class="form-group text-center">
                                          <button type="submit" class="btn btn-primary">
                                              {{ __('Send Password Reset Link') }}
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
