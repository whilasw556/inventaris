<?php

namespace App\Http\Controllers;

use App\Models\barang_masuk;
use App\Models\barang;
use Illuminate\Http\Request;

class BarangMasukController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $barang_masuk = barang_masuk::All();
        return view('barangmasuk.index', compact('barang_masuk'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $barang = barang::All();
        return view('barangmasuk.create',compact('barang'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        

        $barang_masuk = new barang_masuk;
        $barang_masuk->id_barang = $request->id_barang;
        $barang_masuk->jumlah = $request->jumlah;
        $barang_masuk->tgl_masuk = $request->tgl_masuk;
        $barang_masuk->save();

        $barang = barang::findOrFail($request->id_barang);
        $barang->stok += $request->jumlah;
        $barang->save();

        return redirect()->route('barangmasuk.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\barang_masuk  $barang_masuk
     * @return \Illuminate\Http\Response
     */
    public function show(barang_masuk $barang_masuk)
    {
        $barang_masuk = barang_masuk::findOrFail($id);
        return view('barangmasuk.show', compact('barang_masuk'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\barang_masuk  $barang_masuk
     * @return \Illuminate\Http\Response
     */
    public function edit(barang_masuk $barang_masuk)
    {
        $barang_masuk = barang_masuk::findOrFail($id);
        return view('barangmasuk.edit', compact('barang_masuk'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\barang_masuk  $barang_masuk
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, barang_masuk $barang_masuk)
    {
        $barang_masuk = new barang_masuk;
        $barang_masuk->id_barang = $request->id_barang;
        $barang_masuk->jumlah = $request->jumlah;
        $barang_masuk->tgl_masuk = $request->tgl_masuk;
        $barang_masuk->save();

        $barang = barang::findOrFail($request->id_barang);
        $barang->stok += $request->jumlah;
        $barang->save();

        return redirect()->route('barangmasuk.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\barang_masuk  $barang_masuk
     * @return \Illuminate\Http\Response
     */
    public function destroy(barang_masuk $barang_masuk)
    {
        $barang_masuk = barang_masuk::findOrFail($id);
        $barang_masuk->delete();
        return redirect()->route('barangmasuk.index');
    }
}
