<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
	    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
	  	<meta name="theme-color" content="#001843">
	    <meta charset="UTF-8">
	    <meta http-equiv="ScreenOrientation" content="autoRotate:disabled">
	    <meta name="csrf-token" content="{{ csrf_token() }}">
	    <meta name="description" content="@yield('description')">
	    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
		<link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
		<link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
		<link rel="manifest" href="/site.webmanifest">
		<link rel="mask-icon" href="/safari-pinned-tab.svg" color="#5bbad5">

	    <title>{{ config('app.name') }}{{ $title }}</title>

	    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    </head>
    <body>
    	@yield('make-tactic')
    	@yield('home')
    	@yield('content')

        @yield('pagespecificscripts')
    </body>
</html>