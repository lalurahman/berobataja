<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login()
    {
        if (Auth::check()) {
            return redirect()->back();
        }
        return view('auth.login');
    }

    public function login_process(Request $request)
    {
        $this->validate($request, [
            'email' => 'required|string',
            'password' => 'required'
        ]);

        $data_login = [
            'email' => $request->input('email'),
            'password' => $request->input('password')
        ];

        Auth::attempt($data_login);

        if (Auth::check()) {
            if (Auth::user()->roles == 'superadmin') {
                return redirect()->route('admin-dashboard');
            } else if (Auth::user()->roles == 'mitra') {
                if (Auth::user()->is_active == 1) {
                    return redirect()->route('mitra-dashboard');
                } 
            } else {
                return redirect()->route('home');
            }
        } else {
            return redirect()->route('login');
        }
    }

    public function logout()
    {
        session()->flush();
        Auth::logout();
        return redirect()->route('login');
    }
}
