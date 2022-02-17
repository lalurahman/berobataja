<?php

namespace App\Http\Controllers;

use App\Models\Dokumen;
use App\Models\Mitra;
use Illuminate\Http\Request;

class AdminMitraController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $cari = request('cari');

        if ($cari) {
            $mitra = Mitra::where('fullname', 'like', '%' . $cari . '%')->latest()->paginate(10);
        } else {
            $mitra = Mitra::latest()->paginate(10);
        }

        $data = [
            'title'     => 'Manajemen Mitra',
            'mitra'     => $mitra,
            'content'   => 'admin/mitra/index'
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
        $mitra = Mitra::find($id);
        $dokumen = Dokumen::where('user_id', $mitra->user_id)->paginate(6);
        $data = [
            'title'     => 'Manajemen Mitra',
            'mitra'     => $mitra,
            'dokumen'     => $dokumen,
            'content'   => 'admin/mitra/detail'
        ];
        return view('admin/layouts/wrapper', $data);
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

    function is_active()
    {
        $boolean = request('boolean');
        $mitra_id = request('mitra_id');
        $mitra = Mitra::find($mitra_id);
        $data = [
            'is_active' => $boolean
        ];
        $mitra->update($data);
        return redirect('/admin/mitra');
    }
}
