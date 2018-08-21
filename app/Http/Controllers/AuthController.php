<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login()
    {
        return view('auth.login');
    }

    public function postLogin(Request $request)
    {
        $email = $request->get('email');
        $password = $request->get('password');

        if(Auth::attempt(['email' => $email, 'password' => $password])){
            //this means the user credentials is correct
            //this redirects user to posts/create
            return redirect()->intended('posts/create');
        }

        return redirect()->back()->with('errorMessage','The credentials are incorrect');
    }
}
