<?php

namespace App\Http\Controllers\Prakiraan\Cuaca;

use App\Models\Potensi;
use App\Http\Controllers\Controller;

class PotensiController extends Controller
{
    function index(){
        $data['list_potensi'] = Potensi::all();
        return view('content.prakiraan.cuaca.potensi.index',$data);
    }
    function create()
    {
        return view('content.prakiraan.cuaca.potensi.create');
    }
    function store(){
        $potensi = new Potensi();
        $potensi->ket = request('ket');
        $potensi->save();
        $potensi->handleUploadPdf();
        return redirect('data_manager/admin/potensi');
    }
    function update(Potensi $potensi)
    {
        $potensi->ket = request('ket');
        $potensi->save();
        if (request('file')) $potensi->handleUploadPdf();
        return redirect('data_manager/admin/potensi');
    }
    function destroy(Potensi $potensi)
    {
        $potensi->delete();
        $potensi->handleDelete();
        return redirect('data_manager/admin/potensi');
    }
}
