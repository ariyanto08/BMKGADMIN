<?php

namespace App\Http\Controllers\Penerbangan;

use App\Http\Controllers\Controller;
use App\Models\Acs;

class AcsController extends Controller
{
    function index(){
        $data['list_acs'] = Acs::all();
        return view('content.penerbangan.acs.index',$data);
    }
    function create()
    {
        return view('content.penerbangan.acs.create');
    }
    function store(){
        $acs = new Acs();
        $acs->ket = request('ket');
        $acs->save();
        $acs->handleUploadPdf();
        return redirect('data_manager/admin/acs')->with('success', 'Data Berhasil Ditambahkan');
    }
    function update(Acs $acs)
    {
        $acs->ket = request('ket');
        $acs->save();
        if (request('file')) $acs->handleUploadPdf();
        return redirect('data_manager/admin/acs')->with('warning', 'Data Berhasil Diedit');
    }
    function destroy(Acs $acs)
    {
        $acs->delete();
        $acs->handleDelete();
        return redirect('data_manager/admin/acs')->with('danger', 'Data Berhasil Dihapus');
    }
}
