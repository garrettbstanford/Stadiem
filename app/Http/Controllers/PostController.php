<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    // GET /api/posts - Get all posts
    public function index()
    {
        $posts = Post::all();  // Retrieve all posts
        return response()->json($posts);  // Return as JSON
    }

    // POST /api/posts - Create a new post
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'user_id' => 'required|integer',
            'content' => 'required|string|max:500',
        ]);

        $post = Post::create($validatedData);  // Save post to database
        return response()->json($post, 201);   // Return the created post with 201 status
    }

    // GET /api/posts/{id} - Get a single post by ID
    public function show($id)
    {
        $post = Post::findOrFail($id);  // Find post by ID or return 404
        return response()->json($post);
    }

    // PUT /api/posts/{id} - Update an existing post
    public function update(Request $request, $id)
    {
        $post = Post::findOrFail($id);

        $validatedData = $request->validate([
            'content' => 'required|string|max:500',
        ]);

        $post->update($validatedData);  // Update post
        return response()->json($post);  // Return the updated post
    }

    // DELETE /api/posts/{id} - Delete a post
    public function destroy($id)
    {
        $post = Post::findOrFail($id);
        $post->delete();  // Delete post
        return response()->json(null, 204);  // Return success, no content
    }
}

