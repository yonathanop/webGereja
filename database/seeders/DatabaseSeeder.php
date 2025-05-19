<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Post;


use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Yonathan Okta',
            'username' => 'yonathan',
            'email' => 'yonathan@gmail.com',
            'password' => bcrypt('12345678'),
        ]);

        User::factory(3)->create();

        Post::factory(20)->create();

    }
}
