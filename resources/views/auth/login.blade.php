@extends('layout', ['title' => ' | Login'])

@section('description', 'Log in and start viewing and making more tactics.')

@section('content')
<div class="logo-box">
    <div class="logo"></div>
</div>
<div class="form-wrapper">
    <form method="POST" action="{{ route('login') }}">
        @csrf
        
        <div class="form-content">
            <a href="{{ url('/login-register') }}" class="back-btn"><img src="{{ URL::to('/') }}/images/icons/back-arrow-black.svg" alt="Back to last page button"></a>

            <header><h1>LOGIN</h1></header>
            
            <div class="input-elements">
                <div class="form-element">
                    <input id="email" type="email" class="@error('email') form-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Email">

                    @error('email')
                        <span class="form-invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="form-element">

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
</div>
@endsection

@section('pagespecificstyles')
<link href="{{ asset('css/auth.css') }}" rel="stylesheet">
@endsection
