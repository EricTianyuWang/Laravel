@extends('layout')


@section('content')

<h1>Yummy Food Restaurant</h1>

<ul>
@foreach($tasks as $task)
<li>{{$task}}</li>
@endforeach
</ul>

@endsection
