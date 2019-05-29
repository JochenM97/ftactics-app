@extends('layout')

@section('content')
<div class="form-wrapper">
    @if (session('status'))
        <div class="alert alert-success" role="alert">
            {{ session('status') }}
        </div>
    @endif

    <form method="POST" action="{{ route('password.email') }}">
        @csrf
        
        <div class="form-content">
            <a href="{{ url()->previous() }}" class="back-btn"><img src="{{ URL::to('/') }}/images/back-arrow-black.svg" alt="Back to last page button"></a>

            <header><h1>RESET PASSWORD</h1></header>

            <div class="input-elements">
                <div class="form-element">
                    <input id="email" type="email" class="@error('email') form-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Email">

                    @error('email')
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