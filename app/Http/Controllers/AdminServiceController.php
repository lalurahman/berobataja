<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class AdminServiceController extends Controller
{
    //
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $user_id = auth()->user()->id;
        $data = [
            'title'   => 'Manajemen Service',
            'kategori' => Service::paginate('10'),
            'content' => 'admin/layanan_kat/index'
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
            'title'   => 'Manajemen Service',
            'content' => 'admin/layanan_kat/add'
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
            'name'       => 'required|min:3',
            'desc'        => 'required',
        ]);
        Service::create($data);
        Alert::success('Sukses', 'Service telah ditambahkan');
        return redirect('/admin/kategori');
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
            'title'   => 'Manajemen Service',
            'kategori' => Service::find($id),
            'content' => 'admin/layanan_kat/add'
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
        $layanan_kat = Service::find($id);
        $data = $request->validate([
            'name'       => 'required|min:3',
            'desc'        => 'required',
        ]);
        $layanan_kat->save($data);
        Alert::success('Sukses', 'Service telah diubah');
        return redirect('/admin/kategori');
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
        $layanan_kat = Service::find($id);
        $layanan_kat->delete();
        Alert::success('Sukses', 'Service telah dihapus');
        return redirect('/admin/kategori');
    }
}
