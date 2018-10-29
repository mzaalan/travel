@extends('layouts.master')

@section('content')
    <section class="section login">
        <div class="container">
            <div class="text-center pl-5 pr-5">
                <div class="has-circle pos-btm">
                    <div class="login-wrap bx-bs">
                        <div class="row">
                            <div class="col-md-6 login-right-bg" style="background-image:url({{asset('img/signup-bg.jpg')}})"></div>
                            <div class="col-md-6">
                                <div class="login-form">
                                    <div class="section-title mt-5">Create Account</div>
                                    <div class="section-sub-title">Welcome!</div>
                                    <form method="POST" action="{{ route('register') }}" aria-label="{{ __('Register') }}">
                                        @csrf
                                        <div class="form-group mt-5">
                                            <input id="fname" type="text" class="form-control{{ $errors->has('first_name') ? ' is-invalid' : '' }}" name="first_name" value="{{ old('first_name') }}" autofocus placeholder="First Name">

                                               @if ($errors->has('first_name'))
                                                   <span class="invalid-feedback" role="alert">
                                                       <strong>{{ $errors->first('first_name') }}</strong>
                                                   </span>
                                               @endif
                                        </div>
                                        <div class="form-group">
                                            <input id="lname" type="text" class="form-control{{ $errors->has('last_name') ? ' is-invalid' : '' }}" name="last_name" value="{{ old('last_name') }}" autofocus placeholder="Last Name">

                                               @if ($errors->has('last_name'))
                                                   <span class="invalid-feedback" role="alert">
                                                       <strong>{{ $errors->first('last_name') }}</strong>
                                                   </span>
                                               @endif
                                        </div>
                                        <div class="form-group">
                                            <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" placeholder="Email Address">

                                                @if ($errors->has('email'))
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $errors->first('email') }}</strong>
                                                    </span>
                                                @endif
                                        </div>
                                        <div class="form-group">
                                            <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" placeholder="Password">

                                                @if ($errors->has('password'))
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $errors->first('password') }}</strong>
                                                    </span>
                                                @endif
                                        </div>
                                        <div class="form-group">
                                               <input id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="Confirm Password">
                                        </div>
                                        <div class="form-group text-center">
                                            <div class="mb-3">
                                                <div class="custom-check">
                                                    <input id="tou" type="checkbox" name="tos"><label for="tou"><span class="text-muted">I Agree with</span></label>
                                                </div>
                                                <a class="link" data-toggle="modal" data-target=".terms-of-service" href="#!">Terms of Use</a>
                                                @if ($errors->has('tos'))
                                                    <span style="display: block" class="invalid-feedback" role="alert">
                                                        <strong>{{ $errors->first('tos') }}</strong>
                                                    </span>
                                                @endif
                                            </div>
                                            <button id="register" type="submit" class="btn btn-secondary">Sign Up</button>
                                        </div>
                                        <div class="form-group text-center mt-5">
                                            <div class="text-muted">Already have an account?</div>
                                            <a class="link" href="{{route('login')}}">Log In</a>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        @include('shared.tos')
        
        <div class="modal fade" id="accept-tos" tabindex="-1" role="dialog">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-body">
                <p>You have not accepted our "Terms Of Services". Please tick box "I Agree with
                Terms of Use" in form below and proceed. <br><br>Thank you. <br> RoundBooking Team</p>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              </div>
            </div><!-- /.modal-content -->
          </div><!-- /.modal-dialog -->
        </div><!-- /.modal -->
    </section>
    
    @push('scripts')
        <script>
            $(function(){
                $('#register').click(function(e){
                    var tos = $('#tou').is(":checked");
                    if(!tos)
                    {
                        $('#accept-tos').modal('show');
                        e.preventDefault();
                    }
                });
            });
        </script>
    @endpush
{{-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}" aria-label="{{ __('Register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div> --}}
@endsection
