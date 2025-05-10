<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Category;
use App\Models\Post;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::create([
            'name' => 'Yontahan Okta',
            'email' => 'yonathan2gmail.com',
            'password' => bcrypt('12345')
        ]);

        User::create([
            'name' => 'Yossssd',
            'email' => 'yonosdsd@gmail.com',
            'password' => bcrypt('12345')
        ]);

        Category::create([
            'name' => 'Web Programming',
            'slug' => 'web-programming'
        ]);
        Category::create([
            'name' => 'Android Programming',
            'slug' => 'android-programming'
        ]);

        Post::create([
            'title' => 'Judul Pertama',
            'slug' => 'judul-pertama',
            'excerpt' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam pulvinar mauris felis, sit amet congue arcu ultricies in.',
            'body' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam pulvinar mauris felis, sit amet congue arcu ultricies in. Cras nec gravida neque. Sed libero arcu, placerat eget consectetur a, feugiat vel odio. Etiam sit amet ultrices libero. Maecenas quis mattis ipsum. Praesent blandit aliquam pharetra. Mauris sed risus vel ligula ornare efficitur vel et dolor. Aenean rhoncus consectetur lorem, maximus porttitor leo pretium et.',
            'category_id' => 1,
            'user_id' => 1
        ]);

        Post::create([
            'title' => 'Judul Kedua',
            'slug' => 'judul-kedua',
            'excerpt' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam pulvinar mauris felis, sit amet congue arcu ultricies in.',
            'body' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam pulvinar mauris felis, sit amet congue arcu ultricies in. Cras nec gravida neque. Sed libero arcu, placerat eget consectetur a, feugiat vel odio. Etiam sit amet ultrices libero. Maecenas quis mattis ipsum. Praesent blandit aliquam pharetra. Mauris sed risus vel ligula ornare efficitur vel et dolor. Aenean rhoncus consectetur lorem, maximus porttitor leo pretium et.',
            'category_id' => 1,
            'user_id' => 1
        ]);

        Post::create([
            'title' => 'Judul Ketiga',
            'slug' => 'judul-ketiga',
            'excerpt' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam pulvinar mauris felis, sit amet congue arcu ultricies in.',
            'body' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam pulvinar mauris felis, sit amet congue arcu ultricies in. Cras nec gravida neque. Sed libero arcu, placerat eget consectetur a, feugiat vel odio. Etiam sit amet ultrices libero. Maecenas quis mattis ipsum. Praesent blandit aliquam pharetra. Mauris sed risus vel ligula ornare efficitur vel et dolor. Aenean rhoncus consectetur lorem, maximus porttitor leo pretium et.',
            'category_id' => 2,
            'user_id' => 1
        ]);

        Post::create([
            'title' => 'Judul Keempat',
            'slug' => 'judul-keempat',
            'excerpt' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam pulvinar mauris felis, sit amet congue arcu ultricies in.',
            'body' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam pulvinar mauris felis, sit amet congue arcu ultricies in. Cras nec gravida neque. Sed libero arcu, placerat eget consectetur a, feugiat vel odio. Etiam sit amet ultrices libero. Maecenas quis mattis ipsum. Praesent blandit aliquam pharetra. Mauris sed risus vel ligula ornare efficitur vel et dolor. Aenean rhoncus consectetur lorem, maximus porttitor leo pretium et.',
            'category_id' => 2,
            'user_id' => 2
        ]);
    }
}
