<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Berita;

class PublikasiWebController extends Controller
{
    function showBerita(){
        $data['list_berita'] = Berita::all();
        $data['recent_berita'] = Berita::orderBy('id', 'DESC')->take(4)->get();
        return view('front.publikasi.berita',$data);
    }
    function showDetailBerita($berita){
        $data['berita'] = Berita::find($berita);
        $data['recent_berita'] = Berita::orderBy('id', 'DESC')->take(4)->get();
        return view('front.publikasi.detail-berita',$data);
    }
}
