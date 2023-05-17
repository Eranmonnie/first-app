<?php

namespace Database\Seeders;
Use \App\Models\User;
Use \App\Models\Category;
Use \App\Models\Post;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        //ecscape the errors 
        User::truncate();
        Category::truncate();

       $user =  User::factory()->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

       $work =  Category::create([
            'name'=>'work',
            'slug'=>'work',
        ]);

       $family = Category::create([
            'name'=>'family',
            'slug'=>'family',
        ]);

       $school =  Category::create([
            'name'=>'school',
            'slug'=>'school',
        ]);

        Post::create([
            'category_id'=> $school->id,
            'user_id'=> $user->id,
            'title'=> 'school post',
            'snippet'=> 'first postt',
            'body'=> 'ncpiuwberpvjpfibpdiuhdpiuiudfhipudpviupvibdpivafdijvpibpidfiadnfpiudv;akdjdvjd;jdkjb;bdljv',
            'link'=>'first-post',
        ]);
        
        Post::create([
            'category_id'=> $work->id,
            'user_id'=> $user->id,
            'title'=> 'work post',
            'snippet'=> 'first postt',
            'body'=> 'ncpiuwberpvjpfibpdiuhdpiuiudfhipudpviupvibdpivafdijvpibpidfiadnfpiudv;akdjdvjd;jdkjb;bdljv',
            'link'=>'first-post',
        ]);
        
        Post::create([
            'category_id'=> $family->id,
            'user_id'=> $user->id,
            'title'=> 'family post',
            'snippet'=> 'first postt',
            'body'=> 'ncpiuwberpvjpfibpdiuhdpiuiudfhipudpviupvibdpivafdijvpibpidfiadnfpiudv;akdjdvjd;jdkjb;bdljv',
            'link'=>'first-post',
        ]);
    }
}
