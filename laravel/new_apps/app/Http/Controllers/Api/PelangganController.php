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
        return new PelangganResource(true, 'List Data Pelanggans', Pelanggan::all());
    }
}
