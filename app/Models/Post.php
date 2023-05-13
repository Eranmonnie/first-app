<?php
namespace App\Models;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Support\Facades\File;

class Post{
    public static function all(){
        $file =  File::files(resource_path('posts/'));

       return array_map(fn ($file)=> $file->getContents() , $file);

    }
    public static function find($slug){
        $path = base_path ("/resources/posts/{$slug}-post.html");
        if (! file_exists($path)){
           throw new ModelNotFoundException();
        }
        return cache()->remember("posts.{$slug}",1000, fn ()=> file_get_contents($path));
        }
}