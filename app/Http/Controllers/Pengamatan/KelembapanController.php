<?php

namespace App\Http\Controllers\Pengamatan;

use App\Http\Controllers\Controller;
use App\Models\Kelembapan;

class KelembapanController extends Controller
{
    function index(){
        $data['list_kelembapan'] = Kelembapan::all();
        return view('content.pengamatan.ikhtisar.kelembapan.index',$data);
    }
    function create()
    {
        return view('content.pengamatan.ikhtisar.kelembapan.create');
    }
    function store(){
        $kelembapan = new Kelembapan();
        $kelembapan->ket = request('ket');
        $kelembapan->save();
        $kelembapan->handleUploadFoto();
        return redirect('data_manager/admin/kelembapan');
    }
    function update(Kelembapan $kelembapan)
    {
        $kelembapan->ket = request('ket');
        $kelembapan->save();
        if (request('gambar')) $kelembapan->handleUploadFoto();

        return redirect('data_manager/admin/kelembapan');
    }
    function destroy(Kelembapan $kelembapan)
    {
        $kelembapan->delete();
        $kelembapan->handleDelete();

        return redirect('data_manager/admin/kelembapan');
    }
}
