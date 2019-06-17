@extends('layout', ['title' => ' | Make tactic'])

@section('description', 'Make your own tactics with an easy to use, interactive and responsive editor.')

@section('konva-viewport', 'user-scalable=no,')

@section('content')

<div id="save-screen">
	<div id="save-screen-content">
		<img id="close-save-screen" src="{{ URL::to('/') }}/images/icons/cancel.svg" alt="Close save screen button">
		<form method="POST" action="{{ route('save-tactic') }}">
        	@csrf
			<div class="form-content">
	        	<label for="name">Tactic name</label>
				<input id="name" type="text" class="@error('name') form-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" placeholder="Counter Attack">
				<input id="data" type="hidden" name="data" value="">
        		<button type="submit" id="submit-tactic" class="submit-button">SAVE TACTIC</button>
        	</div>
        </form>
	</div>
</div>

<nav class="navigation">
	<div class="back-box">
		<a href="{{ url('/') }}"><img src="{{ URL::to('/') }}/images/icons/back-arrow.svg" alt="Back to last page button"></a>
	</div>
	<header>
		<h1>MAKE TACTICS</h1>
	</header>
	<div class="save-box">
		<button id="save-btn">SAVE</button>
	</div>
</nav>
<div class="keyframe-editor">
	<span id="remove-frame"></span>
	<div id="keyframes">
		<span id="frame_layer_1" class="frame selected-frame">1</span>
	</div>
	<span id="add-frame"></span>
</div>

<div id="stage-parent">
	<div id="container"></div>
</div>

<div id="toolbar">
	<span id="blue-player"><img src="{{ URL::to('/') }}/images/icons/add.svg" alt="Add blue player icon"><span class="amount" id="available-blue-players">5</span></span>
	<span id="ball"><img src="{{ URL::to('/') }}/images/icons/add.svg" alt="Add ball icon"><span class="amount" id="available-footballs">1</span></span>
	<span id="red-player"><img src="{{ URL::to('/') }}/images/icons/add.svg" alt="Add red player icon"><span class="amount" id="available-red-players">5</span></span>
	<span id="delete"></span>
</div>

@endsection

@section('pagespecificstyles')
<style>
	body {
		overscroll-behavior: none;
	}
</style>
@endsection

@section('pagespecificscripts')
<script type="text/javascript" src="{{ asset('js/make-tactic.js') }}"></script>
@endsection