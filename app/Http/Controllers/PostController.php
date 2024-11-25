<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

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
            'photo' => 'required|image|mimes:png,jpg,webp|max:1024',
            'description' => 'required|string',
            'status' => 'required|in:hilang,temuan,ditemukan',
            'contact' => ['required', 'string', function ($attribute, $value, $fail) use ($request) {
                $contactCode = substr($request['contact'], 0, 2);
                if ($contactCode !== "62") {
                    $fail('Contact format must use prefix 62');
                }
            }],
        ]);

        $slug = Str::slug(Str::words($validatedData['title'], 10, ''), '-');
        $totalSlug = Post::where('slug', 'LIKE', '%' . $slug . '%')->count();
        $validatedData['slug'] = $totalSlug == 0 ? $slug : $slug . '-' . ++$totalSlug;

        $validatedData['photo'] = $request->file('photo')->store();
        $validatedData['user_id'] = Auth::user()->id;

        Post::create($validatedData);

        return redirect(route('home'));
    }

    public function show(string $slug)
    {
        return view('post.show', [
            'post' => Post::with('user')->where('slug', $slug)->first(),
        ]);
    }

    public function edit(string $slug)
    {
        $post = Post::where('slug', $slug)->first();

        Gate::authorize('update', $post);

        return view('post.edit', [
            'post' => $post,
        ]);
    }

    public function update(Request $request, string $slug)
    {
        $post = Post::where('slug', $slug)->first();

        Gate::authorize('update', $post);

        $request['status'] = strtolower($request['status']);

        $validatedData = $request->validate([
            'title' => 'required|string',
            'description' => 'required|string',
            'status' => 'required|in:hilang,temuan,ditemukan',
            'contact' => ['required', 'string', function ($attribute, $value, $fail) use ($request) {
                $contactCode = substr($request['contact'], 0, 2);
                if ($contactCode !== "62") {
                    $fail('Contact format must use prefix 62');
                }
            }],
        ]);

        if ($post->title !== $request['title']) {
            $slug = Str::slug(Str::words($validatedData['title'], 10, ''), '-');
            $totalSlug = Post::where('slug', 'LIKE', '%' . $slug . '%')->count();
            $validatedData['slug'] = $totalSlug == 0 ? $slug : $slug . '-' . ++$totalSlug;
        }

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

    public function destroy(string $slug)
    {
        $post = Post::where('slug', $slug)->first();

        Gate::authorize('delete', $post);

        Storage::delete($post->photo);
        $post->delete();

        return redirect(route('posts.index'));
    }

    public function data()
    {
        return Post::all();
    }
}
