@extends('layout')


@section('content')

<h1>My {{$foo}} thing</h1>

<ul>
@foreach($tasks as $task)
<li>{{$task}}</li>
@endforeach
</ul>

@endsection
