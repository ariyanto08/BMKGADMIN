<?php

namespace App\Http\Controllers\Pengamatan;

use App\Http\Controllers\Controller;
use App\Models\Kalender;

class KalenderController extends Controller
{
    function index(){
        $data['list_kalender'] = Kalender::all();
        return view('content.pengamatan.ikhtisar.kalender.index',$data);
    }
    function create()
    {
        return view('content.pengamatan.ikhtisar.kalender.create');
    }
    function store(){
        $kalender = new Kalender();
        $kalender->ket = request('ket');
        $kalender->save();
        $kalender->handleUploadFoto();
        return redirect('data_manager/admin/kalender')->with('success', 'Data Berhasil Ditambahkan');
    }
    function update(Kalender $kalender)
    {
        $kalender->ket = request('ket');
        $kalender->save();
        if (request('gambar')) $kalender->handleUploadFoto();

        return redirect('data_manager/admin/kalender')->with('warning', 'Data Berhasil Diedit');
    }
    function destroy(Kalender $kalender)
    {
        $kalender->delete();
        $kalender->handleDelete();

        return redirect('data_manager/admin/kalender')->with('danger', 'Data Berhasil Dihapus');
    }
}
