<?php

namespace App\Http\Controllers\Pengamatan;

use App\Http\Controllers\Controller;
use App\Models\Windrose;

class WindroseController extends Controller
{
    function index(){
        $data['list_windrose'] = Windrose::all();
        return view('content.pengamatan.angin.windrose.index',$data);
    }
    function create()
    {
        return view('content.pengamatan.angin.windrose.create');
    }
    function store(){
        $windrose = new Windrose();
        $windrose->ket = request('ket');
        $windrose->save();
        $windrose->handleUploadFoto();
        return redirect('data_manager/admin/windrose');
    }
    function update(Windrose $windrose)
    {
        $windrose->ket = request('ket');
        $windrose->save();
        if (request('gambar')) $windrose->handleUploadFoto();

        return redirect('data_manager/admin/windrose');
    }
    function destroy(Windrose $windrose)
    {
        $windrose->delete();
        $windrose->handleDelete();

        return redirect('data_manager/admin/windrose');
    }
}
