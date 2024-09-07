<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use App\Models\Portofolio;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class PortoController extends Controller
{
    public function index(){
        $portofolio=Portofolio::with('kategori')->get();
        return view('admin.portofolio.portofolio', compact('portofolio'));
    }

    public function tambah(){
        $kategori=Kategori::all();
        return view('admin.portofolio.portofolio_tambah', compact('kategori'));
    }

    public function tambah_action(Request $request){
    $token_porto = Str::random('13');
    $token = uniqid();
    $file = $request->file('foto_project');
    $judul = $request->judul;
    $client = $request->client;
    $kategori = $request->kategori;
    $deskripsi = $request->deskripsi;
    $url = $request->link;
    $quotes = $request->quotes;
    $author = $request->author;

    // Inisialisasi $urlmodal menjadi null
    $urlmodal = null;

    // Jika $url tidak null, lakukan perubahan URL untuk modal
    if ($url) {
        $urlmodal = str_replace('watch?v=', 'embed/', $url);
    }

    $file_name = $token . "." . $file->getClientOriginalExtension();

    $data = [
        'token' => $token_porto,
        'nama_portofolio' => $judul,
        'client' => $client,
        'kategori_id' => $kategori,
        'deskripsi' => $deskripsi,
        'foto' => $file_name,
        'link' => $urlmodal,
        'linkDefault' => $url,
        'tanggal' => today(),
        'quotes' => $quotes,
        'author' => $author
    ];

    $file->move('thumbnail', $file_name);

    Portofolio::create($data);
    return redirect('/portofolio')->with('success', 'Portofolio Berhasil Di Tambah');
}

        public function upload(Request $request)
    {
        if ($request->hasFile('upload')) {

            $token = Str::random(12);

            $originName = $request->file('upload')->getClientOriginalName();
            $fileName = pathinfo($originName, PATHINFO_FILENAME);
            $extension = $request->file('upload')->getClientOriginalExtension();
            $fileName = $token . '.' . $extension;

            $request->file('upload')->move(public_path('foto_ckeditor'), $fileName);

            $url = asset('foto_ckeditor/' . $fileName);
            return response()->json(['fileName' => $fileName, 'uploaded' => 1, 'url' => $url]);
        }
    }

    public function hapus($id){
        Portofolio::where('id', $id)->delete();
        return redirect('/portofolio')->with(['success' => 'Portofolio Berhasil Dihapus']);
    }

    public function edit($id){
        $portofolio = Portofolio::where('id', $id)->first();
        $kategori = Kategori::all();
        return view('admin.portofolio.portofolio_edit', compact('portofolio', 'kategori'));
    }

    public function edit_action($id, Request $request){
    // Inisialisasi $urlmodal menjadi null
    $urlmodal = null;

    $token_porto = Str::random('13');
    $file = $request->file('foto_project');
    $judul = $request->judul;
    $client = $request->client;
    $kategori = $request->kategori;
    $deskripsi = $request->deskripsi;
    $url = $request->link;
    $quotes = $request->quotes;
    $author = $request->author;


    // Jika $url tidak null, lakukan perubahan URL untuk modal
    if ($url) {
        $urlmodal = str_replace('watch?v=', 'embed/', $url);
    }

    $porto = Portofolio::where('id', $id)->first();
    $data = [
        'token' => $token_porto,
        'nama_portofolio' => $judul,
        'client' => $client,
        'kategori_id' => $kategori,
        'deskripsi' => $deskripsi,
        'link' => $urlmodal,
        'linkDefault' => $url,
        'quotes' => $quotes,
        'author' => $author
    ];

    if ($file) {
            $token = uniqid();
            $file_name = $token . '.' . $file->getClientOriginalExtension();
            $data['foto'] = $file_name;
            $file->move('thumbnail', $file_name);
        } else {
            $data['foto'] = $porto->foto ?? 'default.jpg';
        }

    Portofolio::where('id', $id)->update($data);
    return redirect('/portofolio')->with('success', 'Portofolio Berhasil Diubah');
}
}
