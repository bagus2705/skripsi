<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Category;
use App\Models\Post;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {


        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        User::create([
          'name'=>'bagus',
          'username'=> 'baguspras',
         'email'=>'bagus@gmail.com',
        'password'=>bcrypt('password')
        ]);
        //User::create([
        //   'name' => 'udin',
        //  'email' => 'udin@gmail',
        //  'password' => bcrypt('231')
        //]);
        User::factory(3)->create();
        Category::create([
        'name' =>'Web Programming',
        'slug' =>'web-programming'
        ]);
        Category::create([
        'name' =>'Web Design',
        'slug' =>'web-design'
        ]);
        Category::create([
        'name' => 'Personal',
        'slug' => 'personal'
        ]); 
        Post::factory(20)->create();
        /* Post::create([
            'title' => 'judul 1',
            'category_id' => 1,
            'slug' => 'judul-ke-1',
            'excrept' => 'lorem pasfnasdad satu',
            'body' => '<p>Lorem, saddasds asdadsad adsdasd asdipsum dolor sit amet consectetur adipisicing elit. Quod inventore eveniet quas corporis assumenda possimus perspiciatis asperiores sunt facilis dignissimos tempora sed maiores ullam error, eos nemo soluta animi quo quis. Quo repellat beatae ut nostrum minima eaque amet, quis culpa? </p><p>Atque magni dolorum ducimus, eius esse illo sit quia?</p>',
            'category_id'=>1,
            'user_id'=>1
        ]); */
       /*  Post::create([
            'title' => 'judul 2',
            'category_id' => 1,
            'slug' => 'judul-kedua',
            'excrept' => 'lorem pasfnasdad dua',
            'body' => '<p>Lorem, saddasds asdadsad adsdasd asdipsum dolor sit amet consectetur adipisicing elit. Quod inventore eveniet quas corporis assumenda possimus perspiciatis asperiores sunt facilis dignissimos tempora sed maiores ullam error, eos nemo soluta animi quo quis. Quo repellat beatae ut nostrum minima eaque amet, quis culpa? </p><p>Atque magni dolorum ducimus, eius esse illo sit quia?</p>',
            'category_id' => 1,
            'user_id' => 1
        ]);
        Post::create([
            'title' => 'judul 3',
            'category_id' => 1,
            'slug' => 'judul-ketiga',
            'excrept' => 'lorem pasfnasdad satu',
            'body' => '<p>Lorem, saddasds asdadsad adsdasd asdipsum dolor sit amet consectetur adipisicing elit. Quod inventore eveniet quas corporis assumenda possimus perspiciatis asperiores sunt facilis dignissimos tempora sed maiores ullam error, eos nemo soluta animi quo quis. Quo repellat beatae ut nostrum minima eaque amet, quis culpa? </p><p>Atque magni dolorum ducimus, eius esse illo sit quia?</p>',
            'category_id' => 2,
            'user_id' => 1
        ]);
        Post::create([
            'title' => 'judul 4',
            'category_id' => 1,
            'slug' => 'judul-keempat',
            'excrept' => 'lorem pasfnasdad satu',
            'body' => '<p>Lorem, saddasds asdadsad adsdasd asdipsum dolor sit amet consectetur adipisicing elit. Quod inventore eveniet quas corporis assumenda possimus perspiciatis asperiores sunt facilis dignissimos tempora sed maiores ullam error, eos nemo soluta animi quo quis. Quo repellat beatae ut nostrum minima eaque amet, quis culpa? </p><p>Atque magni dolorum ducimus, eius esse illo sit quia?</p>',
            'category_id' => 2,
            'user_id' => 2
        ]); */
        

    }
}
