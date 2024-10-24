<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthenticationController extends Controller
{
    public function login()
    {
        $data = [
            'title' => 'Masuk'
        ];

        return view("pages.auth.login", $data);
    }

    public function loginProcess(Request $requests)
    {
        $credentials = $requests->validate([
            'username' => 'required',
            'password' => 'required',
        ], [
            // username
            'username.required' => 'Username wajib diisi',

            // password
            'password.required' => 'Password wajib diisi',
        ]);

        $admin = Admin::where('username', $requests->username)->first();

        if (!$admin) {
            return redirect()->back()->withErrors(['username' => 'Username yang anda masukkan tidak terdaftar!']);
        }

        if (Auth::guard('admin')->attempt($credentials)) {
            session()->regenerateToken();

            if ($admin->role === 'kasir') {
                return redirect()->intended('/dashboard/transaksi');
            }

            return redirect()->intended('/dashboard/barang');
        }

        return redirect()->back()->onlyInput('username')->withErrors(['password' => 'Password yang anda masukkan salah!']);
    }

    public function logout() {
        Auth::guard('admin')->logout();

        session()->regenerateToken();

        return redirect('/auth/login');
    }
}
