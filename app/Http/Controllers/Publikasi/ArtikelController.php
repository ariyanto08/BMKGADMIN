<?php

namespace App\Http\Controllers\Publikasi;

use App\Http\Controllers\Controller;
use App\Models\Artikel;

class ArtikelController extends Controller
{
    function index(){
        $data['list_artikel'] = Artikel::all();
        return view('content.publikasi.artikel.index',$data);
    }
    function create()
    {
        return view('content.publikasi.artikel.create');
    }
    function store(){
        $artikel = new Artikel();
        $artikel->ket = request('ket');
        $artikel->save();
        $artikel->handleUploadPdf();
        return redirect('data_manager/admin/artikel')->with('success', 'Data Berhasil Ditambahkan');
    }
    function update(Artikel $artikel)
    {
        $artikel->ket = request('ket');
        $artikel->save();
        if (request('file')) $artikel->handleUploadPdf();
        return redirect('data_manager/admin/artikel')->with('warning', 'Data Berhasil Diedit');
    }
    function destroy(Artikel $artikel)
    {
        $artikel->delete();
        $artikel->handleDelete();
        return redirect('data_manager/admin/artikel')->with('danger', 'Data Berhasil Dihapus');
    }
}
