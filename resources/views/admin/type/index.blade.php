@extends('layouts.layout')

@section('content')
<h1>Type</h1>

@foreach ($catalogo as $progetti)

<h3>Project Name: {{$progetti->name}}</h3>
<p>Description: {{$progetti->description}}</p>
<p>creation date: {{$progetti->icon}}</p>


@endforeach
@endsection
