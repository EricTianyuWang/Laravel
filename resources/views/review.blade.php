
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

    <form action="{{url('review')}}" method="post" class="white">
    @csrf
        <label>Your First Name:</label>
        <input type="text" name="first_name">
        <br>
        <label>Your Review:</label>
        <br>
        <textarea name="message" rows="10" cols="30"></textarea>
        <div class="center">
            <input type="submit" name="submit" value="Submit" class="btn brand z-depth-0">
        </div>
    </form>
   <h3>View Reviews</h3>
   <body>
      <table>
         <tr>
            <td>Time</td>
            <td>Name</td>
            <td>Review</td>
         </tr>
         @foreach ($reviews as $review)
         <tr>
            <td>{{$review->created_at}}
            <td>{{ $review->first_name }}</td>
            <td>{{ $review->message }}</td>
         </tr>
         @endforeach
      </table>
   </body>
</section>

@endsection
