<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Foto;

class GaleriController extends Controller
{
    function showFoto(){
        $data['list_foto']= Foto::all();
        return view('front.galeri.foto',$data);
    }
    function showVideo(){
        return view('front.galeri.video');
    }
}
