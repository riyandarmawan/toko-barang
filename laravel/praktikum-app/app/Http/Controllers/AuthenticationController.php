<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthenticationController extends Controller
{
    public function login() {
        return view('pages.auth.login');
    }

    public function loginProcess(Request $request) {
        
    }
}
