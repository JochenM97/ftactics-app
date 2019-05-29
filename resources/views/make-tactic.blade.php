@extends('layout')

@section('make-tactic')

<nav>
	<span id="back-btn"></span>
	<a href="{{ url('/') }}"><img src="{{ URL::to('/') }}/images/back-arrow.svg" alt="Back to last page button"></a>
	<h1>MAKE TACTICS</h1>
	<button id="save-btn">SAVE</button>
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
	<span id="blue-player"><img src="{{ URL::to('/') }}/images/add.svg" alt="add-button"><span class="amount" id="available-blue-players">5</span></span>
	<span id="ball"><img src="{{ URL::to('/') }}/images/add.svg" alt="add-button"><span class="amount" id="available-footballs">1</span></span>
	<span id="red-player"><img src="{{ URL::to('/') }}/images/add.svg" alt="add-button"><span class="amount" id="available-red-players">5</span></span>
	<span id="delete"></span>
</div>

@endsection

@section('pagespecificstyles')
<link href="{{ asset('css/make-tactic.css') }}" rel="stylesheet">
@endsection

@section('pagespecificscripts')
<script type="text/javascript" src="{{ asset('js/make-tactic.js') }}"></script>
@endsection