@extends('layouts.layout')

@section('content')
	<h2>Single Type</h2>

<div class="card_container">
    <div class="card">
	<<ul>
		<li class="mt-4">Nome progetto: {{ $project['name'] }}</li>
		<li>Descrizione: {{ $project['description'] }}</li>
		<li>Icona: {{ $project['icon'] }}</li>
	</ul>
    </div>
</div>

@endsection
