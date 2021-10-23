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
        return view('pages.mitra');
    }

    public function profil_mitra($username)
    {
        $mitra = User::where('username', $username)->firstOrFail();
        return view('pages.profil-mitra', [
            'mitra' => $mitra
        ]);
    }
}
