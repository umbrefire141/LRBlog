<?php

use App\Http\Controllers\PostController;
use App\Http\Controllers\WebController;
use App\Models\Post;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

// Frontend 

Route::get('/', [WebController::class, 'homePage'])->name('home');

Route::get('/posts/{id}', [WebController::class, 'showPost'])->name('Post');

Route::get('/create-post', [WebController::class, 'createPost'])->middleware(['auth', 'verified'])->name('create-post');

Route::get('/posts/{id}/edit', [WebController::class, 'editPost'])->middleware(['auth', 'verified'])->name('edit-post');

Route::get("/auth/sign-in", [WebController::class, 'signIn'])->name('auth-signIn');

Route::get("/auth/sign-up", [WebController::class, 'signUp'])->name('auth-signUp');

Route::get("/users/{id}", [WebController::class, 'showUser'])->name('user-one');

Route::get("/users/{id}/update", [WebController::class, 'updateUser'])->middleware(['auth', 'verified'])->name('user-update');

// Backend


require __DIR__ . '/settings.php';
require __DIR__ . '/auth.php';
