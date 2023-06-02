<?php

namespace App\Http\Controllers\LayananPublik;

use App\Models\Prospel;
use App\Http\Controllers\Controller;

class ProspelController extends Controller
{
    function index(){
        $data['list_prospel'] = Prospel::all();
        return view('content.layanan.prospel.index',$data);
    }
    function create()
    {
        return view('content.layanan.prospel.create');
    }
    function store(){
        $prospel = new Prospel();
        $prospel->ket = request('ket');
        $prospel->save();
        $prospel->handleUploadGambar();
        return redirect('data_manager/admin/prospel');
    }
    function update(Prospel $prospel)
    {
        $prospel->ket = request('ket');
        $prospel->save();
        if (request('gambar')) $prospel->handleUploadGambar();

        return redirect('data_manager/admin/prospel');
    }
    function destroy(Prospel $prospel)
    {
        $prospel->delete();
        $prospel->handleDelete();

        return redirect('data_manager/admin/prospel');
    }
}
