<?php

use App\Models\User;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\BannerController;
use App\Http\Controllers\JadwalController;
use App\Http\Controllers\KontakController;
use App\Http\Controllers\PendetaController;
use App\Http\Controllers\KegiatanController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardPostController;

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

Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/register', [RegisterController::class, 'create'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']);

Route::get('posts/{post:slug}', [PostController::class, 'show']);


Route::get('/authors/{author:username}', function(User $author){
    return view ('renungan', [
        'title' => "Post By Author : $author->name",
        'posts' => $author->posts->load('author')
    ]);
});

Route::get('/dashboard' , function(){
    return view('dashboard.index');
})->middleware('admin');

Route::get('/dashboard/posts/checkSlug', [DashboardPostController::class, 'checkSlug'])->middleware(['auth', 'admin']);
Route::resource('/dashboard/posts', DashboardPostController::class)->middleware(['auth', 'admin']);

Route::get('/dashboard/kontak', [KontakController::class, 'index'])->middleware('admin');
Route::post('/dashboard/kontak', [KontakController::class, 'store']);
Route::delete('/dashboard/kontak/{kontak}', [KontakController::class, 'destroy'])->name('kontak.destroy')->middleware('admin');

Route::resource('dashboard/banner', BannerController::class)->middleware('admin');
Route::resource('dashboard/jadwal', JadwalController::class)->middleware('admin');
Route::resource('dashboard/kegiatan', KegiatanController::class)->middleware('admin');
Route::resource('dashboard/pendeta', PendetaController::class)->middleware('admin')->parameters([
    'pendeta' => 'daftarPendeta']);
Route::get('/', [HomeController::class, 'index']);

Route::prefix('dashboard')->middleware(['auth', 'admin'])->group(function () {

    Route::patch('user/{user}/toggle-admin', [UserController::class, 'toggleAdmin'])->name('user.toggleAdmin');


    Route::resource('user', UserController::class);
});
