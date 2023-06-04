<?php

namespace App\Http\Controllers\LayananPublik;

use App\Http\Controllers\Controller;
use App\Models\Pelayanan;
use Illuminate\Http\Request;

class PelayananController extends Controller
{
    function index(){
        $data['list_pelayanan'] = Pelayanan::all();
        return view('content.layanan.pelayanan.index',$data);
    }
    function create()
    {
        return view('content.layanan.pelayanan.create');
    }
    function store(){
        $pelayanan = new Pelayanan();
        $pelayanan->ket = request('ket');
        $pelayanan->kategori = request('kategori');
        $pelayanan->save();
        $pelayanan->handleUploadPdf();
        return redirect('data_manager/admin/pelayanan')->with('success', 'Data Berhasil Ditambahkan');
    }
    function update(Pelayanan $pelayanan)
    {
        $pelayanan->ket = request('ket');
        $pelayanan->kategori = request('kategori');
        $pelayanan->save();
        if (request('file')) $pelayanan->handleUploadPdf();
        return redirect('data_manager/admin/pelayanan')->with('warning', 'Data Berhasil Diedit');
    }
    function destroy(Pelayanan $pelayanan)
    {
        $pelayanan->delete();
        $pelayanan->handleDelete();
        return redirect('data_manager/admin/pelayanan')->with('danger', 'Data Berhasil Dihapus');
    }
}
