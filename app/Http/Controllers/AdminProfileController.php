<?php

namespace App\Http\Controllers;

use App\Models\Gambar;
use App\Models\Mitra;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

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
        $mitra = Mitra::where('user_id', $user_id)->first();

        $sertifikat = Gambar::where('type', 'sertifikat')->where('user_id', $user_id)->paginate(10);
        $data = [
            'title'   => 'Manajemen Profile',
            'mitra' => $mitra,
            'sertifikat' => $sertifikat,
            'content' => 'admin/profile/index'
        ];
        return view('admin/layouts/wrapper', $data);
    }

    function update(Request $request, $id)
    {
        // $user_id = ;
        $mitra = Mitra::where('user_id', $id)->first();
        // print_r($request);
        $data = $request->validate([
            'fullname'        => 'required|min:3',
            'alamat'          => 'required',
            'nohp'            => 'required',
            'gender'          => 'required',
            'about'           => 'required',
        ]);


        $mitra->update($data);
        Alert::success('success', 'User telah diedit');
        return redirect('/admin/profil');
    }
}
