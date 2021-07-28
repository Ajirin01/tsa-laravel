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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function(){
    return view('about');
})->name('about');

Route::get('/admission', function(){
    return view('admission');
})->name('admission');

Route::get('/chapel', function(){
    return view('chapel');
})->name('chapel');

Route::get('/events', function(){
    return view('events');
})->name('events');

Route::get('/gallery', function(){
    return view('gallery');
})->name('gallery');