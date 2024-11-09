<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class PostController extends Controller
{
    public function index()
    {
        return view('post.index', [
            'posts' => Post::where('user_id', Auth::id())->get(),
        ]);
    }

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

    public function show(string $id)
    {
        return view('post.show', [
            'post' => Post::with('user')->find($id),
        ]);
    }

    public function edit(string $id)
    {
        return view('post.edit', [
            'post' => Post::find($id),
        ]);
    }

    public function update(Request $request, string $id)
    {
        $post = Post::find($id);

        $request['status'] = strtolower($request['status']);

        $validatedData = $request->validate([
            'title' => 'required|string',
            'description' => 'required|string',
            'status' => 'required|in:hilang,temuan,ditemukan',
            'contact' => 'required|string',
        ]);

        if ($request->hasFile('photo')) {
            $request->validate([
                'photo' => 'required|image|mimes:png,jpg|max:1024',
            ]);

            $validatedData['photo'] = $request->file('photo')->store();

            Storage::delete($post->photo);
        }

        $post->update($validatedData);

        return redirect(route('posts.index'));
    }

    public function destroy(string $id)
    {
        $post = Post::find($id);
        Storage::delete($post->photo);
        $post->delete();

        return redirect(route('posts.index'));
    }
}
