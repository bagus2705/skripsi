<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Category;
use App\Models\Script;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::create([
            'email' => 'bagus@gmail.com',
            'password' => bcrypt('password'),
            'role' => 'admin'
        ]);
        User::create([
            'email' => 'bagu@gmail.com',
            'password' => bcrypt('password'),
            'role' => 'user'
        ]);
        User::create([
            'email' => 'bag@gmail.com',
            'password' => bcrypt('password'),
            'role' => 'filologis'
        ]);
       
        Category::create([
            'name' => 'Budaya',
            'slug' => 'budaya'
        ]);
        Category::create([
            'name' => 'Religi',
            'slug' => 'religi'
        ]);
        Category::create([
            'name' => 'Mathematical',
            'slug' => 'mathematical'
        ]);
        Script::factory(15)->create();
    }
}
