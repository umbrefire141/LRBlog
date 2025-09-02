<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Post;
use App\Models\User;
use Inertia\Inertia;

class WebController extends Controller
{
    public function index()
    {
        return Inertia::render('Home', [
            'posts' => Post::latest()->get()
        ]);
    }
}
