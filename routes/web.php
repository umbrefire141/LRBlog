<?php

use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\WebController;
use App\Models\Post;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

// Frontend 

Route::get('/', [WebController::class, 'index'])->name('home');

Route::get('/posts/{id}', [PostController::class, 'show'])->name('Post');

Route::get('/create-post', [PostController::class, 'create'])->middleware(['auth', 'verified'])->name('create-post');

Route::get('/posts/{id}/edit', [PostController::class, 'edit'])->middleware(['auth', 'verified'])->name('edit-post');

Route::get("/auth/sign-in", [AuthenticatedSessionController::class, 'create'])->name('auth-signIn');

Route::get("/auth/sign-up", [RegisteredUserController::class, 'create'])->name('auth-signUp');

Route::get("/users/{id}", [UserController::class, 'show'])->name('user-one');

Route::get("/users/{id}/update", [UserController::class, 'edit'])->middleware(['auth', 'verified'])->name('user-update');


require __DIR__ . '/settings.php';
require __DIR__ . '/auth.php';
