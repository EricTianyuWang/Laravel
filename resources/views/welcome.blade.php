@extends('layout')


@section('content')

<link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet'>

<style>
h1 {
    font-family: 'Book Antiqua','Montserrat';
    font-size: 100px;
    text-align: center
}
.center {
  display: block;
  margin: auto;
}
p{
    text-align: center;
    font-size:45px;
    font-family: 'Candara', 'Calibri', 'Gill Sans'
}
</style>

<h1>Rory's Coffee and Coding</h1>
<p>230 Hillside Lane, Charlottesville, VA 22903</p>
<img src="rory.png" class="center" alt="coffee shop">

@endsection
