<?php

use App\Http\Controllers\authController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PostController::class ,'index'])->name('home');

Route::get('/post/{post:link}',[PostController::class , 'showByPost'])->name('post');

Route::get('/signup', [authController::class, 'create']);
Route::post('/signup', [authController::class, 'store']);


