@extends('layout', ['title' => ' | Saved tactics'])

@section('description', 'Rewatch your saved tactics in a smoothly animated way.')

@section('content')


<div class="custom-tactic-nav">
	<div class="back-box">
		<a href="{{ url('/') }}"><img src="{{ URL::to('/') }}/images/icons/back-arrow.svg" alt="Back to last page button"></a>
	</div>
	<header>
		<h1>SAVED TACTICS</h1>
	</header>
</div>

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
		<img src="{{ URL::to('/') }}/images/icons/back-arrow.svg" alt="Show tactic arrow" class="tactic-arrow">
	</a>

@endforeach

@if($i == 0)
<div class="no-tactics-box">
	<h2>No tactics yet?</h2>
	<span class="message">When you create new tactics they will appear here</span>
	<a href="{{ url('/make-tactic') }}">GET STARTED</a>
</div>
@endif

</div>

@endsection