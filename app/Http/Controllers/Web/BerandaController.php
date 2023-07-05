<?php

namespace App\Http\Controllers\Web;

use App\Models\Berita;
use App\Models\Pegawai;
use App\Models\Penghargaan;
use App\Http\Controllers\Controller;

class BerandaController extends Controller
{
    function showProfil(){
        return view('front.beranda.profil-kantor');
    }
    function showSejarah(){
        return view('front.beranda.sejarah-kantor');
    }
    function showPegawai(){
        $data['list_pegawai'] = Pegawai::all();
        return view('front.beranda.pegawai',$data);
    }
    function showPenghargaan(){
        $data['list_penghargaan'] = Penghargaan::all();
        $data['recent_berita'] = Berita::orderBy('id', 'DESC')->take(4)->get();
        return view('front.beranda.penghargaan',$data);
    }
}
