<?php

namespace App\Http\Controllers\Prakiraan\Cuaca;

use App\Models\Mingguan;
use App\Http\Controllers\Controller;

class MingguanKtpController extends Controller
{
    function index(){
        $data['list_mingguan'] = Mingguan::all();
        return view('content.prakiraan.cuaca.mingguan.index',$data);
    }
    function create()
    {
        return view('content.prakiraan.cuaca.mingguan.create');
    }
    function store(){
        $mingguan = new Mingguan();
        $mingguan->ket = request('ket');
        $mingguan->save();
        $mingguan->handleUploadFoto();
        return redirect('data_manager/admin/mingguan');
    }
    function update(Mingguan $mingguan)
    {
        $mingguan->ket = request('ket');
        $mingguan->save();
        if (request('gambar')) $mingguan->handleUploadFoto();
        return redirect('data_manager/admin/mingguan');
    }
    function destroy(Mingguan $mingguan)
    {
        $mingguan->delete();
        $mingguan->handleDelete();

        return redirect('data_manager/admin/mingguan');
    }
}
