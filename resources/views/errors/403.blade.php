@extends('layout', ['title' => ' - Forbidden'])

@section('content')

<div class="error">
	<span class="code">403</span>
	<span class="message">Forbidden</span>
	<a href="{{ url()->previous() }}" class="link-back">GO BACK</a>
</div>

@endsection

@section('pagespecificstyles')
<link href="{{ asset('css/errors.css') }}" rel="stylesheet">
@endsection