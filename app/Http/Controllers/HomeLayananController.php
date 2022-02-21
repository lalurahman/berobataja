<?php

namespace App\Http\Controllers;

use App\Models\Layanan;
use Illuminate\Http\Request;

class HomeLayananController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

        $layanan = Layanan::paginate(10);
        $value = request('value');
        $filter = request('filter');
        if ($filter && $value) {
            if ($filter == 'name') {
                $layanan = Layanan::where('name', 'like', '%' . $value . '%')->latest()->paginate(10);
            } else if ($filter == 'kota') {
                $layanan = Layanan::whereHas('user', function ($query) {
                    //ubah variable makassar
                    $query->where('users.kota', request('value'));
                })->with('user')->paginate(10);
            }
        }
        $data = [
            'layanan'   => $layanan,
            'content'  => 'home/layanan/index'
        ];
        return view('home/layouts/wrapper', $data);
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
        $data = [
            'layanan'  => Layanan::with('user')->find($id),
            'content'  => 'home/layanan/detail'
        ];
        return view('home/layouts/wrapper', $data);
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
