

@extends('layout')


@section('title')
About Us
@endsection

@section('content')

<style>
h1 {
    font-family: 'Book Antiqua','Montserrat';
    font-size: 40px;
    text-align: center
}
.center {
  display: block;
  margin: auto;
}
p{
    text-align: center;
    font-size: 20px;
    font-family: 'Candara', 'Calibri', 'Gill Sans'
}
</style>

<link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet'>


<h1>Rory's Coffee and Coding</h1>
<p>Thank you for visiting out site. We are located at <b>230 Hillside Lane, Charlottesville, VA 22903</b>.</p>

<!-- <body style="background-image:url('https://images.pexels.com/photos/2159065/pexels-photo-2159065.jpeg?auto=format%2Ccompress&cs=tinysrgb&dpr=2&h=650&w=940');">
    <p>Apples</p>
</body> -->

<img src="coffee1.jpg" class="center" alt="coffee shop">
<p>Come on down to <b>Rory's Coffee and Coding</b> to enjoy the best of both worlds: <b>COFFEE and CODING</b>!</p>
<img src="coffee2.jpg" class="center" alt="coffee shop">
<p>We offer a wide selection of delicious coffee flavors served by baristas who all are experts in various coding languages.</p>
<img src="coffee3.jpg" class="center" alt="coffee shop">
<p>Stay around a bit to enjoy free wifi, ample charging stations, yummy coffee, and the best company in town!</p>
<img src="coffee4.jpg" class="center" alt="coffee shop">


@endsection
