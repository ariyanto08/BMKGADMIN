<?php

namespace App\Http\Controllers\Pengamatan;

use App\Http\Controllers\Controller;
use App\Models\Ekstrim;

class EkstrimController extends Controller
{
    function index(){
        $data['list_ekstrim'] = Ekstrim::all();
        return view('content.pengamatan.ikhtisar.ekstrim.index',$data);
    }
    function create()
    {
        return view('content.pengamatan.ikhtisar.ekstrim.create');
    }
    function store(){
        $ekstrim = new Ekstrim();
        $ekstrim->ket = request('ket');
        $ekstrim->save();
        $ekstrim->handleUploadFoto();
        return redirect('data_manager/admin/ekstrim')->with('success', 'Data Berhasil Ditambahkan');
    }
    function update(Ekstrim $ekstrim)
    {
        $ekstrim->ket = request('ket');
        $ekstrim->save();
        if (request('gambar')) $ekstrim->handleUploadFoto();

        return redirect('data_manager/admin/ekstrim')->with('warning', 'Data Berhasil Diedit');
    }
    function destroy(Ekstrim $ekstrim)
    {
        $ekstrim->delete();
        $ekstrim->handleDelete();

        return redirect('data_manager/admin/ekstrim')->with('danger', 'Data Berhasil Dihapus');
    }
}
