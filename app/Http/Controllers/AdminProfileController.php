<?php

namespace App\Http\Controllers;

use App\Models\Gambar;
use App\Models\Mitra;
use App\Models\Mou;
use App\Models\User;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class AdminProfileController extends Controller
{
    //

    function index()
    {
        $user_id = auth()->user()->id;
        $user = User::find($user_id);

        if (auth()->user()->is_mou_mitra == true) {
            $data = [
                'title'   => 'Manajemen Profile',
                'user' => $user,
                'content' => 'admin/profile/index'
            ];
            return view('admin/layouts/wrapper', $data);
        } else {
            $data = [
                'title'   => 'MoU',
                'mou' => Mou::get(),
                'content' => 'admin/profile/mou'
            ];
            return view('admin/layouts/wrapper', $data);
        }
    }

    function update(Request $request, $id)
    {
        // $user_id = ;
        $user = User::find($id);
        // print_r($request);
        $data = $request->validate([
            'fullname'        => 'required|min:3',
            'alamat'          => 'required',
            'nohp'            => 'required',
            'kota'            => 'required',
            'gender'          => 'required',
            'about'           => 'required',
        ]);


        $user->update($data);
        Alert::success('success', 'User telah diedit');
        return redirect('/admin/profil');
    }

    function is_mou_mitra()
    {
        $user_id = auth()->user()->id;
        $user = User::find($user_id);
        $data = [
            'is_mou_mitra' => 1
        ];
        $user->update($data);
        return redirect('/admin/profil');
    }
}
