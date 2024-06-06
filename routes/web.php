<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/talinrice', function () {
    return view('home.index');
})->name('home.index');
