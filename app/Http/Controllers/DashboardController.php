<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        return view('dashboard.index', ['posts' => Post::all()]);
    }

    public function users()
    {
        return view('dashboard.users', ['users' => User::with('role')->all()]);
    }

    public function posts()
    {
        return view('dashboard.posts', ['posts' => Post::all()]);
    }
}
