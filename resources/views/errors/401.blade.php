@extends('layout', ['title' => ' - Unauthorized'])

@section('content')

<div class="error">
	<span class="code">401</span>
	<span class="message">Unauthorized</span>
	<a href="{{ url()->previous() }}" class="link-back">GO BACK</a>
</div>

@endsection

@section('pagespecificstyles')
<link href="{{ asset('css/errors.css') }}" rel="stylesheet">
@endsection