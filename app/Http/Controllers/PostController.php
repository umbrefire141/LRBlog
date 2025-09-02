<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Client\Response;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Inertia\Inertia;

class PostController extends Controller
{
    //

    public function index()
    {
        return Inertia::render('posts', [
            'posts' => Post::latest()->get()
        ]);
    }

    public function create()
    {
        return Inertia::render('posts/InputPost');
    }

    public function store() {}

    public function show($id)
    {
        return Inertia::render('posts/Post', [
            'post' => Post::find($id)
        ]);
    }

    public function edit(string $id)
    {
        return Inertia::render('posts/InputPost');
    }

    public function update() {}

    public function delete() {}
}
