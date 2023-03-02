<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index(){
        return view('login');
    }

    public function auth(Request $request){
        $user = $request->validate([
            'email' => 'required',
            'password' => 'required'
        ]);

        if(Auth::attempt($user)){
            return redirect()->intended('/dashboard');
        }
        return back();
    }
}
