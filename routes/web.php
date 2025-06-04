<?php

use Illuminate\Support\Facades\Route;

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/', function () {
    return view('index');
});

Route::get('home', function () {
    return view('pagina_inicio.home');
});

Route::get('dashboard', function () {
    return view('pagina_inicio.dashboard');
});