<?php

namespace Database\Seeders;

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
        'name' => 'Minatozaki Sana',
        'username' => 'Sanaa',
        'email' => 'sana@gmail.com',
        'password' => bcrypt('12345')
        ]);

   
        User::factory(3)->create();
        Category::create([
            'name' => 'Itzy',
            'slug' => 'itzy',
        ]);
        
        Category::create([
            'name' => 'Twice',
            'slug' => 'twice',
        ]);
        
        Category::create([
            'name' => 'Song',
            'slug' => 'song',
        ]);
        Post::factory(15)->create();

       
    }
}
