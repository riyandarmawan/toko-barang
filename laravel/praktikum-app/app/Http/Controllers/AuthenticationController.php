<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthenticationController extends Controller
{
    public function login()
    {
        return view('pages.auth.login');
    }

    public function loginProcess(Request $request)
    {
        $credentials = $request->validate([
            'username' => 'required',
            'password' => 'required'
        ], [
            // username
            'username.required' => 'Username wajib diisi',

            // password
            'password.required' => 'Password wajib diisi!'
        ]);

        $admin = Admin::where('username', $credentials['username'])->first();

        if (!$admin) {
            return redirect()->back()->withErrors(['username' => 'Username tidak ditemukkan!']);
        }

        if (Auth::guard('admin')->attempt($credentials)) {
            $request->session()->regenerate();

            if ($admin->role === 'admin') {
                return redirect()->intended('/dashboard/barang');
            }
                        
            return redirect()->intended('/dashboard/transaksi');
        }

        return redirect()->back()->withErrors(['password' => 'Password salah!']);
    }
}
