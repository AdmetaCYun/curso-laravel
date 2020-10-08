<?php

use Illuminate\Support\Facades\Route;

Route::post('/register', function () {
    return '';
});

Route::get('/empresa', function () {
    return view('Sobre a empresa');
});

Route::get('/contato', function () {
    return view('site.contact');
});

Route::get('/', function () {
    return view('welcome');
});
