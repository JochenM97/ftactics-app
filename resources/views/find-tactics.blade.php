@extends('layout', ['title' => ' | Find tactics'])

@section('description', 'Find and discover awesome football and futsal tactics. Get inspired by what you can create with Ftactics.')

@section('content')


<div class="custom-tactic-nav">
	<div class="back-box">
		<a href="{{ url('/') }}"><img src="{{ URL::to('/') }}/images/icons/back-arrow.svg" alt="Back to last page button"></a>
	</div>
	<header>
		<h1>FIND TACTICS</h1>
	</header>
</div>

@php $i = 0 @endphp

<div class="tactics-overview container">

@foreach($standardtactics as $standardtactic)

	@php
	$i += 1
	@endphp

	<a href="{{ url('/find-tactics', $standardtactic->id) }}" class="tactic-box">
		<span class="number">{{ $i }}</span>
		<span class="number-shadow"></span>
		<div class="name-box">{{ $standardtactic->name }}</div>
		<img src="{{ URL::to('/') }}/images/icons/back-arrow.svg" alt="Show tactic arrow" class="tactic-arrow">
	</a>

@endforeach

</div>

@endsection