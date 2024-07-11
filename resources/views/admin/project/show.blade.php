@extends('layouts.layout')

@section('content')
	<h2>Single Project</h2>
	< <ul>
		<li class="mt-4">Nome progetto: {{ $project['name'] }}</li>
		<li>Descrizione: {{ $project['description'] }}</li>
		<li>Data di creazione: {{ $project['creation_date'] }}</li>
	</ul>

@endsection
