<?php
namespace App\Models;
use Illuminate\Database\Eloquent\ModelNotFoundException;
class Post{
    public static function find($slug){
        
        $path = base_path ("/resources/posts/{$slug}-post.html");

        if (! file_exists($path)){
           abort(404);
        }
    
        return cache()->remember("posts.{$slug}",1000, fn ()=> file_get_contents($path));
        
        }
}