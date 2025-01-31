<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class kategoriController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $kategori = DB::table('kategori')->where('kode_kategori', $id)->first();
        return view('kategori.edit', compact('kategori'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request-validate([
            'nama_kategori' => 'required',
            'nama_suppler' => 'required',

        ]);

        $data = [
            'nama_kategori' => $request->nama_kategori,
            'nama_supplier' => $request-nama_supplier,

        ];

        DB::table('kategori')->whwere(kode_kategori, $id)->update($data);
        return redirect::route('kategori.index')->with('success', 'Data Berhasil Diubah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        DB::table('kategori')->where('kode_kategori', $id)->delete($data);
        return redirect::route('kategori.index')->with('success', 'Data Berhasil Dihapus');
    }
}
