@extends('layout', ['title' => ''])

@section('description', 'Find, make and save your own football and futsal tactics.')

@section('home')

<div class="container">
    <header>
        <div class="logo"></div>
    </header>

    <nav>
        <div class="nav-box">
            <div class="find">
                <a href="" class="home-link">
                    <div class="action-icon">
                        <div class="outer-circle">
                            <div class="inner-circle"></div>
                        </div>
                    </div>
                    <div class="action-text">
                        <span>FIND</span>
                        <span>TACTICS</span>
                    </div>
                </a>
            </div>
        </div>
        <div class="nav-box">
            <div class="make">
                <a href="{{ url('/make-tactic') }}" class="home-link">
                    <div class="action-icon">
                        <div class="outer-circle">
                            <div class="inner-circle"></div>
                        </div>
                    </div>
                    <div class="action-text">
                        <span>MAKE</span>
                        <span>TACTICS</span>
                    </div>
                </a>
            </div>
        </div>
        <div class="nav-box">
            <div class="saved">
                <a href="{{ url('/saved-tactics') }}" class="home-link">
                    <div class="action-icon">
                        <div class="outer-circle">
                            <div class="inner-circle"></div>
                        </div>
                    </div>
                    <div class="action-text">
                        <span>SAVED</span>
                        <span>TACTICS</span>
                    </div>
                </a>
            </div>
        </div>
    </nav>

    <div class="profile">
        <div class="profile-content"><a href="{{ url('/profile') }}" class="home-link"><img src="images/icons/profile-icon.svg" alt="My profile icon">MY PROFILE</a></div>
    </div>
</div>

@endsection

@section('pagespecificstyles')
<link href="{{ asset('css/home.css') }}" rel="stylesheet">
@endsection
