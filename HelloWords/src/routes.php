<?php
use Illuminate\Support\Facades\Route;
use HelloWords\Hello;

Route::get('/user/{name}', function ($name) {
    $hello  = new Hello;
    return $hello->user($name);
});
