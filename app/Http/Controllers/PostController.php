<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class PostController extends Controller
{
    public function index()
    {
        return Post::orderByDesc('id')->paginate(15);
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'title' => ['required', 'string', 'max:255'],
            'body' => ['nullable', 'string'],
        ]);

        $post = Post::create($data);
        return response()->json($post, Response::HTTP_CREATED);
    }

    public function show(Post $post)
    {
        return $post;
    }

    public function update(Request $request, Post $post)
    {
        $data = $request->validate([
            'title' => ['sometimes', 'required', 'string', 'max:255'],
            'body' => ['nullable', 'string'],
        ]);

        $post->update($data);
        return $post;
    }

    public function destroy(Post $post)
    {
        $post->delete();
        return response()->noContent();
    }
}
