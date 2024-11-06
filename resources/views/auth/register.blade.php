@extends('layouts.app')

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-4 col-sm-12">
            <div class="sign-head">
                <div class="sign-type"> {{ isset($url) ? ucwords($url) : '' }} {{ __('Register') }}</div>

                <div>
                    <p class="sign-desc">Please sign up to continue</p>
                    @isset($url)
                        <form method="POST" action='{{ url("register/$url") }}' aria-label="{{ __('Register') }}"
                            style="transform: translate(25px, 10%);">
                            @honeypot
                            @csrf
                        @else
                            <form method="POST" action="{{ route('register') }}" aria-label="{{ __('Register') }}"
                                style="transform: translate(25px, 10%);">
                                @honeypot
                            @endisset
                            @csrf

                            {{--                                        <img src="{{ URL::asset('assets/images/undraw_login_re_4vu2.svg') }}" alt="avatar" style="width: 270px;position: relative;margin-bottom: 20px;"> --}}


                            <div class="form-group row">
                                <label for="name"
                                    class="col-md-4 col-form-label text-md-left">{{ __('name') }}</label>

                                <div class="col-md-6">
                                    <input id="name" type="text"
                                        class="form-control @error('name') is-invalid @enderror" placeholder="John Doe" name="name"
                                        value="{{ old('name') }}" required autocomplete="name">

                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="email"
                                    class="col-md-4 col-form-label text-md-left">{{ __('E-Mail Address') }}</label>

                                <div class="col-md-6">
                                    <input id="email" type="email" placeholder="example@domain.com"
                                        class="form-control @error('email') is-invalid @enderror" name="email"
                                        value="{{ old('email') }}" required autocomplete="email">

                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="password"
                                    class="col-md-4 col-form-label text-md-left">{{ __('Password') }}</label>

                                <div class="col-md-6">
                                    <input id="password" placeholder="********" type="password"
                                        class="form-control @error('password') is-invalid @enderror" name="password"
                                        required autocomplete="new-password">

                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="password-confirm"
                                    class="col-md-4 col-form-label text-md-left">{{ __('Confirm Password') }}</label>

                                <div class="col-md-6">
                                    <input id="password-confirm" placeholder="********" type="password" class="form-control"
                                        name="password_confirmation" required autocomplete="new-password">
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
        <div class="col-md-8">
            <div class="sign-up"
                style="width: 59%;
    height: 163%;
    background-image: url('{{ URL::asset('assets/images/dashboard-meet.svg') }}');
    background-size: contain;
    transform: translate(160px, 0);
        background-repeat: no-repeat;">

            </div>
        </div>
    </div>
@endsection
