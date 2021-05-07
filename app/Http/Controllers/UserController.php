<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function profile(Request $request){

        $user = User::where('email', '=', session('LoggedUser'))->first();
        // dd($user);
        return view('dashboard', compact('user'));
        
    }

}
