<?php

namespace Database\Seeders;
Use \App\Models\User;
Use \App\Models\Category;

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

        Category::create([
            'name'=>'work',
            'slug'=>'work',
        ]);

        Category::create([
            'name'=>'family',
            'slug'=>'family',
        ]);

        Category::create([
            'name'=>'school',
            'slug'=>'school',
        ]);
    }
}
