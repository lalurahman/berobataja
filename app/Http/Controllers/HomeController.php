<?php

namespace App\Http\Controllers;

use App\Models\Layanan;
use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('pages.home');
    }

    public function mitra()
    {
        $mitra = User::with('mitra_category')->where('roles', 'mitra')->get();
        return view('pages.mitra', [
            'mitra' => $mitra
        ]);
    }

    public function profil_mitra($username)
    {
        $mitra = User::with('mitra_category')->where('username', $username)->firstOrFail();
        return view('pages.profil-mitra', [
            'mitra' => $mitra
        ]);
    }
}
