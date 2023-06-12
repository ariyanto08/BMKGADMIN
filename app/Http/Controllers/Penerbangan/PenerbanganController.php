<?php

namespace App\Http\Controllers\Penerbangan;

use App\Http\Controllers\Controller;
use App\Models\Penerbangan;

class PenerbanganController extends Controller
{
    function index(){
        $data['list_penerbangan'] = Penerbangan::all();
        return view('content.penerbangan.index',$data);
    }
    function create()
    {
        return view('content.penerbangan.create');
    }
    function store(){
        $penerbangan = new Penerbangan();
        $penerbangan->ket = request('ket');
        $penerbangan->kategori = request('kategori');
        $penerbangan->save();
        $penerbangan->handleUploadPdf();
        return redirect('data_manager/admin/penerbangan')->with('success', 'Data Berhasil Ditambahkan');
    }
    function update(Penerbangan $penerbangan)
    {
        $penerbangan->ket = request('ket');
        $penerbangan->kategori = request('kategori');
        $penerbangan->save();
        if (request('file')) $penerbangan->handleUploadPdf();
        return redirect('data_manager/admin/penerbangan')->with('warning', 'Data Berhasil Diedit');
    }
    function destroy(Penerbangan $penerbangan)
    {
        $penerbangan->delete();
        $penerbangan->handleDelete();
        return redirect('data_manager/admin/penerbangan')->with('danger', 'Data Berhasil Dihapus');
    }
}
