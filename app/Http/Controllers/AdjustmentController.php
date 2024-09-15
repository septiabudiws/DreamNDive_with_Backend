<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Service;
use Illuminate\Http\Request;

class AdjustmentController extends Controller
{
    public function index(){

        $about = About::first();
        $service = Service::all();

        return view('admin.adjustment.adjustment', compact('about', 'service'));
    }

    public function about_edit($id){

        $about = About::where('id', $id)->first();

        return view('admin.adjustment.about_edit', compact('about'));
    }

    public function about_edit_action($id, Request $request){
        $title = $request->title;
        $deskripsi = $request->deskripsi;

        $data = [
            'title' => $title,
            'deskripsi' => $deskripsi
        ];

        About::where('id', $id)->update($data);
        return redirect('/adjustment')->with('success', 'Berhasil Mengubah');
    }

    public function service_edit($id){

        $service = Service::where('id', $id)->first();

        return view('admin.adjustment.service_edit', compact('service'));
    }

    public function service_edit_action($id, Request $request){
        $title = $request->title;
        $deskripsi = $request->deskripsi;

        $data = [
            'title' => $title,
            'deskripsi' => $deskripsi
        ];

        Service::where('id', $id)->update($data);
        return redirect('/adjustment')->with('success', 'Berhasil Mengubah');
    }
}
