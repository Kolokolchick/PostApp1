<?php

namespace App\Http\Controllers\User\Api\Notification;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Http\Resources\NotificationResource;

class ShowController extends Controller
{
    public function __invoke(User $user)
    {        
        $notifications = $user->notifications;

        return NotificationResource::collection($notifications);
    }
}
