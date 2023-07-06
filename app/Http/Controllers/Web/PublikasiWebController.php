<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Berita;
use App\Models\Publikasi;

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
    function showArtikel(){
        $data['list_artikel'] = Publikasi::where('kategori','Artikel')->get();
        $data['recent_artikel'] = Publikasi::where('kategori','Artikel')->orderBy('id', 'DESC')->take(4)->get();
        return view('front.publikasi.artikel',$data);
    }
    function showDetailArtikel($artikel){
        $data['artikel'] = Publikasi::find($artikel);
        $data['recent_artikel'] = Publikasi::where('kategori','Artikel')->orderBy('id', 'DESC')->take(4)->get();
        return view('front.publikasi.detail-artikel',$data);
    }
}
