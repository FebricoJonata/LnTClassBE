<?php

namespace App\Http\Controllers;

use App\Models\Buku;
use Illuminate\Http\Request;

class BukuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('createPage');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function createBook(Request $request)
    {
        Buku::create([
            'title' => $request->title,
            'author' => $request->author,
            'price' => $request->price,
            'release' => $request->release,
        ]);
    }

    public function getBooks()
    {
        $bukus = Buku::all();
        return view('viewBook', ['bukus' => $bukus]);
    }


    public function getBookById($id) {
        $buku = Buku::find($id);
        return view('updatePage', ['buku' => $buku]);
    }

    public function updateBook(Request $request, $id) {
        $buku = Buku::find($id);
 
        $buku -> update([
            'title' => $request->title,
            'author' => $request->author,
            'price' => $request->price,
            'release' => $request->release,
        ]);
 
        return redirect(route('getBooks'));
    }

    public function deleteBook($id){
        Buku::destroy($id);
        return redirect(route('getBooks'));
    }







    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Buku  $buku
     * @return \Illuminate\Http\Response
     */
    public function show(Buku $buku)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Buku  $buku
     * @return \Illuminate\Http\Response
     */
    public function edit(Buku $buku)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Buku  $buku
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Buku $buku)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Buku  $buku
     * @return \Illuminate\Http\Response
     */
    public function destroy(Buku $buku)
    {
        //
    }
}
