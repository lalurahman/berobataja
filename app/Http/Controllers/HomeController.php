<?php

namespace App\Http\Controllers;

use App\Models\Layanan;
use App\Models\Service;
use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        // return view('pages.home');
        $data = [
            'service'   => Service::limit(4)->get(),
            'content'  => 'home/home/index'
        ];
        return view('home/layouts/wrapper', $data);
    }

    public function service()
    {
        // return view('pages.home');
        $data = [
            'service'   => Service::paginate(12),
            'content'  => 'home/home/service'
        ];
        return view('home/layouts/wrapper', $data);
    }
    function detail_service($id)
    {
        $data = [
            'service'   => Service::find($id),
            'content'  => 'home/home/detail_service'
        ];
        return view('home/layouts/wrapper', $data);
    }
}
