<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;
use App\Models\User;
use App\Models\Post;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::truncate();
        Category::truncate();
        Post::truncate();
     $user = User::factory()->create();

        $family = Category::create([
            "name"=>"Family" , 
            "slug"=>"family"
        ]);
         $personal = Category::create([
            "name"=>"Personal" , 
            "slug"=>"personal"
        ]);
         $work = Category::create([
            "name"=>"Work" , 
            "slug"=>"work"
        ]);
        $post = Post::create([
            "user_id" => $user->id,
            "category_id" => $personal->id,
            "title" => "mypersonalpost",
            "slug" => "personalpost",
            "excerpt" => "this is just a demo",
            "body" => "demo demo demo demo"
        ]);
        $post = Post::create([
            "user_id" => $user->id,
            "category_id" => $family->id,
            "title" => "myfamilypost",
            "slug" => "familypost",
            "excerpt" => "this is just a demo",
            "body" => "demo demo demo demo"
        ]);
        
        // Now you can access $post->id
        $this->command->info("Post created with ID: " . $post->id);
    }
}
