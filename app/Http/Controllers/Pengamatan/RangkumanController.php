<?php

namespace App\Http\Controllers\Pengamatan;

use App\Http\Controllers\Controller;
use App\Models\Rangkuman;

class RangkumanController extends Controller
{
    function index(){
        $data['list_rangkuman'] = Rangkuman::all();
        return view('content.pengamatan.ikhtisar.rangkuman.index',$data);
    }
    function create()
    {
        return view('content.pengamatan.ikhtisar.rangkuman.create');
    }
    function store(){
        $rangkuman = new Rangkuman();
        $rangkuman->ket = request('ket');
        $rangkuman->save();
        $rangkuman->handleUploadFoto();
        return redirect('data_manager/admin/rangkuman');
    }
    function update(Rangkuman $rangkuman)
    {
        $rangkuman->ket = request('ket');
        $rangkuman->save();
        if (request('gambar')) $rangkuman->handleUploadFoto();

        return redirect('data_manager/admin/rangkuman');
    }
    function destroy(Rangkuman $rangkuman)
    {
        $rangkuman->delete();
        $rangkuman->handleDelete();

        return redirect('data_manager/admin/rangkuman');
    }
}
