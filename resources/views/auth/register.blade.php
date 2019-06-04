@extends('layout', ['title' => ' | Register'])

@section('description', 'Register and discover and create your own football and futsal tactics.')

@section('content')
<div class="gradient-background"></div>
<div class="logo-box">
    <div class="logo"></div>
</div>
<div class="form-wrapper">
    <form method="POST" action="{{ route('register') }}">
        @csrf

        <div class="form-content">
            <a href="{{ url('/login-register') }}" class="back-btn"><img src="{{ URL::to('/') }}/images/icons/back-arrow-black.svg" alt="Back to last page button"></a>

            <header><h1>SIGN UP</h1></header>

            <div class="input-elements">
                <div class="form-element">
                    <input id="name" type="text" class="@error('name') form-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="Name">

                    @error('name')
                        <span class="form-invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="form-element">
                    <input id="email" type="email" class="@error('email') form-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Email">

                    @error('email')
                        <span class="form-invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="form-element">
                    <input id="password" type="password" class="@error('password') form-invalid @enderror" name="password" required autocomplete="new-password" autofocus placeholder="Password">

                    @error('password')
                        <span class="form-invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="form-element">
                    <input id="password-confirm" type="password" class="" name="password_confirmation" required autocomplete="new-password" autofocus placeholder="Confirm password">

                    @error('password')
                        <span class="form-invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>
        </div>

        <button type="submit" class="submit-button">CONTINUE</button>
    </form>

</div>
@endsection

@section('pagespecificstyles')
<link href="{{ asset('css/auth.css') }}" rel="stylesheet">
@endsection

