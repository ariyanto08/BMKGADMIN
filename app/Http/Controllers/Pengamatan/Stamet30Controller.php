<?php

namespace App\Http\Controllers\Pengamatan;

use App\Http\Controllers\Controller;
use App\Models\Stamet30;

class Stamet30Controller extends Controller
{
    function index(){
        $data['list_stamet30'] = Stamet30::all();
        return view('content.pengamatan.curah.stamet30.index',$data);
    }
    function create()
    {
        return view('content.pengamatan.curah.stamet30.create');
    }
    function store(){
        $stamet30 = new Stamet30();
        $stamet30->ket = request('ket');
        $stamet30->save();
        $stamet30->handleUploadFoto();
        return redirect('data_manager/admin/stamet30')->with('success', 'Data Berhasil Ditambahkan');
    }
    function update(Stamet30 $stamet30)
    {
        $stamet30->ket = request('ket');
        $stamet30->save();
        if (request('gambar')) $stamet30->handleUploadFoto();

        return redirect('data_manager/admin/stamet30')->with('warning', 'Data Berhasil Diedit');
    }
    function destroy(Stamet30 $stamet30)
    {
        $stamet30->delete();
        $stamet30->handleDelete();

        return redirect('data_manager/admin/stamet30')->with('danger', 'Data Berhasil Dihapus');
    }
}
