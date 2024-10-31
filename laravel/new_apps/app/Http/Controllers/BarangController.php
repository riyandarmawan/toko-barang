<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use Illuminate\Http\Request;

class BarangController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $barangs = Barang::paginate(10);

        $latestId = Barang::orderByDesc('id_barang')->first('id_barang')['id_barang'];

        $latestCount = sprintf('%03d', explode('-', $latestId)[1] + 1);

        $latestId = "B-$latestCount";

        $data = [
            'title' => 'Barang',
            'barangs' => $barangs,
            'latestId' => $latestId
        ];

        return view('pages.dashboard.barang', $data);
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

        return redirect('/dashboard/barang')->with('success', 'Data barang berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Barang $barang)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Barang $barang)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Barang $barang)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Barang $barang)
    {
        //
    }
}
