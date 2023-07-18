<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Foto;

class GaleriController extends Controller
{
    function showFoto(){
        $data['list_foto']= Foto::all();
        $data['list_foto'] = Foto::latest()->get();
        return view('front.galeri.foto',$data);
    }
    function showVideo(){
        return view('front.galeri.video');
    }
}
