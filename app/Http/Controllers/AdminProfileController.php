<?php

namespace App\Http\Controllers;

use App\Models\Gambar;
use App\Models\Mitra;
use App\Models\Mou;
use App\Models\Province;
use App\Models\Regency;
use App\Models\User;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class AdminProfileController extends Controller
{
    //

    function index()
    {
        $user_id = auth()->user()->id;
        $user = User::with(['province', 'regency'])->find($user_id);
        // dd($user);
        if (auth()->user()->is_mou_mitra == true) {
            $data = [
                'title'   => 'Manajemen Profile',
                'user' => $user,
                'provinces' => Province::get(),
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

    function edit()
    {
        $user_id = auth()->user()->id;
        $user = User::with(['province', 'regency'])->find($user_id);
        $data = [
            'title'   => 'Manajemen Profile',
            'user' => $user,
            'provinces' => Province::get(),
            // 'regencies' => Regency::where('province_id', $user->province->id)->get(),
            'content' => 'admin/profile/edit'
        ];
        return view('admin/layouts/wrapper', $data);
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
            'province'            => 'required',
            'city'            => 'required',
            'gender'          => 'required',
            'about'           => 'required',
            'as_mitra'           => 'required',
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

    function getCity($provinsi_id)
    {
        if (!$provinsi_id) return response()->json('NOT OK');

        $city = Regency::where('province_id', $provinsi_id)->get();

        if ($city == false) return response()->json('NOT OK');

        $cities = "";

        foreach ($city as $key) {
            $cities .= "<option value='" . $key->id . "'>$key->name</option>";
        }

        return response()->json($cities);
    }

    public function UploadFoto(Request $request)
    {
        $dokumen = Dokumen::find($id);
        $data = $request->validate([
            'name'              => 'required|min:3',
            'desc'              => 'required|min:3',
            'type'              => 'required',
            // 'gambar'             => 'mimes:jpeg,jpg,png,JPEG,JPG,PNG',
        ]);
        // die('masuk');
        $data['user_id'] = auth()->user()->id;
        if ($request->hasFile('gambar')) {

            if ($dokumen->gambar != '') {
                unlink($dokumen->gambar);
            }


            $gambar = $request->file('gambar');
            $file_name = time() . "_" . $gambar->getClientOriginalName();

            $storage = 'uploads/images/';
            $gambar->move($storage, $file_name);
            $data['gambar'] = $storage . $file_name;
        } else {
            $data['gambar'] = $dokumen->gambar;
        }

        $dokumen->update($data);
        Alert::success('Sukses', 'Dokumen telah diubah');
        return redirect('/admin/dokumen?type=' . $data['type']);
    }
}
