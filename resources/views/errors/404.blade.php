@extends('layout', ['title' => ' - Page not found'])

@section('content')

<div class="error">
	<span class="code">404</span>
	<span class="message">Page not found</span>
	<a href="{{ url()->previous() }}" class="link-back">GO BACK</a>
</div>

@endsection

@section('pagespecificstyles')
<link href="{{ asset('css/errors.css') }}" rel="stylesheet">
@endsection