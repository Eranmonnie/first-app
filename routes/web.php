<?php

use App\Models\Post;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $post=[];
    $document = Post::all();

    $post = collect($document)->map(function($document){
        return  new Post($document->title, $document->snippet, $document->body(), $document->date,  $document->link);
    });
        
    
     return view('welcome', [
        "posts"=> $post,
     ]);
});

Route::get('/post/{post}', function ($slug) {
    
    //find post by slug and return it to post view
    $post = Post::find($slug);
    return view('post', [
        'post'=>$post,
    ]);
})->where('post', '[A-z]+');
