<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Layanan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LayananController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $layanan = Layanan::with('user')->where('user_id', Auth::user()->id)->get();
        return view('pages.mitra.layanan', [
            'layanan' => $layanan
        ]);
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
        $this->validate($request,[
            'name' => 'string|required',
            'price' => 'required',
            'detail' => 'required',
            'image' => 'image|max:2400'
        ]);

        $data = $request->all();
        $data['user_id'] = Auth::user()->id;

        if($request->hasFile('image')){
            $image = $request->file('image');
            $nama_file = time() . "_" . $image->getClientOriginalName();

            $storage = 'images/mitra/layanan';
            $image->move($storage, $nama_file);
            $data['image'] = $nama_file;
        } else {
            $data['image'] = NULL;
        }

        Layanan::create($data);

        return redirect()->back()->with('success','berhasil tambahkan layanan');
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
}
