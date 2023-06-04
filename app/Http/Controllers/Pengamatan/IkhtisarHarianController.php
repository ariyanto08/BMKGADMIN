<?php

namespace App\Http\Controllers\Pengamatan;


use App\Models\IkhtisarHarian;
use App\Http\Controllers\Controller;

class IkhtisarHarianController extends Controller
{
    function index(){
        $data['list_ikhtisarharian'] = IkhtisarHarian::all();
        return view('content.pengamatan.ikhtisar.ikhtisarharian.index',$data);
    }
    function create()
    {
        return view('content.pengamatan.ikhtisar.ikhtisarharian.create');
    }
    function store(){
        $ikhtisarharian = new IkhtisarHarian();
        $ikhtisarharian->ket = request('ket');
        $ikhtisarharian->save();
        $ikhtisarharian->handleUploadFoto();
        return redirect('data_manager/admin/ikhtisarharian')->with('success', 'Data Berhasil Ditambahkan');
    }
    function update(IkhtisarHarian $ikhtisarharian)
    {
        $ikhtisarharian->ket = request('ket');
        $ikhtisarharian->save();
        if (request('gambar')) $ikhtisarharian->handleUploadFoto();

        return redirect('data_manager/admin/ikhtisarharian')->with('warning', 'Data Berhasil Diedit');
    }
    function destroy(IkhtisarHarian $ikhtisarharian)
    {
        $ikhtisarharian->delete();
        $ikhtisarharian->handleDelete();

        return redirect('data_manager/admin/ikhtisarharian')->with('danger', 'Data Berhasil Dihapus');
    }
}
