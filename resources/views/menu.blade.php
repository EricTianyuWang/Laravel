@extends('layout') @section('title','Contact Us') @section('content')
<link
    href="https://fonts.googleapis.com/css?family=Montserrat"
    rel="stylesheet"
/>
<style>
    h1 {
        font-family: "Book Antiqua", "Montserrat";
        font-size: 36px;
        margin: 20px 0px;
    }
    .menu {
        background: transparent;
        display: flex;
        flex-direction: column;
        font-family: "Candara", "Calibri", "Gill Sans";
    }
    h3 {
        font-family: "Candara", "Calibri", "Gill Sans";
        font-size: 30px;
        margin: 0;
    }
    p {
        text-align: left;
        font-size: 30px;
        margin: 10px 0px;
        font-family: "Candara", "Calibri", "Gill Sans";
    }
    div.menu {
        display: flex;
        width: 80%;
        flex-direction: column;
        margin: auto;
    }
</style>
<div class="menu">
    <h1>Rory's Menu</h1>
    <i>Sizes: Small, Medium, Large, Jumbo (No Sleep for Me)</i>
    <br />
    <h3>Coffee</h3>
    <p>Drip</p>
    <ul class="menu">
        <li>Colombian "C is for Coder" Dark Roast</li>
        <li>Brazilian "Sleep is for the Weak" Medium Roast</li>
        <li>Nigerian "Rory's Delight" Light Roast</li>
    </ul>
    <p>Espresso</p>
    <ul class="menu">
        <li>Latte</li>
        <li>Cappuccino</li>
        <li>Macchiato</li>
        <li>Americano</li>
        <li>Cafe Mocha</li>
        <li>Affogato</li>
    </ul>
    <br />
    <h3>Food</h3>
    <p>Breakfast (until noon)</p>
    <ul class="menu">
        <li>Bagel and Lox</li>
        <li>Avocado Toast</li>
        <li>Chicken and Waffles</li>
        <li>Eggs Your Way!</li>
    </ul>
    <p>Lunch (after 11 AM)</p>
    <ul class="menu">
        <li>Brock's BLT</li>
        <li>Eric's Enchilada</li>
        <li>Kristen's Kale and Quinoa Salad</li>
        <li>Camille's Crispy Chicken Sandwich</li>
    </ul>
    <p>Sides (ALL DAY woo!)</p>
    <ul class="menu">
        <li>Fries</li>
        <li>Homefries</li>
        <li>Fruit Cup</li>
        <li>Toast with Jam and Butter</li>
    </ul>
</div>
@endsection
