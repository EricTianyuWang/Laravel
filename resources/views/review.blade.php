<?php 

if(isset($_GET['submit'])){
    echo $_GET['email'];
    echo $_GET['name'];
    echo $_GET['message'];
}

?>


@extends('layout')


@section('title','Contact Us')

@section('content')
<link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet'>
<style>
h1 {
    font-family: 'Montserrat';font-size: 36px;
}
</style>

<h1>Yummy Food Restaurant</h1>


<section class="container grey-text">
    <h4 class="center">Leave a Message!</h4>
    <form action="/about" method="GET" class="white">
        <label>Your Name:</label>
        <input type="text" name="name">
        <br>
        <label>Your Email:</label>
        <input type="text" name="email">
        <br>
        <label>Your Review:</label>
        <br>
        <textarea name="message" rows="10" cols="30"></textarea>
        <div class="center">
            <input type="submit" name="submit" value="Submit" class="btn brand z-depth-0">
        </div>
    </form>
</section>

@endsection
