<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    public function create()
    {
        return view('post.create');
    }

    public function store(Request $request)
    {
        $request['status'] = strtolower($request['status']);

        $validatedData = $request->validate([
            'title' => 'required|string',
            'photo' => 'required|image|mimes:png,jpg|max:1024',
            'description' => 'required|string',
            'status' => 'required|in:hilang,temuan,ditemukan',
            'contact' => 'required|string',
        ]);

        $validatedData['photo'] = $request->file('photo')->store();
        $validatedData["user_id"] = Auth::user()->id;

        Post::create($validatedData);

        return redirect(route('home'));
    }

    public function show(Post $post)
    {
        return view('post.show', [
            'post' => $post,
        ]);
    }
}
