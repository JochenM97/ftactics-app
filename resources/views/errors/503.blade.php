@extends('layout', ['title' => ' - Service unavailable'])

@section('content')

<div class="error">
	<span class="code">503</span>
	<span class="message">The server is temporarily busy, try again later!</span>
</div>

@endsection

@section('pagespecificstyles')
<link href="{{ asset('css/errors.css') }}" rel="stylesheet">
@endsection
