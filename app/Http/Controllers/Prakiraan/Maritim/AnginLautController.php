<?php

namespace App\Http\Controllers\Prakiraan\Maritim;

use App\Http\Controllers\Controller;
use App\Models\AnginLaut;

class AnginLautController extends Controller
{
    function index(){
        $data['list_anginlaut'] = AnginLaut::all();
        return view('content.prakiraan.maritim.kecepatan.index',$data);
    }
    function create()
    {
        return view('content.prakiraan.maritim.kecepatan.create');
    }
    function store(){
        $anginlaut = new AnginLaut();
        $anginlaut->parameter = request('parameter');
        $anginlaut->tanggal = request('tanggal');
        $anginlaut->model_run = request('model_run');
        $anginlaut->jam = request('jam');
        $anginlaut->save();
        $anginlaut->handleUploadFoto();
        return redirect('data_manager/admin/kecepatan')->with('success', 'Data Berhasil Ditambahkan');
    }
    function update(AnginLaut $anginlaut)
    {
        $anginlaut->parameter = request('parameter');
        $anginlaut->tanggal = request('tanggal');
        $anginlaut->model_run = request('model_run');
        $anginlaut->jam = request('jam');
        $anginlaut->save();
        if (request('gambar')) $anginlaut->handleUploadFoto();
        return redirect('data_manager/admin/kecepatan')->with('warning', 'Data Berhasil Diedit');
    }
    function destroy(AnginLaut $anginlaut)
    {
        $anginlaut->delete();
        $anginlaut->handleDelete();

        return redirect('data_manager/admin/kecepatan')->with('danger', 'Data Berhasil Dihapus');
    }
}
