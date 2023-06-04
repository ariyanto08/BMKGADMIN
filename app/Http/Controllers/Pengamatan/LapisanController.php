<?php

namespace App\Http\Controllers\Pengamatan;

use App\Http\Controllers\Controller;
use App\Models\Lapisan;

class LapisanController extends Controller
{
    function index(){
        $data['list_lapisan'] = Lapisan::all();
        return view('content.pengamatan.angin.lapisan.index',$data);
    }
    function create()
    {
        return view('content.pengamatan.angin.lapisan.create');
    }
    function store(){
        $lapisan = new Lapisan();
        $lapisan->ket = request('ket');
        $lapisan->save();
        $lapisan->handleUploadFoto();
        return redirect('data_manager/admin/lapisan')->with('success', 'Data Berhasil Ditambahkan');
    }
    function update(Lapisan $lapisan)
    {
        $lapisan->ket = request('ket');
        $lapisan->save();
        if (request('gambar')) $lapisan->handleUploadFoto();

        return redirect('data_manager/admin/lapisan')->with('warning', 'Data Berhasil Diedit');
    }
    function destroy(Lapisan $lapisan)
    {
        $lapisan->delete();
        $lapisan->handleDelete();

        return redirect('data_manager/admin/lapisan')->with('danger', 'Data Berhasil Dihapus');
    }}
