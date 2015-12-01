@extends('app')

@section('title')
{{$partecipant->name, surname}}

@stop

@section('content')
<h1>
	<ul>
		<li>{{$partecipant->name}}</li>
		<li>{{$partecipant->surname}}</li>
	</ul>
</h1>
<ul>
	<li>{{$partecipant->id}}</li>
	<li>{{$partecipant->email}}</li>
	<li>{{$partecipant->number}}</li>
</ul>
@stop