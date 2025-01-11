<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class userController extends Controller
{
    public function login()
    {
        return view('Auth.adminLogin');
    }

    public function submit(Request $request)
    {
        $credentials = $request->validate([
            'username' => 'required',
            'password' => 'required',
        ]);

        if (Auth::attempt($credentials)) {
            $user = Auth::user();

            // Periksa role dan rute yang sesuai
            if ($request->route()->named('admin.submit') && $user->role !== 'admin') {
                Auth::logout();
                return redirect()->route('admin.login')->withErrors(['login_error' => 'Halaman ini hanya untuk Admin.']);
            } elseif ($request->route()->named('bendahara.submit') && $user->role !== 'bendahara') {
                Auth::logout();
                return redirect()->route('bendahara.login')->withErrors(['login_error' => 'Halaman ini hanya untuk Bendahara.']);
            } elseif ($request->route()->named('siswa.submit') && $user->role !== 'siswa') {
                Auth::logout();
                return redirect()->route('siswa.login')->withErrors(['login_error' => 'Halaman ini hanya untuk Siswa.']);
            }

            // Redirect berdasarkan role
            if ($user->role === 'admin') {
                return redirect()->route('admin.dashboard');
            } elseif ($user->role === 'bendahara') {
                return redirect()->route('bendahara.dashboard');
            } elseif ($user->role === 'siswa') {
                return redirect()->route('siswa.dashboard');
            }
        }

        return back()->withErrors(['login_error' => 'Username atau password salah'])->onlyInput('username');
    }
}
