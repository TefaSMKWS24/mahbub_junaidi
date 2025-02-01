<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use illuminate\support\facades\Redirect;
use illuminate\support\facades\Validator;

class kasirController extends Controller
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
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
          'nama_kasir' => 'required',
          'shif_mulai' => 'required',
          'shif_selesai' => 'required',
          'nohp' => 'required',
        ]);

        $data = [
            'nama_kasir' => $request->nama_kasir,
            'shif_mulai' => $request->shif_mulai,
            'shif_selesai' => $request->shif_selesai,
            'nohp' => $request->nohp,
        ];

        DB::table('kasir')->where('id', $id)->update($data);
        return redirect()->view(kasir.index);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        DB::table('kasir')->where('kode_kasir', $id)->delete($data);
        return redirect()->view(kasir.index);
    }
}
