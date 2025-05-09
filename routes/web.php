<?php

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

Route::get('/renungan', function () {
    $renungan_posts = [
        [
            "title" => "Judul Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Penulis pertama",
            "body" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum eveniet eos magni unde officiis,
            quaerat ratione rem nobis repellendus voluptatum, modi quibusdam mollitia neque doloremque inventore qui,
            illum itaque dignissimos consectetur sunt debitis! Corporis ut odit, ab id facere sed voluptatum atque,
            necessitatibus suscipit corrupti, sunt totam est eligendi dolore ad culpa! Perferendis temporibus error,
            unde architecto, delectus quod eos deleniti at sint facere quos, dignissimos illum accusantium. Eaque
            natus aliquam labore repellat obcaecati iste ducimus animi voluptates ad aspernatur!"
        ],
        [
            "title" => "Judul kedua",
            "slug" => "judul-post-kedua",
            "author" => "Penulis kedua",
            "body" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum eveniet eos magni unde officiis,
            quaerat ratione rem nobis repellendus voluptatum, modi quibusdam mollitia neque doloremque inventore qui,
            illum itaque dignissimos consectetur sunt debitis! Corporis ut odit, ab id facere sed voluptatum atque,
            necessitatibus suscipit corrupti, sunt totam est eligendi dolore ad culpa! Perferendis temporibus error
            unde architecto, delectus quod eos deleniti at sint facere quos, dignissimos illum accusantium. Eaque,
            natus aliquam labore repellat obcaecati iste ducimus animi voluptates ad aspernatur!"
        ],
    ];
    
    return view('renungan', [
        "title" => "Renungan",
        "posts" => $renungan_posts
    ]);
});

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

Route::get('posts/{slug}', function($slug){
    $renungan_posts = [
        [
            "title" => "Judul Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Penulis pertama",
            "body" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum eveniet eos magni unde officiis,
            quaerat ratione rem nobis repellendus voluptatum, modi quibusdam mollitia neque doloremque inventore qui,
            illum itaque dignissimos consectetur sunt debitis! Corporis ut odit, ab id facere sed voluptatum atque,
            necessitatibus suscipit corrupti, sunt totam est eligendi dolore ad culpa! Perferendis temporibus error,
            unde architecto, delectus quod eos deleniti at sint facere quos, dignissimos illum accusantium. Eaque,
            natus aliquam labore repellat obcaecati iste ducimus animi voluptates ad aspernatur!"
        ],
        [
            "title" => "Judul kedua",
            "slug" => "judul-post-kedua",
            "author" => "Penulis kedua",
            "body" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum eveniet eos magni unde officiis,
            quaerat ratione rem nobis repellendus voluptatum, modi quibusdam mollitia neque doloremque inventore qui,
            illum itaque dignissimos consectetur sunt debitis! Corporis ut odit, ab id facere sed voluptatum atque,
            necessitatibus suscipit corrupti, sunt totam est eligendi dolore ad culpa! Perferendis temporibus error,
            unde architecto, delectus quod eos deleniti at sint facere quos, dignissimos illum accusantium. Eaque,
            natus aliquam labore repellat obcaecati iste ducimus animi voluptates ad aspernatur!"
        ],
    ];
    $new_post = [];
    foreach($renungan_posts as $post){
        if($post["slug"] === $slug){
            $new_post = $post;
        }
    }

    return view('post', [
        "title" => "Single Post",
        "post" => $new_post
    ]);
});
