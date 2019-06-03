@extends('layout', ['title' => ' - Profile'])

@section('content')

<nav>
    <div class="back-box">
        <a href="{{ url('/saved-tactics') }}"><img src="{{ URL::to('/') }}/images/back-arrow.svg" alt="Back to last page button"></a>
    </div>
    <header>
        <h1>PROFILE</h1>
    </header>
    <div class="delete-box">
        <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" id="delete-btn">LOG OUT</a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">@csrf</form>
    </div>
</nav>

<div class="form-wrapper">
    <form method="POST" action="{{ url('/save-profile', $user->id) }}">
        @csrf
        
        <div class="form-content">
            <header><h1>EDIT PROFILE</h1></header>
            
            <div class="input-elements">
            	<div class="form-element">
                    <input id="name" type="text" class="@error('name') form-invalid @enderror" name="name" value="{{ $user->name }}" required autocomplete="name" autofocus placeholder="Name">

                    @error('name')
                        <span class="form-invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="form-element">
                    <input id="email" type="email" class="@error('email') form-invalid @enderror" name="email" value="{{ $user->email }}" required autocomplete="email" autofocus placeholder="Email">

                    @error('email')
                        <span class="form-invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>
        </div>

        <button type="submit" class="submit-button">SAVE</button>
    </form>
</div>

@endsection

@section('pagespecificstyles')
<link href="{{ asset('css/profile.css') }}" rel="stylesheet">
@endsection