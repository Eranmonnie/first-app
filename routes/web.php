<?php

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

    $data = '';
    
    if($slug === '1'){
        $data = 'first';
    }

    else if($slug === '2'){
        $data = 'second';
    }
     
    else if($slug === '3'){
        $data = 'third';
    }

    $data = file_get_contents(__DIR__ . "/../resources/posts/{$data}-post.html");

    if (! file_exists($data)){
        return redirect('/'); 

    }
    return view('post', [
        'post' => $data
    ]);

});
