<?php

namespace App\Http\Controllers\Pengamatan;

use App\Http\Controllers\Controller;
use App\Models\Peta;
use Illuminate\Http\Request;

class PetaController extends Controller
{
    function index(){
        $data['list_peta'] = Peta::all();
        return view('content.pengamatan.curah.peta.index',$data);
    }
    function create()
    {
        return view('content.pengamatan.curah.peta.create');
    }
    function store(){
        $peta = new Peta();
        $peta->ket = request('ket');
        $peta->save();
        $peta->handleUploadFoto();
        return redirect('data_manager/admin/peta');
    }
    function update(Peta $peta)
    {
        $peta->ket = request('ket');
        $peta->save();
        if (request('gambar')) $peta->handleUploadFoto();

        return redirect('data_manager/admin/peta');
    }
    function destroy(Peta $peta)
    {
        $peta->delete();
        $peta->handleDelete();

        return redirect('data_manager/admin/peta');
    }
}
