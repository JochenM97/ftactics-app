@extends('layout', ['title' => ''])

@section('content')

<div class="auth-links">
    <a href="{{ url('/login') }}" class="auth-link login-link">LOGIN</a>
    <a href="{{ url('/register') }}" class="auth-link register-link">SIGN UP</a>
</div>

@endsection

@section('pagespecificstyles')
<link href="{{ asset('css/auth.css') }}" rel="stylesheet">
@endsection