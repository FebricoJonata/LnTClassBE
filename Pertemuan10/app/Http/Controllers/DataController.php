<?php

namespace App\Http\Controllers;

use App\Models\Data;
use Illuminate\Http\Request;

class DataController extends Controller
{
    //View dari form data
    public function index()
    {
        return view('data');
    }

    public function store(Request $request)
    {
        // ddd($request);


        // dd($request);
        $request->validate([
            'nama' => 'required',
            'image' => 'required'
        ]);

        // $request->file('image');

        $file = $request->file('image');
        $file->store('image', 'public');
        $path_img = $file->getClientOriginalName();


        Data::create([
            'nama' => $request->nama,
            'image' => $path_img
        ]);

        // return redirect('/');
    }
}
