<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function index(){
        return view('register');
    }

    public function store(Request $request){
        $validasi = $request->validate([
            'name' => 'required',
            'noHp' => 'required',
            'email' => 'required',
            'password' => 'required|confirmed',
        ]);

        User::create($validasi);
        return redirect('/login');
    }
}
