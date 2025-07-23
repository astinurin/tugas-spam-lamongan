<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\UsersModel;

class AuthController extends Controller
{
    public function showLoginForm()
    {
        return view('auth.login');
    }

    public function login(Request $request)
{
    $credentials = $request->only('email', 'password');

    if (Auth::attempt($credentials)) {
        $user = Auth::user();

        // Arahkan berdasarkan role
        if ($user->role === 'admin') {
            return redirect()->route('admin.dashboard');
        } elseif ($user->role === 'user') {
            return redirect()->route('user.dashboard');
        }

        // Kalau role-nya tidak dikenali
        Auth::logout();
        return redirect()->route('login.form')->withErrors([
            'role' => 'Role tidak valid.',
        ]);
    }

    return back()->withErrors([
        'email' => 'Email atau password salah.',
    ]);
}


    public function logout()
    {
        Auth::logout();
        return redirect('/login');
    }
}
