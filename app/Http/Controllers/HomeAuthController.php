<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Mitra;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class HomeAuthController extends Controller
{
    //

    function index()
    {
        $data = [
            'title'    => 'Login',
            'content'  => 'home/auth/login'
        ];
        return view('home/layouts/wrapper', $data);
    }

    function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            $role = auth()->user()->role;
            if ($role === 'admin') {
                return redirect('/admin/dashboard');
            } else if ($role === 'mitra') {
                return redirect('/admin/dashboard');
            } else {
                echo 'user';
            }
        } else {
            return back()->with('loginError', 'Email atau password salah');
        }
    }

    function register()
    {
        $title = 'user';
        if (request('register_as') === 'njxvluhbfskfsdfnjzmsmkv') {
            $title = 'mitra';
        }
        $data = [
            'title'    => 'Register ' . strtoupper($title),
            'role' => $title,
            'content'  => 'home/auth/register'
        ];
        return view('home/layouts/wrapper', $data);
    }

    function store(Request $request)
    {
        // die('masuk');
        // echo 'Masuk';
        // $role = 'user';
        // if (request('register_as') === 'njxvluhbfskfsdfnjzmsmkv') {
        //     $role = 'mitra';
        // }
        // $user['id'] = Str::random(10);
        $user = $request->validate([
            'email'     => 'required|unique:users',
            'username'  => 'required|unique:users',
            'role'  => 'required',
            'password'  => 'required|min:5',
            // 're_password'  => 'required|same:password',
        ]);
        $user['password'] = bcrypt($user['password']);

        $id = DB::table('users')->insertGetId($user);
        return redirect('/login');
    }

    function logout()
    {
        Auth::logout();
        request()->session()->invalidate();
        request()->session()->regenerateToken();

        return redirect('/');
    }
}
