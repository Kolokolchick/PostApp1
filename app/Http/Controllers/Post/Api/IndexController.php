<?php

namespace App\Http\Controllers\Post\Api;

use App\Http\Controllers\Controller;
use App\Models\Post;
use App\Http\Resources\Post\IndexResource;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function __invoke(Request $request)
    {
        $order = $request->query('order', 'newer');

        $sortOrder = $order === 'oldest' ? 'asc' : 'desc';

        $posts = Post::orderBy('created_at', $sortOrder)->paginate(15);

        return IndexResource::collection($posts);
    }
}
