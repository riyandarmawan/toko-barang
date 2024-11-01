<?php

namespace App\Http\Controllers\Api;

use App\Models\Barang;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\BarangResource;

class BarangController extends Controller
{
    public function index()
    {
        return BarangResource::collection(Barang::all());
    }

    public function get($id_barang)
    {
        $barang = Barang::find($id_barang);

        if (!$barang) {
            return response()->json(['message' => 'Barang not found'], 404);
        }

        return new BarangResource($barang);
    }

    public function update($id_barang, Request $request)
    {
        $request->validate([
            'nama_barang' => 'required',
            'harga' => 'required',
            'stok' => 'required'
        ], [
            // nama barang
            'nama_barang.required' => 'Nama barang harus diisi',

            // harga
            'harga.required' => 'Harga harus diisi',

            // stok
            'stok.required' => 'Stok harus diisi'
        ]);

        $barang = Barang::find($id_barang);

        if (!$barang) {
            return response()->json(['message' => 'Barang not found'], 404);
        }

        $barang->update($request->all());

        return response()->json(['message' => 'Barang success updated']);
    }

    public function delete($id_barang)
    {
        $barang = Barang::find($id_barang);

        if (!$barang) {
            return response()->json(['message' => 'Barang not found'], 404);
        }

        $barang->delete();

        return response()->json(['message' => 'Barang success deleted']);
    }
}
