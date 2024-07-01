<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Category;
use App\Models\Post;
use App\Models\Kategori;
use App\Models\Script;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::create([
            'name' => 'bagus',
            'username' => 'baguspras',
            'email' => 'bagus@gmail.com',
            'password' => bcrypt('password'),
            'is_admin' => true
        ]);
        User::factory(3)->create();
        Category::create([
            'name' => 'Web Programming',
            'slug' => 'web-programming'
        ]);
        Category::create([
            'name' => 'Web Design',
            'slug' => 'web-design'
        ]);
        Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);
        
        Post::factory(20)->create();
        Kategori::create([
            'name' => 'Budaya',
            'slug' => 'budaya'
        ]);
        Kategori::create([
            'name' => 'Religi',
            'slug' => 'religi'
        ]);
        Kategori::create([
            'name' => 'Mathematical',
            'slug' => 'mathematical'
        ]);
        Script::factory(30)->create();
    }
}
