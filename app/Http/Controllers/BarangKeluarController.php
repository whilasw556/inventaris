<?php

namespace App\Http\Controllers;

use App\Models\barang_keluar;
use App\Models\barang;
use Illuminate\Http\Request;

class BarangKeluarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $barang_keluar = barang_keluar::All();
        return view('barangkeluar.index', compact('barang_keluar'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $barang = barang::All();
        return view('barangkeluar.create',compact('barang'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $barang_keluar = new barang_keluar;
        $barang_keluar->id_barang = $request->id_barang;
        $barang_keluar->jumlah = $request->jumlah;
        $barang_keluar->tgl_keluar = $request->tgl_keluar;
        $barang_keluar->save();

        $barang = barang::findOrFail($request->id_barang);
        $barang->stok -= $request->jumlah;
        $barang->save();

        return redirect()->route('barangkeluar.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\barang_keluar  $barang_keluar
     * @return \Illuminate\Http\Response
     */
    public function show(barang_keluar $barang_keluar)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\barang_keluar  $barang_keluar
     * @return \Illuminate\Http\Response
     */
    public function edit(barang_keluar $barang_keluar)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\barang_keluar  $barang_keluar
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, barang_keluar $barang_keluar)
    {
        $barang_keluar = new barang_keluar;
        $barang_keluar->id_barang = $request->id_barang;
        $barang_keluar->jumlah = $request->jumlah;
        $barang_keluar->tgl_keluar = $request->tgl_keluar;
        $barang_keluar->save();

        $barang = barang::findOrFail($request->id_barang);
        $barang->stok -= $request->jumlah;
        $barang->save();

        return redirect()->route('barangkeluar.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\barang_keluar  $barang_keluar
     * @return \Illuminate\Http\Response
     */
    public function destroy(barang_keluar $barang_keluar)
    {
        //
    }
}
