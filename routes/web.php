<?php

use Illuminate\Support\Facades\Route;

Route::match(['get', 'post'], '/match', function () {
    return 'match';
});

Route::any('/any', function (){
    return 'any';
});

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
