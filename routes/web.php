<?php

use Illuminate\Support\Facades\Route;


// ? JUST INTRODUCTION 
Route::get('/', function () {
    return view('intro');
});

// ? LOG IN
Route::get('/login', function () {
    return view('login');
});

// ? REGISTER 
Route::get('/signup', function () {
    return view('signup');
});

Route::get('/dashboard', function () {
    return view('dashboard');
});



