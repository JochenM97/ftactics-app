@extends('layout', ['title' => ' | Login or register'])

@section('description', 'Log in or register to continue or start to make your own football tactics.')

@section('content')
<div class="gradient-background"></div>
<header class="logo-box">
    <div class="logo"></div>
</header>
<main class="auth-links">
    <a href="{{ url('/login') }}" class="auth-link login-link">LOGIN</a>
    <a href="{{ url('/register') }}" class="auth-link register-link">SIGN UP</a>
</main>

@endsection