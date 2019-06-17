<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
    	<!-- Global site tag (gtag.js) - Google Analytics -->
		<script async src="https://www.googletagmanager.com/gtag/js?id=UA-132804487-2"></script>
		<script>
		  window.dataLayer = window.dataLayer || [];
		  function gtag(){dataLayer.push(arguments);}
		  gtag('js', new Date());

		  gtag('config', 'UA-132804487-2');
		</script>
	    <meta name="viewport" content="@yield('konva-viewport')width=device-width,initial-scale=1.0">
	  	<meta name="theme-color" content="#001843">
	    <meta charset="UTF-8">
	    <meta http-equiv="ScreenOrientation" content="autoRotate:disabled">
	    <meta name="csrf-token" content="{{ csrf_token() }}">
	    <meta name="description" content="@yield('description')">
	    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('apple-touch-icon.png') }}">
		<link rel="icon" type="image/png" sizes="32x32" href="{{ asset('favicon-32x32.png') }}">
		<link rel="icon" type="image/png" sizes="16x16" href="{{ asset('favicon-16x16.png') }}">
		<link rel="manifest" href="{{ asset('site.webmanifest') }}">
		<link rel="mask-icon" href="{{ asset('safari-pinned-tab.svg') }}" color="#5bbad5">

	    <title>{{ config('app.name') }}{{ $title }}</title>

	    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
	    @yield('pagespecificstyles')
    </head>
    <body>
    	<!--<div id="orientation-warning"></div>-->
    	@yield('content')
        @yield('pagespecificscripts')
    </body>
</html>