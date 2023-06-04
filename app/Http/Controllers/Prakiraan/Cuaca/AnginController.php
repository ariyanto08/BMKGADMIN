<?php

namespace App\Http\Controllers\Prakiraan\Cuaca;

use App\Http\Controllers\Controller;
use App\Models\Angin;

class AnginController extends Controller
{
    function index(){
        $data['list_angin'] = Angin::all();
        return view('content.prakiraan.cuaca.angin.index',$data);
    }
    function create()
    {
        return view('content.prakiraan.cuaca.angin.create');
    }
    function store(){
        $angin = new Angin();
        $angin->ket = request('ket');
        $angin->save();
        $angin->handleUploadFoto();
        return redirect('data_manager/admin/angin')->with('success', 'Data Berhasil Ditambahkan');
    }
    function update(Angin $angin)
    {
        $angin->ket = request('ket');
        $angin->save();
        if (request('gambar')) $angin->handleUploadFoto();

        return redirect('data_manager/admin/angin')->with('warning', 'Data Berhasil Diedit');
    }
    function destroy(Angin $angin)
    {
        $angin->delete();
        $angin->handleDelete();

        return redirect('data_manager/admin/angin')->with('danger', 'Data Berhasil Dihapus');
    }
}
