@extends('layout', ['title' => ' | Login'])

@section('description', 'Log in and start viewing and making more tactics.')

@section('content')
<div class="gradient-background"></div>
<div class="logo-box">
    <div class="logo"></div>
</div>
<main class="form-wrapper">
    <form method="POST" action="{{ route('login') }}">
        @csrf
        
        <div class="form-content">
            <header>
                <h1>LOGIN</h1>
                <span class="or">or</span>
                <a href="{{ url('/register') }}" class="page-link">Create new account</a>
            </header>
            
            <div class="input-elements">
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
                    <input id="password" type="password" class="@error('password') form-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Password">

                    @error('password')
                        <span class="form-invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            
        
                <div class="other-actions-box">
                    <div class="remember">
                        <input class="" type="checkbox" name="remember" id="remember" value="{{ old('remember') ? 'checked' : '' }}">

                        <label class="" for="remember">Remember me</label>
                    </div>
                    <div class="login">
                        @if (Route::has('password.request'))
                            <a href="{{ route('password.request') }}">Forgot your password?</a>
                        @endif
                    </div>
                </div>
            </div>
        </div>

        <button type="submit" class="submit-button">CONTINUE</button>
    </form>
</main>
@endsection