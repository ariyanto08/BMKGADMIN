<?php

namespace App\Http\Controllers\Beranda;

use App\Http\Controllers\Controller;
use App\Models\Penghargaan;

class PenghargaanController extends Controller
{
    function index(){
        $data['list_penghargaan'] = Penghargaan::all();
        return view('content.beranda.penghargaan.index',$data);
    }
    function create()
    {
        return view('content.beranda.penghargaan.create');
    }
    function store(){
        $penghargaan = new Penghargaan();
        $penghargaan->ket = request('ket');
        $penghargaan->save();
        $penghargaan->handleUploadFoto();
        return redirect('data_manager/admin/penghargaan');
    }
    function update(Penghargaan $penghargaan)
    {
        $penghargaan->ket = request('ket');
        $penghargaan->save();
        if (request('gambar')) $penghargaan->handleUploadFoto();

        return redirect('data_manager/admin/penghargaan');
    }
    function destroy(Penghargaan $penghargaan)
    {
        $penghargaan->delete();
        $penghargaan->handleDelete();

        return redirect('data_manager/admin/penghargaan');
    }
}
