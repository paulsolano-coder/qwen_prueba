<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/legends-pachamama', function () {
    return view('legends-pachamama');
});
