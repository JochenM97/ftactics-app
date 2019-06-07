@extends('layout', ['title' => ' | Reset password'])

@section('description', 'Reset your password.')

@section('content')
<div class="gradient-background"></div>
<div class="logo-box">
    <div class="logo"></div>
</div>
<main class="form-wrapper">
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
        <div class="submit-box">
            <button type="submit" class="submit-button">CONTINUE</button>
        </div>
    </form>
</main>
@endsection
