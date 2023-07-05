<?php

namespace App\Http\Controllers\Prakiraan\Cuaca;

use App\Models\Dini;
use App\Http\Controllers\Controller;

class DiniController extends Controller
{
    function index(){
        $data['list_dini'] = Dini::all();
        return view('content.prakiraan.cuaca.dini.index',$data);
    }
    function create()
    {
        return view('content.prakiraan.cuaca.dini.create');
    }
    function store(){
        $dini = new Dini();
        $dini->ket = request('ket');
        $dini->save();
        $dini->handleUploadPdf();
        return redirect('data_manager/admin/dini')->with('success', 'Data Berhasil Ditambahkan');
    }
    function update(Dini $dini)
    {
        $dini->ket = request('ket');
        $dini->save();
        if (request('file')) $dini->handleUploadPdf();
        return redirect('data_manager/admin/dini')->with('warning', 'Data Berhasil Diedit');
    }
    function destroy(Dini $dini)
    {
        $dini->delete();
        $dini->handleDelete();
        return redirect('data_manager/admin/dini')->with('danger', 'Data Berhasil Dihapus');
    }
}
