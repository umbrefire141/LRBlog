<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Client\Response;
use Illuminate\Http\Request;
use Illuminate\View\View;

class PostController extends Controller
{
    //

    public function index()
    {
        return response()->json(Post::all());
    }
}
