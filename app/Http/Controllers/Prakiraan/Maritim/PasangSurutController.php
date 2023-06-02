<?php

namespace App\Http\Controllers\Prakiraan\Maritim;

use App\Http\Controllers\Controller;
use App\Models\PasangSurut;

class PasangSurutController extends Controller
{
    function index(){
        $data['list_pasangsurut'] = PasangSurut::all();
        return view('content.prakiraan.maritim.pasangsurut.index',$data);
    }
    function create()
    {
        return view('content.prakiraan.maritim.pasangsurut.create');
    }
    function store(){
        $pasangsurut = new PasangSurut();
        $pasangsurut->ket = request('ket');
        $pasangsurut->save();
        $pasangsurut->handleUploadFoto();
        return redirect('data_manager/admin/pasangsurut');
    }
    function update(PasangSurut $pasangsurut)
    {
        $pasangsurut->ket = request('ket');
        $pasangsurut->save();
        if (request('gambar')) $pasangsurut->handleUploadFoto();

        return redirect('data_manager/admin/pasangsurut');
    }
    function destroy(PasangSurut $pasangsurut)
    {
        $pasangsurut->delete();
        $pasangsurut->handleDelete();

        return redirect('data_manager/admin/pasangsurut');
    }
}
