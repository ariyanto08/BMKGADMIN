<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Berita;
use App\Models\Edukasi;
use App\Models\Publikasi;
use App\Models\Transparansi;

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
        $data['list_artikel'] = Publikasi::latest()->get();
        $data['recent_artikel'] = Publikasi::where('kategori','Artikel')->orderBy('id', 'DESC')->take(4)->get();
        return view('front.publikasi.artikel',$data);
    }
    function showDetailArtikel($artikel){
        $data['artikel'] = Publikasi::find($artikel);
        $data['recent_artikel'] = Publikasi::where('kategori','Artikel')->orderBy('id', 'DESC')->take(4)->get();
        return view('front.publikasi.detail-artikel',$data);
    }
    function showBuletin(){
        $data['list_buletin'] = Publikasi::where('kategori','Buletin')->get();
        $data['list_buletin'] = Publikasi::latest()->get();
        $data['recent_buletin'] = Publikasi::where('kategori','Buletin')->orderBy('id', 'DESC')->take(4)->get();
        return view('front.publikasi.buletin',$data);
    }
    function showDetailBuletin($buletin){
        $data['buletin'] = Publikasi::find($buletin);
        $data['recent_buletin'] = Publikasi::where('kategori','Buletin')->orderBy('id', 'DESC')->take(4)->get();
        return view('front.publikasi.detail-buletin',$data);
    }
    function showEdukasi(){
        $data['list_edukasi'] = Edukasi::all();
        $data['list_edukasi'] = Edukasi::latest()->get();
        $data['recent_berita'] = Berita::orderBy('id', 'DESC')->take(4)->get();
        return view('front.publikasi.edukasi-cuaca',$data);
    }
    function showTransparansi(){
        $data['list_rkt'] = Transparansi::where('kategori','RKT')->get();
        $data['list_rkt'] = Transparansi::latest()->get();
        $data['list_perjanjian'] = Transparansi::where('kategori','Perjanjian Kinerja')->get();
        $data['list_perjanjian'] = Transparansi::latest()->get();
        return view('front.publikasi.transparansi-kerja',$data);
    }
}
