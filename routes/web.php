<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('home');
});

Route::get('/tentang', function () {
    return view('tentang');
});

Route::get('/renungan', function () {
    return view('renungan');
});

Route::get('/persembahan', function () {
    return view('persembahan');
});

Route::get('/kontak', function () {
    return view('kontak');
});

Route::get('/login', function () {
    return view('login');
});


