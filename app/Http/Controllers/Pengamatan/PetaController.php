<?php

namespace App\Http\Controllers\Pengamatan;

use App\Http\Controllers\Controller;
use App\Models\Peta;

class PetaController extends Controller
{
    function index(){
        $data['list_peta'] = Peta::all();
        return view('content.pengamatan.curah.peta.index',$data);
    }
    function create()
    {
        return view('content.pengamatan.curah.peta.create');
    }
    function store(){
        $peta = new Peta();
        $peta->ket = request('ket');
        $peta->save();
        $peta->handleUploadFoto();
        return redirect('data_manager/admin/peta')->with('success', 'Data Berhasil Ditambahkan');
    }
    function update(Peta $peta)
    {
        $peta->ket = request('ket');
        $peta->save();
        if (request('gambar')) $peta->handleUploadFoto();

        return redirect('data_manager/admin/peta')->with('warning', 'Data Berhasil Diedit');
    }
    function destroy(Peta $peta)
    {
        $peta->delete();
        $peta->handleDelete();

        return redirect('data_manager/admin/peta')->with('danger', 'Data Berhasil Dihapus');
    }
}
