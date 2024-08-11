<?php

namespace App\Http\Controllers\Post\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\Post\StoreRequest;
use App\Http\Resources\Post\IndexResource;
use App\Models\Post;
use App\Models\User;
use App\Notifications\Post\NewPostNotification;

class StoreController extends Controller
{
    public function __invoke(StoreRequest $request)
    {
        $data = $request->validated();

        $post = Post::create($data);

        $users = User::all();

        foreach ($users as $user) {
            $user->notify(new NewPostNotification($post));
        }
        
        return new IndexResource($post);
    }
}
