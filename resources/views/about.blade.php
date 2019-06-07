@extends('layout') @section('title') About Us @endsection @section('content')

<style>
    h1 {
        font-family: "Book Antiqua", "Montserrat";
        font-size: 40px;
        text-align: center;
    }
    .center {
        display: block;
        margin: auto;
    }
    p {
        text-align: center;
        font-size: 20px;
        font-family: "Candara", "Calibri", "Gill Sans";
    }
    .grid-container {
        display: grid;
        grid-template-columns: auto auto;
        justify-content: space-around;
        margin: auto;
        grid-column-gap: 20px;
    }
    .grid-item-picture {
        align-content: space-around;
    }
    .grid-item-text {
        padding: 40px 0px;
    }
</style>

<link
    href="https://fonts.googleapis.com/css?family=Montserrat"
    rel="stylesheet"
/>

<h1>Rory's Coffee and Coding</h1>
<p>
    Thank you for visiting out site. We are located at
    <b>230 Hillside Lane, Charlottesville, VA 22903</b>.
</p>

<div class="grid-container">
    <div class="grid-item-picture">
        <img src="coffee1.jpg" class="center" alt="coffee shop" />
    </div>
    <div class="grid-item-text">
        <p>
            Come on down to <b>Rory's Coffee and Coding</b> to enjoy the best of
            both worlds: <b>COFFEE and CODING</b>!
        </p>
    </div>
    <div class="grid-item-text">
        <p>
            We offer a wide selection of delicious coffee flavors served by
            baristas who all are <b>experts in numerous coding languages</b>.
        </p>
    </div>
    <div class="grid-item-picture">
        <img src="coffee2.jpg" class="center" alt="coffee shop" />
    </div>
    <div class="grid-item-picture">
        <img src="coffee3.jpg" class="center" alt="coffee shop" />
    </div>
    <div class="grid-item-text">
        <p>
            Stay around a bit to enjoy <b>free wifi</b>, ample
            <b>charging stations</b>, yummy coffee, and the best company in
            town!
        </p>
    </div>

    @endsection
</div>
