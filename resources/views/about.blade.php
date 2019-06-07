<?php 

if(isset($_GET['submit'])){
    echo $_GET['email'];
    echo $_GET['name'];
    echo $_GET['message'];
}

?>

@extends('layout')


@section('title')
About Us
@endsection

@section('content')
<link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet'>
<style>
h1 {
    font-family: 'Montserrat';font-size: 36px;
}
</style>

<h1>Yummy Food Restaurant</h1>
<p>We are awesome</p>


<section class="container grey-text">
    <h4 class="center">Leave a Message!</h4>
    <form action="/about" method="GET" class="white">
        <label>Your Email:</label>
        <input type="text" name="email">
        <label>Your Name:</label>
        <input type="text" name="name">
        <label>Your Message:</label>
        <input type="text" name="message">
        <div class="center">
            <input type="submit" name="submit" value="submit" class="btn brand z-depth-0">
        </div>
    </form>
</section>
@endsection
