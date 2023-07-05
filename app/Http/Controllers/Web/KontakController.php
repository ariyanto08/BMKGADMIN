<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
class KontakController extends Controller
{
    function showKontak(){
        return view('front.kontak.kontak');
    }
}
