<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatePostForm;

class PostController extends Controller
{
    public function create()
    {
        return view('posts.create');
    }

    public function store(CreatePostForm $request)
    {
        //this gives us the currently logged in user
        $user = $request->user();

        //this fetches all the post data from the form
        //we can post all the data from post and not get an error
        // because laravel handles this in Post model through fillable array
        //Laravel will only save the data from the key that is in the fillables array
        $formData = $request->all();

        //this creates posts based on the relation from user to post
        //meaning the id of user is automatically populated and saved in the user_id column of posts table
        $user->posts()->create($formData);

        return "Post successfully saved";
    }
}
