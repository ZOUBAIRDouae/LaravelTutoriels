<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Retrieve all posts, including soft-deleted ones.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function index()
    {
        $posts = Post::withTrashed()->get(); // Fetch all posts, including soft-deleted
        return response()->json($posts, 200); // Return posts with HTTP status 200
    }

    /**
     * Store a newly created post in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(Request $request)
    {
        \Log::info('Requête reçue : ', $request->all());
        
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
        ]);
    
        $post = Post::create($validated);
    
        return response()->json($post, 201);
    }

    /**
     * Display the specified post.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\JsonResponse
     */
    public function show(Post $post)
    {
        return response()->json($post, 200); 
    }

    /**
     * Update the specified post in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\JsonResponse
     */
    public function update(Request $request, Post $post)
    {

        $validated = $request->validate([
            'title' => ['sometimes', 'string', 'max:255'], 
            'content' => ['sometimes', 'string'],
        ]);

        $post->update($validated);

        return response()->json($post, 200);
    }

    public function destroy(Post $post)
    {
        $post->delete(); // Soft delete the post

        // Return success message with HTTP status 200
        return response()->json(['message' => 'Post supprimé avec succès'], 200);
    }
}
