<?php

namespace App\Http\Controllers;

use App\Models\Dokumen;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class AdminDokumenController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $type = request('type');
        $dokumen = Dokumen::where('type', $type)->paginate(10);
        $data = [
            'title'   => 'Manajemen Dokumen',
            'dokumen' => $dokumen,
            'content' => 'admin/dokumen/index'
        ];
        return view('admin/layouts/wrapper', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $data = [
            'title'   => 'Tambah Dokumen ' . ucfirst(request('type')),
            'content' => 'admin/dokumen/add'
        ];
        return view('admin/layouts/wrapper', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $data = $request->validate([
            'name'              => 'required|min:3',
            'desc'              => 'required|min:3',
            'type'              => 'required',
            'gambar'             => 'required|mimes:jpeg,jpg,png,JPEG,JPG,PNG',
        ]);
        $data['user_id'] = auth()->user()->id;
        if ($request->hasFile('gambar')) {
            $gambar = $request->file('gambar');
            $file_name = time() . "_" . $gambar->getClientOriginalName();

            $storage = 'uploads/images/';
            $gambar->move($storage, $file_name);
            $data['gambar'] = $storage . $file_name;
        } else {
            $data['gambar'] = NULL;
        }

        Dokumen::create($data);
        Alert::success('Sukses', 'Dokumen telah ditambahkan');
        return redirect('/admin/dokumen?type=' . $data['type']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $data = [
            'title'   => 'Edit Dokumen ',
            'dokumen' => Dokumen::find($id),
            'content' => 'admin/dokumen/add'
        ];
        return view('admin/layouts/wrapper', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
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

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
