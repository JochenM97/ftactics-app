@extends('layout')

@section('content')


<nav>
	<div class="back-box">
		<a href="{{ url('/') }}"><img src="{{ URL::to('/') }}/images/back-arrow.svg" alt="Back to last page button"></a>
	</div>
	<header>
		<h1>MAKE TACTICS</h1>
	</header>
</nav>

@php $i = 0 @endphp

<div class="tactics-overview container">

@foreach($customtactics as $customtactic)

	@php
	$i += 1
	@endphp

	<div class="tactic-box">
		<span class="number">{{ $i }}</span>
		<div class="name-box">{{ $customtactic->name }}</div>
	</div>

@endforeach

</div>

@endsection

@section('pagespecificstyles')
<link href="{{ asset('css/custom-tactics.css') }}" rel="stylesheet">
@endsection