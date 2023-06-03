<?php

namespace App\Http\Controllers\Publikasi;

use App\Http\Controllers\Controller;
use App\Models\Buletin;

class BuletinController extends Controller
{
    function index(){
        $data['list_buletin'] = Buletin::all();
        return view('content.publikasi.buletin.index',$data);
    }
    function create()
    {
        return view('content.publikasi.buletin.create');
    }
    function store(){
        $buletin = new Buletin();
        $buletin->ket = request('ket');
        $buletin->save();
        $buletin->handleUploadPdf();
        $buletin->handleUploadGambar();
        return redirect('data_manager/admin/buletin');
    }
    function update(Buletin $buletin)
    {
        $buletin->ket = request('ket');
        $buletin->save();
        if (request('file')) $buletin->handleUploadPdf();
        if (request('gambar')) $buletin->handleUploadGambar();
        return redirect('data_manager/admin/buletin');
    }
    function destroy(Buletin $buletin)
    {
        $buletin->delete();
        $buletin->handleDelete();
        $buletin->handleDeleteGambar();
        return redirect('data_manager/admin/buletin');
    }
}
