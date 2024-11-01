<?php

namespace App\Http\Controllers;

use App\Models\Pelanggan;
use Illuminate\Http\Request;

class PelangganController extends Controller
{
    public function index()
    {
        $pelanggans = Pelanggan::paginate(10);

        $latestId = Pelanggan::withTrashed()->orderByDesc('id_pelanggan')->first('id_pelanggan')['id_pelanggan'] ?? 'P-001';

        $latestCount = explode('-', $latestId)[1];
        
        $latestCount = sprintf('%03d',  $latestCount > 1 ? $latestCount + 1 : 1);

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
}
