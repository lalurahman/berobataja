<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\MitraCategory;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function register()
    {
        if (Auth::check()) {
            return redirect()->back();
        }
        
        $mitraCategory = MitraCategory::all();
        return view('auth.register', [
            'mitraCategory' => $mitraCategory
        ]);
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|string|max:100',
            'email' => 'required|string|email|unique:users,email,except,id',
            'password' => 'required',
            'username' => 'required|string|unique:users,username,except,id',
            'phone' => 'max:15',
            'address' => 'string'
        ]);

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'username' => $request->username,
            'mitra_category_id' => $request->mitra_category_id
        ]);

        return redirect()->route('login');
    }
}
