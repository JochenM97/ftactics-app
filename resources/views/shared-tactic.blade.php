@extends('layout', ['title' => ' | View tactic '.$tactic->name])

@section('description', "Watch a shared tactic made by one of your teammates.")

@section('content')
<nav class="navigation">
	<header>
		<h1>{{ $tactic->name }}</h1>
	</header>
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