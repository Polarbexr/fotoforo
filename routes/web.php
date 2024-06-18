<?php

use App\Http\Controllers\fotos;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

Route::get('/', function () {
    return view('home');
});

Route::get('/welcome', function () {
    return view('welcome');
});


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('welcome');

Route::resource('foto', App\Http\Controllers\fotos::class)
    ->except(['show']) 
    ->middleware('auth');


    Route::get('/delete-editorial/{editorial_id}', array(
        'as' => 'editorialDelete',
        'middleware' => 'auth',
        'uses' => '\App\Http\Controllers\fotos@deleteEditorial'
     ));