<?php

namespace App\Http\Controllers\User\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Http\Resources\UserResource;

class IndexController extends Controller
{
    public function __invoke(Request $request)
    {
        $users = User::all();
        
        return UserResource::collection($users);
    }
}
