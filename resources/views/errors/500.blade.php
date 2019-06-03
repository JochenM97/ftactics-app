@extends('layout', ['title' => ' - Server error'])

@section('content')

<div class="error">
	<span class="code">500</span>
	<span class="message">Server error. Please try again later.</span>
</div>

@endsection

@section('pagespecificstyles')
<link href="{{ asset('css/errors.css') }}" rel="stylesheet">
@endsection
