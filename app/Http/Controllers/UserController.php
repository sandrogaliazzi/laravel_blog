<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function showAdminPanel(){
        
        $user = Auth::user();

        var_dump($user->id);
        //return view('users.dashboard');
    }
}
