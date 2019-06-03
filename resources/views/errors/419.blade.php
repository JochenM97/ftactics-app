@extends('layout', ['title' => ' - Page expired'])

@section('content')

<div class="error">
	<span class="code">419</span>
	<span class="message">Your session has expired. Please refresh and try again.</span>
	<a href="{{ url()->previous() }}" class="link-back">GO BACK</a>
</div>

@endsection

@section('pagespecificstyles')
<link href="{{ asset('css/errors.css') }}" rel="stylesheet">
@endsection