@extends('layouts.layout')

@section('content')
<h1>Type</h1>

@foreach ($catalogo as $progetti)

<h3 class="mt-4"> <a href="{{route("admin.type.show",$type)}}">Nome Type {{ $type->name}}</a></h3>
<p>Description: {{$progetti->description}}</p>
<p>creation date: {{$progetti->icon}}</p>

<a
@endforeach
@endsection
