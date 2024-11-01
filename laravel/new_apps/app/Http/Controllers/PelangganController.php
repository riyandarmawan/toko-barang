<?php

namespace App\Http\Controllers;

use App\Models\Pelanggan;
use Illuminate\Http\Request;

class PelangganController extends Controller
{
    public function index()
    {
        $pelanggans = Pelanggan::paginate(10);

        $latestId = Pelanggan::orderByDesc('id_pelanggan')->first('id_pelanggan')['id_pelanggan'];

        $latestCount = sprintf('%03d', explode('-', $latestId)[1] + 1);

        $latestId = "P-$latestCount";

        $data = [
            'title' => 'Pelanggan',
            'pelanggans' => $pelanggans,
            'latestId' => $latestId
        ];

        return view('pages.dashboard.pelanggan', $data);
    }
    
    public function add(Request $request)
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

        $pelanggan = new Pelanggan();

        $pelanggan->create($request->all());

        return redirect('/dashboard/pelanggan')->with('success', 'Data pelanggan berhasil ditambahkan!');
    }

    public function getPelanggan($id) {
        $pelanggan = Pelanggan::find($id);

        if($pelanggan) {
            return response()->json($pelanggan);
        }

        return response()->json(['message', 'Pelanggan not found'], 404);
    }

    public function updatePelanggan($id, Request $request)
    {
        return response()->json([$id], 200);

        $pelanggan = Pelanggan::find($id);

        if ($pelanggan) {
            return response()->json(['message' => 'Pelanggan success deleted']);
        }

        return response()->json(['message' => 'Pelanggan not found'], 404);
    }

    public function deletePelanggan($id) {
        $pelanggan = Pelanggan::find($id);

        if($pelanggan->delete()) {
            return response()->json(['message' => 'Pelanggan success deleted']);
        }

        return response()->json(['message' => 'Pelanggan not found'], 404);
    }
}
