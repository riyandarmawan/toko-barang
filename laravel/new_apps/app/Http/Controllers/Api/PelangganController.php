<?php

namespace App\Http\Controllers\Api;

use App\Http\Resources\PelangganResource;
use App\Models\Pelanggan;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PelangganController extends Controller
{
    public function index()
    {
        return PelangganResource::collection(Pelanggan::all());
    }

    public function get($id_pelanggan)
    {
        $pelanggan = Pelanggan::find($id_pelanggan);

        if (!$pelanggan) {
            return response()->json(['message' => 'Pelanggan not found'], 404);
        }

        return new PelangganResource($pelanggan);
    }

    public function update($id_pelanggan, Request $request)
    {
        $request->validate([
            'nama_pelanggan' => 'required',
            'alamat' => 'required',
            'telepon' => 'required|digits_between:8,13'
        ], [
            // nama pelanggan
            'nama_pelanggan.required' => 'Nama pelanggan harus diisi',

            // alamat
            'alamat.required' => 'Alamat harus diisi',

            // telepon
            'telepon.required' => 'Telepon harus diisi',
            'telepon.digits_between' => 'Telepon harus berupa rentang digit dari 8 sampai 13 angka'
        ]);

        $pelanggan = Pelanggan::find($id_pelanggan);

        if (!$pelanggan) {
            return response()->json(['message' => 'Pelanggan not found'], 404);
        }

        $pelanggan->update($request->all());

        return response()->json(['message' => 'Pelanggan success updated']);
    }

    public function delete($id_pelanggan)
    {
        $pelanggan = Pelanggan::find($id_pelanggan);

        if (!$pelanggan) {
            return response()->json(['message' => 'Pelanggan not found'], 404);
        }

        $pelanggan->delete();

        return response()->json(['message' => 'Pelanggan success deleted']);
    }
}
