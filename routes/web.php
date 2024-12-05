<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', [ "title" => "home" ]);
});

Route::get('/demo', function () {
    return view('demo', [ "title" => "demo" ]);
});

Route::get('/colors', function () {
    return view('color');
});