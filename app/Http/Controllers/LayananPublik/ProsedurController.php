<?php

namespace App\Http\Controllers\LayananPublik;

use App\Http\Controllers\Controller;
use App\Models\Prosedur;

class ProsedurController extends Controller
{
    function index(){
        $data['list_prosedur'] = Prosedur::all();
        return view('content.layanan.prosedur.index',$data);
    }
    function create()
    {
        return view('content.layanan.prosedur.create');
    }
    function store(){
        $prosedur = new Prosedur();
        $prosedur->isi = request('isi');
        $prosedur->kategori = request('kategori');
        $prosedur->save();
        return redirect('data_manager/admin/prosedur');
    }
    function update(Prosedur $prosedur)
    {
        $prosedur->isi = request('isi');
        $prosedur->kategori = request('kategori');
        $prosedur->save();
        return redirect('data_manager/admin/prosedur');
    }
    function destroy(Prosedur $prosedur)
    {
        $prosedur->delete();
        return redirect('data_manager/admin/prosedur');
    }
}
