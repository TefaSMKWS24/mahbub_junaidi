<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use illuminate\support\facades\DB;
use illuminate\support\facades\redirect;
use illuminate\support\facades\validator;


class TransaksiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view(transaksi.index);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view(transaksi.create);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'kode_transaksi' => 'required',
            'tanggal_transaksi' => 'required',
            'kode_kasir' => 'required',
            'kode_barang' => 'required',
            'kode_pelanggan' => 'required',
            'total_belanja' => 'required',
            'total' => 'required',

        ]);

        $datatransaksi = ([
                'kode_transaksi' => $request->kode_transaksi,
                'tanggal_transaksi' => $request->tanggal_transaksi,
                'kode_kasir' => $request->kode_kasir,
                'kode_barang' => $request->kode_barang,
                'kode_pelanggan' => $request->kode_pelanggan,
                'total_belanja' => $request->total_belanja,
            ]);

        $datadetail = [
            'kode_transaksi' => $request->kode_transaksi,
            'kode_barang' => $request->kode_barang,
            'total_belanja' => $request->total_belanja,
            'jumlah' => $request->jumlah,
            'total' => $request->total,
        ];
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
        DB::table('transaksi')->where('id', $id)->first();
        return view('transaksi.edit');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'kode_transaksi' => 'required',
            'tanggal_transaksi' => 'required',
            'kode_kasir' => 'required',
            'kode_barang' => 'required',
            'kode_pelanggan' => 'required',
            'total_belanja' => 'required',
            'total' => 'required',

        ]);

        $data = ([
                'kode_transaksi' => $request->kode_transaksi,
                'tanggal_transaksi' => $request->tanggal_transaksi,
                'kode_kasir' => $request->kode_kasir,
                'kode_barang' => $request->kode_barang,
                'kode_pelanggan' => $request->kode_pelanggan,
                'total_belanja' => $request->total_belanja,
            ]);

            DB::table('transaksi')->insert($data);
            DB::table('detailtransaksi')->insert($data);

            return  redirect()->view('transaksi.index');


    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
