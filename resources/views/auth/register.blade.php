@extends('layout', ['title' => ' | Register'])

@section('description', 'Register and discover and create your own football and futsal tactics.')

@section('content')
<div class="gradient-background"></div>
<div class="logo-box">
    <div class="logo"></div>
</div>
<main class="form-wrapper">
    <form method="POST" action="{{ route('register') }}">
        @csrf

        <div class="form-content">

            <header>
                <h1>Create account</h1>
            </header>

            <div class="input-elements">
                <div class="form-element">
                    <label for="name" class="form-label">Name</label>
                    <input id="name" type="text" class="@error('name') form-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="Name">

                    @error('name')
                        <span class="form-invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="form-element">
                    <label for="email" class="form-label">Email</label>
                    <input id="email" type="email" class="@error('email') form-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Email">

                    @error('email')
                        <span class="form-invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="form-element">
                    <label for="password" class="form-label">Password</label>
                    <input id="password" type="password" class="@error('password') form-invalid @enderror" name="password" required autocomplete="new-password" autofocus placeholder="Password">

                    @error('password')
                        <span class="form-invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="form-element">
                    <label for="password-confirm" class="form-label">Confirm password</label>
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
            <button type="submit" class="submit-button">SIGN UP</button>
            <span class="form-message">Already have an account? <a href="{{ url('/login') }}" class="page-link">Sign in</a></span>
        </div>
    </form>
</main>
@endsection

