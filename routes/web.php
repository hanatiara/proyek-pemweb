<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('view.home');
});
Route::get('/test', function () {
    return view('view.test');
});
