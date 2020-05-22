@extends('layouts.app')
@section('content')

<div align="center">
	@if($mensaje)
	<h1>{{$mensaje['asunto']}}</h1>
	<p>{{$mensaje['mensaje']}}</p>
	@endif
</div>
@endsection