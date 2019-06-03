@extends('layout', ['title' => ' | View tactic '.$customtactic->name])

@section('description', "Watch your own tactic to show your teammates or remove it if you don't need it anymore.")

@section('content')
<nav>
	<div class="back-box">
		<a href="{{ url('/saved-tactics') }}"><img src="{{ URL::to('/') }}/images/icons/back-arrow.svg" alt="Back to last page button"></a>
	</div>
	<header>
		<h1>{{ $customtactic->name }}</h1>
	</header>
	<div class="delete-box">
		<a href='{{ url("/delete-tactic/{$customtactic->id}") }}' id="delete-btn">DELETE</a>
	</div>
</nav>

<div id="stage-parent">
	<div id="field"></div>
</div>

<script>
	var data = {!! json_encode($customtactic->data) !!};
</script>
@endsection

@section('pagespecificstyles')
<link href="{{ asset('css/view-tactic.css') }}" rel="stylesheet">
@endsection

@section('pagespecificscripts')
<script type="text/javascript" src="{{ asset('js/view-tactic.js') }}"></script>
@endsection