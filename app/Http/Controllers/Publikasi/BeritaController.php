<?php

namespace App\Http\Controllers\Publikasi;

use App\Http\Controllers\Controller;
use App\Models\Berita;

class BeritaController extends Controller
{
    function index(){
        $data['list_berita'] = Berita::all();
        return view('content.publikasi.berita.index',$data);
    }
    function create()
    {
        return view('content.publikasi.berita.create');
    }
    function store(){
        $berita = new Berita();
        $berita->judul = request('judul');
        $berita->deskripsi = request('deskripsi');
        $berita->save();
        $berita->handleUploadFoto();
        return redirect('data_manager/admin/berita')->with('success', 'Data Berhasil Ditambahkan');
    }
    function update(Berita $berita)
    {
        $berita->judul = request('judul');
        $berita->deskripsi = request('deskripsi');
        $berita->save();
        if (request('gambar')) $berita->handleUploadFoto();
        return redirect('data_manager/admin/berita')->with('warning', 'Data Berhasil Diedit');
    }
    function destroy(Berita $berita)
    {
        $berita->delete();
        $berita->handleDelete();

        return redirect('data_manager/admin/berita')->with('danger', 'Data Berhasil Dihapus');
    }
}
