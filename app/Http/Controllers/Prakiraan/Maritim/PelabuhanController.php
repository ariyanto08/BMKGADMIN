<?php

namespace App\Http\Controllers\Prakiraan\Maritim;

use App\Models\Pelabuhan;
use App\Http\Controllers\Controller;

class PelabuhanController extends Controller
{
    function index()
    {
        $data['list_pelabuhan'] = Pelabuhan::all();
        return view('content.prakiraan.maritim.pelabuhan.index', $data);
    }
    function create()
    {
        return view('content.prakiraan.maritim.pelabuhan.create');
    }
    function store()
    {
        $pelabuhan = new Pelabuhan();
        $pelabuhan->nama_pelabuhan = request('nama_pelabuhan');
        $pelabuhan->cuaca = request('cuaca');
        $pelabuhan->arah_angin = request('arah_angin');
        $pelabuhan->kecepatan_angin = request('kecepatan_angin');
        $pelabuhan->tinggi_gelombang = request('tinggi_gelombang');
        $pelabuhan->kategori_gelombang = request('kategori_gelombang');
        $pelabuhan->visibility = request('visibility');
        $pelabuhan->save();
        $pelabuhan->handleUploadFoto();
        return redirect('data_manager/admin/pelabuhan')->with('success', 'Data Berhasil Ditambahkan');
    }
    function update(Pelabuhan $pelabuhan)
    {
        $pelabuhan->nama_pelabuhan = request('nama_pelabuhan');
        $pelabuhan->cuaca = request('cuaca');
        $pelabuhan->arah_angin = request('arah_angin');
        $pelabuhan->kecepatan_angin = request('kecepatan_angin');
        $pelabuhan->tinggi_gelombang = request('tinggi_gelombang');
        $pelabuhan->kategori_gelombang = request('kategori_gelombang');
        $pelabuhan->visibility = request('visibility');
        $pelabuhan->save();
        if (request('gambar')) $pelabuhan->handleUploadFoto();

        return redirect('data_manager/admin/pelabuhan')->with('warning', 'Data Berhasil Diedit');
    }
    function destroy(Pelabuhan $pelabuhan)
    {
        $pelabuhan->delete();
        $pelabuhan->handleDelete();

        return redirect('data_manager/admin/pelabuhan')->with('danger', 'Data Berhasil Dihapus');
    }
}
