<?php

use App\Http\Controllers\authController;
use App\Http\Controllers\PostCommentController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\sessionController;
use App\Http\Controllers\MailchimpController;
use Illuminate\Support\Facades\Route;

Route::post('/newsletter', [MailchimpController::class, 'store']);

Route::get('/', [PostController::class ,'index'])->name('home');
Route::get('/post/{post:link}',[PostController::class , 'showByPost'])->name('post');
Route:: get('/admin/post/create',[PostController::class , 'create'] )->middleware('admin');
Route:: post('/admin/post/create',[PostController::class , 'store'] )->middleware('admin');

Route::get('/signup', [authController::class, 'create'])->middleware('guest');
Route::post('/signup', [authController::class, 'store'])->middleware('guest');

Route::post('/post/comment', [PostCommentController::class, 'store']);

Route::get('/login', [sessionController::class, 'create'])->middleware('guest');
Route::post('/login', [sessionController::class, 'store'])->middleware('guest');

Route::post('/logout', [sessionController::class, 'destroy'])->middleware('auth');



