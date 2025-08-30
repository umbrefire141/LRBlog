<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Post;
use Inertia\Inertia;

class WebController extends Controller
{
    public function homePage()
    {
        return Inertia::render('Home', [
            'posts' => Post::latest()->get()
        ]);
    }

    public function showPost(string $id)
    {
        return Inertia::render('posts/Post', [
            'post' => Post::find($id)
        ]);
    }

    public function createPost()
    {
        return Inertia::render('posts/InputPost');
    }

    public function editPost(string $id)
    {
        return Inertia::render('posts/InputPost');
    }

    public function signIn()
    {
        return Inertia::render('auth/SignIn');
    }

    public function signUp()
    {
        return Inertia::render('auth/SignUp');
    }

    public function showUser()
    {
        return Inertia::render('users/User');
    }

    public function updateUser($id)
    {
        return Inertia::render('users/UpdateUser');
    }
}
