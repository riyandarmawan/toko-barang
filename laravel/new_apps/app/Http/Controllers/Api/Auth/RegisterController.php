<?php

namespace App\Http\Controllers\Api\Auth;

use App\Models\Admin;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use App\Http\Resources\AdminResource;

class RegisterController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        $request->validate([
            'username' => 'required|unique:\App\Models\Admin,username',
            'password' => 'required',
            'role' => 'required'
        ]);

        $admin = Admin::create([
            'username' => $request->username,
            'password' => Hash::make($request->password),
            'role' => $request->role
        ]);

        $token = $admin->createToken('myAppToken');

        return (new AdminResource(true, 'Registering new admin', $admin))->additional([
            'token' => $token->plainTextToken
        ]);
    }
}
