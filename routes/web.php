<?php

use App\Http\Controllers\PostController;
use App\Models\Post;
use App\Models\Category;
use App\Models\User;
use Illuminate\Support\Facades\Route;

Route::get('/', [PostController::class ,'index'])->name('home');

Route::get('/post/{post:link}',[PostController::class , 'showByPost'])->name('post');



Route::get('/posts/user/{user:name}', function(User $user){
    return view('welcome',[
        'posts' => $user->Post,
        "categories"=> Category::all(),
    ]);
})->name('user');