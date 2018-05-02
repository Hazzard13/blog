@extends('layouts/base')

@section('title')
{{ $article->name }}
@endsection

@section('bedy')
	<div class="container">
		@yield('content')
	</div>
@endsection
