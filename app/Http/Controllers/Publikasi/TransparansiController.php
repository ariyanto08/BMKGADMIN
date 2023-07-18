<?php

namespace App\Http\Controllers\Publikasi;

use App\Http\Controllers\Controller;
use App\Models\Transparansi;

class TransparansiController extends Controller
{
    function index(){
        $data['list_transparansi'] = Transparansi::all();
        $data['list_transparansi'] = Transparansi::latest()->get();
        return view('content.publikasi.transparansi.index',$data);
    }
    function create()
    {
        return view('content.publikasi.transparansi.create');
    }
    function store(){
        $transparansi = new Transparansi();
        $transparansi->ket = request('ket');
        $transparansi->kategori = request('kategori');
        $transparansi->save();
        $transparansi->handleUploadPdf();
        return redirect('data_manager/admin/transparansi')->with('success', 'Data Berhasil Ditambahkan');
    }
    function update(Transparansi $transparansi)
    {
        $transparansi->ket = request('ket');
        $transparansi->kategori = request('kategori');
        $transparansi->save();
        if (request('file')) $transparansi->handleUploadPdf();
        return redirect('data_manager/admin/transparansi')->with('warning', 'Data Berhasil Diedit');
    }
    function destroy(Transparansi $transparansi)
    {
        $transparansi->delete();
        $transparansi->handleDelete();
        return redirect('data_manager/admin/transparansi')->with('danger', 'Data Berhasil Dihapus');
    }
}
