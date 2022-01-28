<?php

namespace App\Http\Controllers;

use App\Models\Layanan;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use RealRashid\SweetAlert\Facades\Alert;

class AdminLayananController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $data = [
            'title'   => 'Manajemen Layanan',
            'layanan' => Layanan::paginate('10'),
            'content' => 'admin/layanan/index'
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
            'title'   => 'Manajemen Layanan',
            'content' => 'admin/layanan/add'
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
            'price_real'              => 'required',
            'price_disc'              => 'required',
            'desc'              => 'required',
        ]);
        $data['user_id']    = auth()->user()->id;
        Layanan::create($data);
        Alert::success('Sukses', 'Layanan telah ditambahkan');
        return redirect('/admin/layanan');
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
            'title'   => 'Manajemen Layanan',
            'layanan' => Layanan::find($id),
            'content' => 'admin/layanan/add'
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
        $layanan = Layanan::find($id);
        $data = $request->validate([
            'name'              => 'required|min:3',
            'price_real'              => 'required',
            'price_disc'              => 'required',
            'desc'              => 'required',
        ]);
        $data['user_id']    = auth()->user()->id;
        $layanan->save($data);
        Alert::success('Sukses', 'Layanan telah diubah');
        return redirect('/admin/layanan');
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
        $layanan = Layanan::find($id);
        $layanan->delete();
        Alert::success('Sukses', 'Layanan telah dihapus');
        return redirect('/admin/layanan');
    }
}
