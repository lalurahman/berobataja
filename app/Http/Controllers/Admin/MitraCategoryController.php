<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\MitraCategory;
use Illuminate\Http\Request;

class MitraCategoryController extends Controller
{
    public function index()
    {
        $mitraCategory = MitraCategory::all();
        return view('pages.superadmin.mitra-category.index', [
            'mitraCategory' => $mitraCategory
        ]);
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required'
        ]);

        MitraCategory::create([
            'name' => $request->name
        ]);

        return redirect()->back()->with('success', 'Kategori Mitra Berhasil ditambahkan!');
    }
}
