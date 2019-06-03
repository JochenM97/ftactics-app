@extends('layout', ['title' => ' | Password reset'])

@section('description', 'Reset your password with your email address.')

@section('content')
<div class="logo-box">
    <div class="logo"></div>
</div>
<div class="form-wrapper">
    <form method="POST" action="{{ route('password.email') }}">
        @csrf
        
        <div class="form-content">
            <a href="{{ url()->previous() }}" class="back-btn"><img src="{{ URL::to('/') }}/images/icons/back-arrow-black.svg" alt="Back to last page button"></a>

            <header><h1>RESET PASSWORD</h1></header>

            <div class="input-elements">
                <div class="form-element">
                    <input id="email" type="email" class="@error('email') form-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Email">

                    @error('email')
                        <span class="form-invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror

                    @if (session('status'))
                        <div class="form-invalid-feedback" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
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