<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function admin()
    {
        $admin = User::where('roles','admin')->get();
        return view('pages.superadmin.user.admin.index',[
            'admin' => $admin
        ]);
    }

    public function mitra()
    {
        $mitra = User::where('roles','mitra')->get();
        return view('pages.superadmin.user.mitra.index',[
            'mitra' => $mitra
        ]);
    }

    public function customer()
    {
        $customer = User::where('roles','customer')->get();
        return view('pages.superadmin.user.customer.index',[
            'customer' => $customer
        ]);
    }
}
