@extends('layout', ['title' => ' | View tactic '.$tactic->name])

@section('description', "Watch your own tactic to show your teammates or remove it if you don't need it anymore.")

@section('content')
<nav>
	<div class="back-box">
		<a href="{{ url('/saved-tactics') }}"><img src="{{ URL::to('/') }}/images/icons/back-arrow.svg" alt="Back to last page button"></a>
	</div>
	<header>
		<h1>{{ $tactic->name }}</h1>
	</header>
	<div class="delete-box">
		<a href='{{ url("/delete-tactic/{$tactic->id}") }}' id="delete-btn">DELETE</a>
	</div>
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