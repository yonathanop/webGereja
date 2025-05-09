<?php

namespace App\Models;



class Post {
    private static $renungan_posts =  [
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

    public static function all()
    {
        return collect(self::$renungan_posts);
    }

    public static function find($slug)
    {
        $posts = static::all();
        return $posts->firstWhere('slug', $slug);
    }
}
