<?php

namespace App\Http\Controllers;

use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\Configuration;
use Illuminate\Support\Facades\DB;
use RealRashid\SweetAlert\Facades\Alert;

class AdminAboutUsController extends Controller
{
    //
    function index()
    {
        $about  = DB::table('configurations')->where('id', '1')->first();
        $data = [
            'title'   => 'About Us',
            'about' => $about,
            'content' => 'admin/about/index'
        ];
        return view('admin/layouts/wrapper', $data);
    }

    function update(Request $request)
    {
        $konfigurasi  = Configuration::find('1')->first();

        $data = $request->validate([
            'about_us' => 'required|min:3',
        ]);

        $data['excerpt_about']   = Str::limit(strip_tags($request->about_us), 300);

        if ($request->hasFile('cover_about')) {

            if ($konfigurasi->cover_about != '') {
                unlink($konfigurasi->cover_about);
            }

            $cover_about = $request->file('cover_about');
            $file_name = time() . "_" . $cover_about->getClientOriginalName();

            $storage = 'uploads/images/';
            $cover_about->move($storage, $file_name);
            $data['cover_about'] = $storage . $file_name;
        } else {
            $data['cover_about'] = $konfigurasi->cover_about;
        }

        $konfigurasi->update($data);
        Alert::success('Sukses', 'About telah diperbaharui');
        return redirect('/admin/about');
    }
}
