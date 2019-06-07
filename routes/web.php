<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

<<<<<<< HEAD
Route::get('/', 'PagesController@home');
Route::get('/contact', 'PagesController@contact');
Route::get('/about', 'PagesController@about');
=======
Route::get('/', function () {
    $tasks = [
        'Go to the store',
        'Go to the market',
        'Go to work',
        'Go to the concert',
    ];
    return view('welcome',[
        'tasks' => $tasks,
        'foo' => 'happy']);
});
>>>>>>> 69237768a4559c913bd8b3c79f0f630496fef06f

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
