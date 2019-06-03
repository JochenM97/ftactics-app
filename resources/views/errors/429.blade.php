@extends('layout', ['title' => ' - Too many requests'])

@section('content')

<div class="error">
	<span class="code">429</span>
	<span class="message">Too many requests</span>
	<a href="{{ url()->previous() }}" class="link-back">GO BACK</a>
</div>

@endsection

@section('pagespecificstyles')
<link href="{{ asset('css/errors.css') }}" rel="stylesheet">
@endsection
