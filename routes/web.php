<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogPostController;

Route::get('/blog', [BlogPostController::class, 'findAll'])->name('blog.index');
Route::post('/blog', [BlogPostController::class, 'store']);
Route::get('/blog/create', [BlogPostController::class, 'create'])->name('blog.create');
