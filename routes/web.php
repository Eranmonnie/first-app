<?php

use App\Models\Post;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome', [
        "posts"=>Post::all(),
    ]);
});

Route::get('/post/{post}', function ($slug) {
    
    //find post by slug and return it to post view
    $post = Post::find($slug);
    return view('post', [
        'post'=>$post,
    ]);
})->where('post', '[A-z]+');
