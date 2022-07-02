<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Category;
use App\Models\Post;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        User::create([
            'name' => 'Abil Backend Dev',
            'username' => 'abilbackenddev',
            'email' => 'abil@gmail.com',
            'password' => bcrypt('12345')
        ]);

        User::factory(3)->create();

        Category::create([
            'name' => 'Horor',
            'slug' => 'Horor'
        ]);

        Category::create([
            'name' => 'Komputer',
            'slug' => 'Computer'
        ]);

        Category::create([
            'name' => 'Komik',
            'slug' => 'Comic'
        ]);

        Category::create([
            'name' => 'Cerita',
            'slug' => 'Story'
        ]);

        Post::factory(0)->create();

    }
}
