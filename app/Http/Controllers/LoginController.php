<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index(){

        return view('login');
    }

    public function authenticate(Request $request){

        $request->validate([
            'email'=>['required', 'email'],
            'password'=>['required', 'min:6', 'max:18']
        ]);
        
        $credentials = $request->only('email', 'password');
        // dd($credentials);
        if (Auth::attempt($credentials)) {
            $request->session()->put('LoggedUser', $request->email);

            return redirect()->intended('profile');
        }
        return back()->with('fail', 'Email or password fail!');
    }

    public function logout(){
        if(session()->has('LoggedUser')){
            session()->pull('LoggedUser');
            return redirect('login');
        }
    }

    
}
