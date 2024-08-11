<?php

namespace App\Http\Controllers\Post\Api;

use App\Http\Controllers\Controller;
use App\Models\Post;
use App\Http\Resources\Post\ShowResource;


class ShowController extends Controller
{
    public function __invoke($id)
    {
        $post = Post::with('author')->findOrFail($id);
        
        return new ShowResource($post);
    }
}
