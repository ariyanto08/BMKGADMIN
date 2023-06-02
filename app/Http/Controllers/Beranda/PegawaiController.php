<?php

namespace App\Http\Controllers\Beranda;

use App\Models\Pegawai;
use App\Http\Controllers\Controller;

class PegawaiController extends Controller
{
    function index(){
        $data['list_pegawai'] = Pegawai::all();
        return view('content.beranda.pegawai.index',$data);
    }
    function create()
    {
        return view('content.beranda.pegawai.create');
    }
    function store(){
        $pegawai = new Pegawai();
        $pegawai->nama = request('nama');
        $pegawai->kategori = request('kategori');
        $pegawai->save();
        $pegawai->handleUploadFoto();
        return redirect('data_manager/admin/pegawai');
    }
    function update(Pegawai $pegawai)
    {
        $pegawai->nama = request('nama');
        $pegawai->kategori = request('kategori');
        $pegawai->save();
        if (request('foto')) $pegawai->handleUploadFoto();

        return redirect('data_manager/admin/pegawai');
    }
    function destroy(Pegawai $pegawai)
    {
        $pegawai->delete();
        $pegawai->handleDelete();

        return redirect('data_manager/admin/pegawai');
    }
}
