<?php

namespace App\Http\Controllers;
use App\Models\Storage;

use Illuminate\Http\Request;


class StorageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard', [
            'items' => Storage::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('createItems', [
            'items' => Storage::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validateData = $request->validate([
            'kategori' => 'required',
            'nama' => 'required|min:5|max:20',
            'harga' => 'required|gt:20',
            'jumlah' => 'required|gt:2'
        ]);

        Storage::create($validateData);

        return redirect('/dashboard')->with('success', 'New Post has been added');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        return view('editItems', [
            'item' => Storage::find($id)
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $dummy = Storage::find($id);

        $rules = [
            'kategori' => 'required',
            'nama' => 'required',
            'harga' => 'required',
            'jumlah' => 'required'
        ];

        $request->validate($rules);
        $dummy->update($request->all());
        return redirect('/dashboard')->with('success', 'Post has been updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Storage::destroy($id);
        return redirect('/dashboard')->with('success', 'Post has been Deleted');
    }
}
