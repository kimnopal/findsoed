<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(Request $request)
    {
        $search = $request['cari'] ?? '';

        return view('home', [
            'posts' => Post::with('user')->where('title', 'LIKE', '%' . $search . '%')->paginate(10),
        ]);
    }
}
