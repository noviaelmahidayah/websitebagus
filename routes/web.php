<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;

// Route::get('/', function () {
//    return view('welcome');
// });

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('post/{slug}', [PostController::class, 'detail'])->name('post.detail');
Route::get('articles', [HomeController::class, 'articles'])->name('home.articles');
Route::get('penulis', [HomeController::class, 'penulis'])->name('home.penulis');


