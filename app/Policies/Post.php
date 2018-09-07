<?php

namespace App\Policies;

use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class Post
{
    use HandlesAuthorization;

    public function update(User $user, \App\Post $post)
    {
        return $user->id === $post->user_id;
    }
}
