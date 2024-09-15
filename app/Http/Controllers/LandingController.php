<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Kategori;
use App\Models\Portofolio;
use App\Models\Service;
use Illuminate\Http\Request;

class LandingController extends Controller
{
    public function index(){

        $kategori=Kategori::all();
        $portofolio=Portofolio::all();
        $about=About::first();
        $service=Service::all();

        return view('landing.index', compact('kategori', 'portofolio', 'about', 'service'));
    }

    public function detail($token){
        $portofolio=Portofolio::where('token', $token)->first();
        return view('landing.porto_detail', compact('portofolio'));
    }
}
