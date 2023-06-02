<?php

namespace App\Http\Controllers\Pengamatan;

use App\Http\Controllers\Controller;
use App\Models\Analisis;

class AnalisisController extends Controller
{
    function index(){
        $data['list_analisis'] = Analisis::all();
        return view('content.pengamatan.curah.analisis.index',$data);
    }
    function create()
    {
        return view('content.pengamatan.curah.analisis.create');
    }
    function store(){
        $analisis = new Analisis();
        $analisis->bulan = request('bulan');
        $analisis->tahun = request('tahun');
        $analisis->save();
        $analisis->handleUploadGambarCh();
        $analisis->handleUploadGambarSifatCh();
        return redirect('data_manager/admin/analisis');
    }
    function update(Analisis $analisis)
    {
        $analisis->bulan = request('bulan');
        $analisis->tahun = request('tahun');
        if (request('gambar_ch')) $analisis->handleUploadGambarCh();
        if (request('gambar_sifat_ch')) $analisis->handleUploadGambarSifatCh();
        $analisis->save();

        return redirect('data_manager/admin/analisis');
    }
    function destroy(Analisis $analisis)
    {
        $analisis->delete();
        $analisis->handleDelete();
        $analisis->handleDeleteSifat();

        return redirect('data_manager/admin/analisis');
    }}
