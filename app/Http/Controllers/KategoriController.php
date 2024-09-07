<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use Illuminate\Http\Request;

class KategoriController extends Controller
{
    public function index(){
        $kategori=Kategori::withCount('portofolio')->get();

        return view('admin.kategori.kategori', compact('kategori'));
    }

    public function tambah_action(Request $request){
        $request->validate([
            'kategori' => 'required|unique:kategori,nama_kategori'
        ],[
            'kategori.unique' => 'Kategori Sudah Ada'
        ]);

        $data=[
            'nama_kategori' => $request->kategori
        ];

        Kategori::create($data);
        return redirect('/kategori')->with(['success' => 'Berhasil Menambah Kategori']);
    }

    public function edit_action($id, Request $request){
        $request->validate([
            'kategori' => 'required|unique:kategori,nama_kategori'
        ],[
            'kategori.unique' => 'Kategori Sudah Ada'
        ]);

        $data=[
            'nama_kategori' => $request->kategori
        ];

        Kategori::where('id', $id)->update($data);
        return redirect('/kategori')->with(['success' => 'Berhasil Menambah Kategori']);
    }

    public function hapus($id){
        Kategori::where('id', $id)->delete();
        return redirect('/kategori')->with(['success' => 'Berhasil Menghapus Kategori']);
    }
}
