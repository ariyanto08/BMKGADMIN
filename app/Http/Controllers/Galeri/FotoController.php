<?php

namespace App\Http\Controllers\Galeri;

use App\Http\Controllers\Controller;
use App\Models\Foto;

class FotoController extends Controller
{
    function index(){
        $data['list_foto'] = Foto::all();
        return view('content.galeri.foto.index',$data);
    }
    function create()
    {
        return view('content.galeri.foto.create');
    }
    function store(){
        $foto = new Foto();
        $foto->ket = request('ket');
        $foto->save();
        $foto->handleUploadFoto();
        return redirect('data_manager/admin/foto')->with('success', 'Data Berhasil Ditambahkan');
    }
    function update(Foto $foto)
    {
        $foto->ket = request('ket');
        $foto->save();
        if (request('gambar')) $foto->handleUploadFoto();
        return redirect('data_manager/admin/foto')->with('warning', 'Data Berhasil Diedit');
    }
    function destroy(Foto $foto)
    {
        $foto->delete();
        $foto->handleDelete();

        return redirect('data_manager/admin/foto')->with('danger', 'Data Berhasil Dihapus');
    }
}
