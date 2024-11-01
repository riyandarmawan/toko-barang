<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use Illuminate\Http\Request;

class BarangController extends Controller
{
    
    public function index()
    {
        $barangs = Barang::paginate(10);

        $latestId = Barang::withTrashed()->orderByDesc('id_barang')->first('id_barang')['id_barang'] ?? 'P-001';

        $latestCount = explode('-', $latestId)[1];

        $latestCount = sprintf('%03d', $latestCount > 1 ? $latestCount + 1 : 1);

        $latestId = "B-$latestCount";

        $data = [
            'title' => 'Barang',
            'barangs' => $barangs,
            'latestId' => $latestId
        ];

        return view('pages.dashboard.barang', $data);
    }
    
    public function add(Request $request)
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

        $barang = new Barang();

        $barang->create($request->all());

        return redirect('/dashboard/barang')->with('success', 'Data Barang berhasil ditambahkan!');
    }
}
