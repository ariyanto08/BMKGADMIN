<?php

namespace App\Http\Controllers\Web;

use App\Models\Berita;
use App\Models\Prospel;
use App\Models\InfoLayanan;
use App\Http\Controllers\Controller;
use App\Models\Pelayanan;

class LayananController extends Controller
{
    function showProsedurLayanan()
    {
        $data['pelayanan'] = Prospel::all();
        $data['pelayanan'] = Prospel::latest()->get();
        return view('front.layananpublik.pelayanan', $data);
    }
    function showInfoLayanan()
    {
        $data['informasi'] = InfoLayanan::all()->toArray();
        $subBab1Filter = 'A. INFORMASI KHUSUS METEOROLOGI, KLIMATOLOGI, DAN GEOFISIKA';
        $subBab2Filter = 'B. INFORMASI KHUSUS METEOROLOGI , KLIMATOLGI DAN GEOFISIKA SESUAI PERMINTAAN';
        $subBab3Filter = 'A. JASA KONSULTASI METEOROLOGI';
        $subBab4Filter = 'B. JASA KONSULTASI KLIMATOLOGI';
        $data['filterBab1a'] = array_filter($data['informasi'], function ($row) use ($subBab1Filter) {
            return $row['sub_bab'] === $subBab1Filter;
        });
        $data['filterBab1b'] = array_filter($data['informasi'], function ($row) use ($subBab2Filter) {
            return $row['sub_bab'] === $subBab2Filter;
        });
        $data['filterBab2a'] = array_filter($data['informasi'], function ($row) use ($subBab3Filter) {
            return $row['sub_bab'] === $subBab3Filter;
        });
        $data['filterBab2b'] = array_filter($data['informasi'], function ($row) use ($subBab4Filter) {
            return $row['sub_bab'] === $subBab4Filter;
        });
        $data['filterInformasi'] = array_filter($data['informasi'],function($row){
            return isset($row['sub_isi']);
        });

        return view('front.layananpublik.informasilayanan', $data);
    }
    function showPembayaran(){
        return view('front.layananpublik.pembayaran');
    }
    function showSurat(){
        $data['surat'] = Pelayanan::all();
        $data['surat'] = Pelayanan::latest()->get();
        $data['recent_berita'] = Berita::orderBy('id', 'DESC')->take(4)->get();
        return view('front.layananpublik.pelayanan.contoh-surat-pengantar',$data);
    }
    function showRegulasi(){
        $data['regulasi'] = Pelayanan::all();
        $data['regulasi'] = Pelayanan::latest()->get();
        $data['recent_berita'] = Berita::orderBy('id', 'DESC')->take(4)->get();
        return view('front.layananpublik.pelayanan.regulasi',$data);
    }
}
