<?php

use App\Http\Controllers\authController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\sessionController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PostController::class ,'index'])->name('home');

Route::get('/post/{post:link}',[PostController::class , 'showByPost'])->name('post');

Route::get('/signup', [authController::class, 'create'])->middleware('guest');
Route::post('/signup', [authController::class, 'store'])->middleware('guest');

Route::get('/login', [sessionController::class, 'create'])->middleware('guest');
Route::post('/login', [sessionController::class, 'store'])->middleware('guest');

Route::post('/logout', [sessionController::class, 'destroy'])->middleware('auth');


