<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Post;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function showAdminPanel(){
        
        $id = Auth::user()->id;

        $posts = Post::where('author_id', $id)->get();

        return view('users.dashboard')->with('posts', $posts);
    }
}
