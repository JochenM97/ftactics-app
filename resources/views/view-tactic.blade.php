@extends('layout', ['title' => ' | View tactic '.$tactic->name])

@section('description', "Watch your own tactic to show your teammates or remove it if you don't need it anymore.")

@section('content')
@if($tactic->user)
<div id="settings-screen">
	<div id="settings-screen-content">
		<img id="close-settings-screen" src="{{ URL::to('/') }}/images/icons/cancel.svg" alt="Close save screen button">
		<div class="delete-box">
			<a href='{{ url("/delete-tactic/{$tactic->id}") }}' id="delete-btn">DELETE</a>
			<h3><a href='{{ url("/shared-tactics/{$tactic->id}") }}'>{{ URL::to('/')."/shared-tactics/{$tactic->id}" }}
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

<script>
	var data = {!! json_encode($tactic->data) !!};
</script>
@endsection

@section('pagespecificscripts')
<script type="text/javascript" src="{{ asset('js/view-tactic.js') }}"></script>
@endsection