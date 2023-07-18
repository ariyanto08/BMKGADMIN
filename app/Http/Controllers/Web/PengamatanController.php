<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;

class PengamatanController extends Controller
{
    function showKalbar(){
        return view('front.pengamatan.citra-satelit.kalbar');
    }
    function showCloud(){
        return view('front.pengamatan.citra-satelit.cloud-type-indo');
    }
    function showSebaran(){
        return view('front.pengamatan.citra-satelit.sebaran-asap');
    }
    function showAkumulasi(){
        return view('front.pengamatan.citra-satelit.curah-hujan-akumulasi');
    }
    function showIndo(){
        return view('front.pengamatan.citra-radar-cuaca.indonesia');
    }
    function showSintang(){
        return view('front.pengamatan.citra-radar-cuaca.sintang');
    }
    function showPonti(){
        return view('front.pengamatan.citra-radar-cuaca.pontianak');
    }
    function showPangkalanbun(){
        return view('front.pengamatan.citra-radar-cuaca.pangkalanbun');
    }
    function showTitik(){
        return view('front.pengamatan.titik-panas-kalbar');
    }
}
