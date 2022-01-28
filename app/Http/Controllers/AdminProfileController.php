<?php

namespace App\Http\Controllers;

use App\Models\Mitra;
use Illuminate\Http\Request;

class AdminProfileController extends Controller
{
    //

    function index()
    {
        $user_id = auth()->user()->id;
        $mitra = Mitra::where('user_id', $user_id)->first();
        if ($mitra == null) {
            $data = [
                'user_id' => $user_id,
            ];
            Mitra::create($data);
        }
        $data = [
            'title'   => 'Manajemen Profile',
            'mitra' => $mitra,
            'content' => 'admin/profile/index'
        ];
        return view('admin/layouts/wrapper', $data);
    }
}
