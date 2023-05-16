<?php

use App\Models\Post;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
   
    $post = Post::all();

     return view('welcome', [
        "posts"=> $post,
     ]);
});

Route::get('/post/{post}', function ($id) {
    
    //find post by slug and return it to post view
    $post = Post::findorFail($id);
    return view('post', [
        'post'=>$post,
    ]);
});