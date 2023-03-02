<?php

namespace App\Http\Controllers;

use App\Helpers\JSONFormat;
use App\Models\Mahasiswa;
use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Mahasiswa::all();

        if($data){
            return JSONFormat::createAPI(200, 'Sukses', $data);
        }else{
            return JSONFormat::createAPI(400, 'Gagal');
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'nim' => 'required'
        ]);

        $mahasiswa = Mahasiswa::create([
            'nama' => $request->nama,
            'nim' => $request->nim
        ]);

        $data = Mahasiswa::where('id', '=', $mahasiswa->id)->get();

        if($data){
            return JSONFormat::createAPI(200, 'Sukses', $data);
        }else{
            return JSONFormat::createAPI(400, 'Gagal');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Mahasiswa  $mahasiswa
     * @return \Illuminate\Http\Response
     */
    public function show(Mahasiswa $mahasiswa)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Mahasiswa  $mahasiswa
     * @return \Illuminate\Http\Response
     */
    public function edit(Mahasiswa $mahasiswa)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Mahasiswa  $mahasiswa
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required',
            'nim' => 'required'
        ]);

        $mahasiswa = Mahasiswa::findOrFail($id);

        $mahasiswa->update([
            'nama' => $request->nama,
            'nim' => $request->nim
        ]);

        $data = Mahasiswa::where('id', '=', $mahasiswa->id)->get();

        if($data){
            return JSONFormat::createAPI(200, 'Sukses', $data);
        }else{
            return JSONFormat::createAPI(400, 'Gagal');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Mahasiswa  $mahasiswa
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $mahasiswa = Mahasiswa::findOrFail($id);

        $data = $mahasiswa->delete();

        if($data){
            return JSONFormat::createAPI(200, 'Sukses', $data);
        }else{
            return JSONFormat::createAPI(400, 'Gagal');
        }
    }
}
