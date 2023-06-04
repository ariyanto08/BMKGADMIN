<?php

namespace App\Http\Controllers\Publikasi;

use App\Http\Controllers\Controller;
use App\Models\Edukasi;

class EdukasiController extends Controller
{
    function index(){
        $data['list_edukasi'] = Edukasi::all();
        return view('content.publikasi.edukasi.index',$data);
    }
    function create()
    {
        return view('content.publikasi.edukasi.create');
    }
    function store(){
        $edukasi = new Edukasi();
        $edukasi->ket = request('ket');
        $edukasi->save();
        $edukasi->handleUploadPdf();
        return redirect('data_manager/admin/edukasi')->with('success', 'Data Berhasil Ditambahkan');
    }
    function update(Edukasi $edukasi)
    {
        $edukasi->ket = request('ket');
        $edukasi->save();
        if (request('file')) $edukasi->handleUploadPdf();
        return redirect('data_manager/admin/edukasi')->with('warning', 'Data Berhasil Diedit');
    }
    function destroy(Edukasi $edukasi)
    {
        $edukasi->delete();
        $edukasi->handleDelete();
        return redirect('data_manager/admin/edukasi')->with('danger', 'Data Berhasil Dihapus');
    }
}
