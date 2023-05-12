<?php

use App\Models\Post;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/post/{post}', function ($slug) {
    
    //find post by slug and return it to post view
    $post = Post::find($slug);
    return view('post', [
        'post'=>$post,
    ]);

    

   
    // return view('post', [
    //     'post' => $path
    // ]);

})->where('post', '[A-z]+');
