<?php

namespace App\Http\Controllers\Publikasi;

use App\Http\Controllers\Controller;
use App\Models\Publikasi;

class PublikasiController extends Controller
{
    function index(){
        $data['list_publikasi'] = Publikasi::all();
        $data['list_publikasi'] = Publikasi::latest()->get();
        return view('content.publikasi.index',$data);
    }
    function create()
    {
        return view('content.publikasi.create');
    }
    function store(){
        $publikasi = new Publikasi();
        $publikasi->ket = request('ket');
        $publikasi->kategori = request('kategori');
        $publikasi->save();
        $publikasi->handleUploadPdf();
        $publikasi->handleUploadGambar();
        return redirect('data_manager/admin/publikasi')->with('success', 'Data Berhasil Ditambahkan');
    }
    function update(Publikasi $publikasi)
    {
        $publikasi->ket = request('ket');
        $publikasi->kategori = request('kategori');
        $publikasi->save();
        if (request('gambar')) $publikasi->handleUploadGambar();
        if (request('file')) $publikasi->handleUploadPdf();
        return redirect('data_manager/admin/publikasi')->with('warning', 'Data Berhasil Diedit');
    }
    function destroy(Publikasi $publikasi)
    {
        $publikasi->delete();
        $publikasi->handleDelete();
        return redirect('data_manager/admin/publikasi')->with('danger', 'Data Berhasil Dihapus');
    }
}
