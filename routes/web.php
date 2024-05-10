<?php

use Illuminate\Support\Facades\Route;
use HelloWords\Hello;
Route::get('/', function () {
    return view('welcome');
});
Route::get('user/{name}', function ($name) {
    $hello  = new Hello;
    dd($hello->user($name));
});
