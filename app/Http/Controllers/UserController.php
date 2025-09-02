<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Inertia\Inertia;


class UserController extends Controller
{
    public function show($id)
    {
        return Inertia::render('users/User', [
            'user' => User::find($id)
        ]);
    }

    public function edit($id)
    {
        return Inertia::render('users/UpdateUser', [
            'user' => User::find($id)
        ]);
    }
}
