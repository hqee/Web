@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif

                                <br><br>
                                <b>Atau Login dengan akun:</b><br><br>
                                <a class="ml-1 btn btn-primary btn-sm" href="{{ url('auth/google') }}" style="margin-top: 0px !important;background: rgb(243, 5, 5);color: #ffffff;padding: 5px;border-radius:7px;" id="btn-glogin">
                                    <i class="fab fa-google" aria-hidden="true"></i>&nbsp;Google
                                </a>

                                <a class="ml-1 btn btn-primary btn-sm" href="{{ url('auth/twitter') }}" style="margintop: 0px !important;background: rgb(29, 161, 242);color: 
                                #ffffff;padding: 5px;borderradius:7px;" id="btn-twlogin">
                                    <i class="fab fa-twitter" aria-hidden="true"></i>&nbsp;Twitter
                                </a>
                                

                                <a class="ml-1 btn btn-primary btn-sm" href="{{ url('auth/facebook') }}" style="margin-top: 0px !important;background: rgb(66, 103, 178);color: #ffffff;padding: 5px;border-radius:7px;" id="btn-fblogin">
                                    <i class="fab fa-facebook" aria-hidden="true"></i>&nbsp;Facebook
                                </a>

                                <a class="ml-1 btn btn-primary btn-sm" href="{{ url('auth/yahoo') }}" style="margin-top: 0px !important;background: rgb(49, 112, 163);color: #ffffff;padding: 5px;border-radius:7px;" id="btn-ylogin">
                                    <i class="fab fa-yahoo" aria-hidden="true"></i>&nbsp;Yahoo
                                </a>


                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
