@extends('layout', ['title' => ' - Saved tactics'])

@section('content')


<nav>
	<div class="back-box">
		<a href="{{ url('/') }}"><img src="{{ URL::to('/') }}/images/back-arrow.svg" alt="Back to last page button"></a>
	</div>
	<header>
		<h1>SAVED TACTICS</h1>
	</header>
</nav>

@php $i = 0 @endphp

<div class="tactics-overview container">

@foreach($customtactics as $customtactic)

	@php
	$i += 1
	@endphp

	<a href="{{ url('/saved-tactics', $customtactic->id) }}" class="tactic-box">
		<span class="number">{{ $i }}</span>
		<span class="number-shadow"></span>
		<div class="name-box">{{ $customtactic->name }}</div>
		<img src="{{ URL::to('/') }}/images/back-arrow.svg" alt="Show tactic arrow" class="tactic-arrow">
	</a>

@endforeach

</div>

@endsection

@section('pagespecificstyles')
<link href="{{ asset('css/custom-tactics.css') }}" rel="stylesheet">
@endsection