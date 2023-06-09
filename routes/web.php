<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {

    $string = 'Ciao sono';
    $name = 'Federico';
    $paragraf = 'e sono alle prime armi con Laravel!';

    return view('hello', compact('string', 'name', 'paragraf'));
});


Route::get('/header', function() {

    $navigations = [
        'contacts' => 'Chi siamo',
        'home' => 'Home',
        'menu' => 'Menu',
    ];


    return view('header', compact('navigations'));
});

