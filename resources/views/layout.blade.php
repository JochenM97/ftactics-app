<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
	    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
	  	<meta name="theme-color" content="#001843">
	    <meta charset="UTF-8">
	    <meta http-equiv="ScreenOrientation" content="autoRotate:disabled">
	    <meta name="csrf-token" content="{{ csrf_token() }}">
	    <meta name="description" content="">
	    <link rel="shortcut icon" href="">

	    <title>{{ config('app.name') }}</title>

	    @yield('pagespecificstyles')
    </head>
    <body>
    	@yield('make-tactic')
    	@yield('home')
    	@yield('content')

        @yield('pagespecificscripts')
    </body>
</html>