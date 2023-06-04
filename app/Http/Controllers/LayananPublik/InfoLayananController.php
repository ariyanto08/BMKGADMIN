<?php

namespace App\Http\Controllers\LayananPublik;

use App\Http\Controllers\Controller;
use App\Models\InfoLayanan;

class InfoLayananController extends Controller
{
    function index(){
        $data['list_infolayanan'] =InfoLayanan::all();
        return view('content.layanan.infolayanan.index',$data);
    }
    function create()
    {
        return view('content.layanan.infolayanan.create');
    }
    function store(){
        $infolayanan = new InfoLayanan();
        $infolayanan->isi = request('isi');
        $infolayanan->save();
        return redirect('data_manager/admin/infolayanan')->with('success', 'Data Berhasil Ditambahkan');
    }
    function update(InfoLayanan $infolayanan)
    {
        $infolayanan->isi = request('isi');
        $infolayanan->save();
        return redirect('data_manager/admin/infolayanan')->with('warning', 'Data Berhasil Diedit');
    }
    function destroy(InfoLayanan $infolayanan)
    {
        $infolayanan->delete();
        return redirect('data_manager/admin/infolayanan')->with('danger', 'Data Berhasil Dihapus');
    }
}
