<?php

use App\Models\Post;
use App\Models\Category;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
   
    $post = Post::all();

     return view('welcome', [
        "posts"=> $post,
     ]);
});

Route::get('/post/{post:link}', function (Post $post) {
    //automatically finds post by slug from url
    
    return view('post', [
        'post'=>$post,
    ]);
});

Route::get('/posts/category/{category:name}', function(Category $category){

    return view('category', [

        //find posts where category->name == slug;
        'posts'=>$category->Post,
    ]);

});