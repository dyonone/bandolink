<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\RedirectResponse;

class LoginController extends Controller
{
    public function index() {
        return view('login',[
            'title' => 'login'
        ]);
    }

    public function authenticate(Request $request): RedirectResponse
    {
        
        $credentials = $request->validate([
            'nik' => ['required'],
            'password' => ['required'],
        ]);
    
        if (Auth::guard('karyawan')->attempt($credentials)) {
            $request->session()->regenerate();
    
            return redirect()->intended('shortsize/admin/dashboard');
        }
    
        return back()->withErrors([
            'nik' => 'The provided credentials do not match our records.',
        ])->onlyInput('nik');
    }
}
