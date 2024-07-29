<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
{
    $user = auth()->user();
    $posts = Post::where('user_id', $user->id)->get();
    return response()->json($posts);
}

    public function store(Request $request)
{
    $user = auth()->user();

    $validatedData = $request->validate([
        'title' => 'required|string|max:255',
        'content' => 'required|string',
    ]);

    $post = new Post();
    $post->title = $validatedData['title'];
    $post->content = $validatedData['content'];
    $post->user_id = $user->id;
    $post->save();

    return response()->json($post, 201);
}


    public function show($id)
    {
        return Post::findOrFail($id);
    }

    public function update(Request $request, $id)
    {
        $post = Post::findOrFail($id);
        $post->update($request->all());

        return $post;
    }

    public function destroy($id)
    {
        $post = Post::findOrFail($id);
        $post->delete();

        return response()->json(['message' => 'Post deleted successfully']);
    }
}
