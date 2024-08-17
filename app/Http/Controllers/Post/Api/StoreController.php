<?php

namespace App\Http\Controllers\Post\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\Post\StoreRequest;
use App\Http\Resources\Post\IndexResource;
use App\Models\Post;
use App\Models\User;
use App\Notifications\Post\NewPostNotification;
use Illuminate\Support\Facades\Notification;

class StoreController extends Controller
{
    public function __invoke(StoreRequest $request)
    {
        $data = $request->validated();

        $post = Post::create($data);

        $users = User::all();

        Notification::send($users, new NewPostNotification($post)); 
        
        return new IndexResource($post);
    }
}
