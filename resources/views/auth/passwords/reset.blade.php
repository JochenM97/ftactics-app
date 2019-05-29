@extends('layout')

@section('content')
<div class="form-wrapper">
    <form method="POST" action="{{ route('password.update') }}">
        @csrf

        <input type="hidden" name="token" value="{{ $token }}">

        <div class="form-content">
            <header><h1>RESET PASSWORD</h1></header>

            <div class="input-elements">
                <div class="form-element">
                    <input id="email" type="email" class="@error('email') form-invalid @enderror" name="email" value="{{ $email ?? old('email') }}" required autocomplete="email" autofocus placeholder="Email">

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
        <button type="submit" class="submit-button">SEND RESET LINK</button>
    </form>
</div>
@endsection

@section('pagespecificstyles')
<link href="{{ asset('css/auth.css') }}" rel="stylesheet">
@endsection
