<?php

use App\Http\Controllers\PostController;
use App\Models\Post;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('home', [
        "title" => "Home"
    ]);
});

Route::get('/tentang', function () {
    return view('tentang', [
        "title" => "Tentang"
    ]);
});

Route::get('/renungan', [PostController::class, 'index']);

Route::get('/persembahan', function () {
    return view('persembahan', [
        "title" => "Persembahan"
    ]);
});

Route::get('/kontak', function () {
    return view('kontak', [
        "title" => "Kontak"
    ]);
});

Route::get('/login', function () {
    return view('login', [
        "title" => "Login"
    ]);
});

// Halaman Single Post

Route::get('posts/{slug}', [PostController::class, 'show']);

