<?php

namespace App\Http\Controllers\Pengamatan;

use App\Http\Controllers\Controller;
use App\Models\Suhu;
use Illuminate\Http\Request;

class SuhuController extends Controller
{
    function index(){
        $data['list_suhu'] = Suhu::all();
        return view('content.pengamatan.ikhtisar.suhu.index',$data);
    }
    function create()
    {
        return view('content.pengamatan.ikhtisar.suhu.create');
    }
    function store(){
        $suhu = new Suhu();
        $suhu->ket = request('ket');
        $suhu->save();
        $suhu->handleUploadFoto();
        return redirect('data_manager/admin/suhu');
    }
    function update(Suhu $suhu)
    {
        $suhu->ket = request('ket');
        $suhu->save();
        if (request('gambar')) $suhu->handleUploadFoto();

        return redirect('data_manager/admin/suhu');
    }
    function destroy(Suhu $suhu)
    {
        $suhu->delete();
        $suhu->handleDelete();

        return redirect('data_manager/admin/suhu');
    }
}
