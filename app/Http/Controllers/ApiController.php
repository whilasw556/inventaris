<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\barang;

class ApiController extends Controller
{
    public function index(){
        // Mengambil Data Table barang
        $barang = barang::all();
        
        // Ubah ke json
        return response()->json([
            'success' => true,
            'message' => 'List Data Barang',
            'data' => $barang
        ], 200);
    }

    public function create(){
        //
    }

    public function store(Request $request){

        //validasi data
        $validated = $request->validate([
            'nama_barang' => 'required',
            'stok' => 'required',
        ]);

        $barang = new barang;
        $barang->nama_barang = $request->nama_barang;
        $barang->stok = $request->stok;
        $barang->save();

        return response()->json([
            'success' => true,
            'message' => 'List Tambah Data Barang',
            'data' => $barang
        ], 200);
    }

    public function show($id){
            // Mengambil Data Table barang
            $barang = barang::find($id);
            
            // Ubah ke json
            return response()->json([
                'success' => true,
                'message' => 'List Data Barang',
                'data' => $barang
            ], 200);
    }

    public function edit($id)
    {
        $barang = barang::findOrFail($id);
        $barang->nama_barang = $request->nama_barang;
        $barang->stok = $request->stok;
        $barang->save();
        return response()->json([
            'success' => true,
            'message' => 'List Data Barang',
            'data' => $barang
        ], 200);
    }
}
