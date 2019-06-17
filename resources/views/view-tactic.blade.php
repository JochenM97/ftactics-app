@extends('layout', ['title' => ' | View tactic '.$tactic->name])

@section('description', "Watch your own tactic to show your teammates or remove it if you don't need it anymore.")

@section('content')
@if($tactic->user)
<div id="settings-screen">
	<div id="settings-screen-content">
		<img id="close-settings-screen" src="{{ URL::to('/') }}/images/icons/cancel.svg" alt="Close save screen button">
		<div class="settings-actions">
			<h3>Share link</h3>
			<div class="copy-box">
				<input id="copy-link" type="url" value='{{ URL::to("/")."/shared-tactics/{$tactic->id}" }}' readonly="readonly">
				<button onclick="copyText()">COPY</button>
			</div>
			@php
				$iOS = false;
				$Android = false;

				if(stripos($_SERVER['HTTP_USER_AGENT'],"iPod")){
					$iOS = true;
				}
				if(stripos($_SERVER['HTTP_USER_AGENT'],"iPhone")){
					$iOS = true;
				}
				if(stripos($_SERVER['HTTP_USER_AGENT'],"iPad")){
					$iOS = true;
				}

				if(stripos($_SERVER['HTTP_USER_AGENT'],"Android")){
					$Android = true;
				}
				
			@endphp
			@if($iOS || $Android)
			<span class="or">OR</span>
			<a class="messenger-link" href='fb-messenger://share/?link= {{ URL::to("/")."/shared-tactics/{$tactic->id}" }}&app_id=1167945663386898'>Send In Messenger</a>
			@endif

			<a href='{{ url("/delete-tactic/{$tactic->id}") }}' id="delete-btn">DELETE</a>
		</div>
	</div>
</div>
@endif

<nav class="navigation">
	<div class="back-box">
		<a href="{{ url()->previous() }}"><img src="{{ URL::to('/') }}/images/icons/back-arrow.svg" alt="Back to last page button"></a>
	</div>
	<header>
		<h1>{{ $tactic->name }}</h1>
	</header>
	@if($tactic->user)
	<div class="settings-box">
		<img id="settings-btn" src="{{ URL::to('/') }}/images/icons/settings.svg" alt="Settings button">
	</div>
	@endif
</nav>

<div id="stage-parent">
	<div id="field"></div>
</div>

<div class="animation-toolbar">
	<button id="play-animation">START</button>
	<button id="reset-animation">RESET</button>
</div>

<script>
	var data = {!! json_encode($tactic->data) !!};
</script>
@endsection

@section('pagespecificscripts')
<script type="text/javascript" src="{{ asset('js/view-tactic.js') }}"></script>
@endsection