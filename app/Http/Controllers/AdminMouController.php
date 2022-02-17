<?php

namespace App\Http\Controllers;

use App\Models\Mou;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class AdminMouController extends Controller
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
            'title'   => 'Manajemen Mou',
            'mou' => Mou::paginate('10'),
            'content' => 'admin/mou/index'
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
            'title'   => 'Manajemen Mou',
            'content' => 'admin/mou/add'
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
            'topic'       => 'required|min:3',
            'desc'        => 'required',
        ]);
        Mou::create($data);
        Alert::success('Sukses', 'Mou telah ditambahkan');
        return redirect('/admin/mou');
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
            'title'   => 'Manajemen Mou',
            'mou' => Mou::find($id),
            'content' => 'admin/mou/add'
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
        $mou = Mou::find($id);
        $data = $request->validate([
            'topic'       => 'required|min:3',
            'desc'        => 'required',
        ]);
        $mou->save($data);
        Alert::success('Sukses', 'Mou telah diubah');
        return redirect('/admin/mou');
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
        $mou = Mou::find($id);
        $mou->delete();
        Alert::success('Sukses', 'Mou telah dihapus');
        return redirect('/admin/mou');
    }
}
