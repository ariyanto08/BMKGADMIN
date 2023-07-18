<?php

namespace App\Http\Controllers\Web;

use App\Models\Dini;
use App\Models\Angin;
use App\Models\Mingguan;
use App\Http\Controllers\Controller;
use App\Models\HarianKtp;

class PrakiraanController extends Controller
{
    // Cuaca
    function showDini(){
        $data['list_dini'] = Dini::all();
        $data['list_dini'] = Dini::latest()->get();
        return view('front.prakiraan.cuaca.peringatan-dini-cuaca',$data);
    }
    function showKetapang(){
        $data['list_ketapang'] = HarianKtp::where('kabupaten', 'KETAPANG')->get();
        return view('front.prakiraan.cuaca.prakiraan-harian-ketapang',$data);
    }
    function showKKU(){
        $data['list_kku'] = HarianKtp::all();
        return view('front.prakiraan.cuaca.prakiraan-harian-kayong-utara',$data);
    }
    function showDampak(){
        return view('front.prakiraan.cuaca.prakiraan-cuaca-berbasis-dampak');
    }
    function showMingguan(){
        $data['list_mingguan'] = Mingguan::all();
        $data['list_mingguan'] = Mingguan::latest()->get();
        return view('front.prakiraan.cuaca.prakiraan-mingguan-ketapang',$data);
    }
    function showPotensi(){
        return view('front.prakiraan.cuaca.potensi-hujan-indonesia');
    }
    function showAngin(){
        $data['list_angin'] = Angin::all();
        $data['list_angin'] = Angin::latest()->get();
        return view('front.prakiraan.cuaca.prakiraan-angin-3000-feet',$data);
    }
    function showAwan(){
    return view('front.prakiraan.cuaca.potensi-pertumbuhan-awan-hujan');
    }
    function showKarhutla(){
    return view('front.prakiraan.cuaca.potensi-kemudahan-karhutla');
    }

    //Iklim
    function showDasarian(){
    return view('front.prakiraan.iklim.prakiraan-curah-hujan-dasarian');
    }
    function showBulanan(){
    return view('front.prakiraan.iklim.prakiraan-curah-hujan-bulanan');
    }
    function showSifat(){
    return view('front.prakiraan.iklim.prakiraan-sifat-hujan');
    }
    function showMusim(){
    return view('front.prakiraan.iklim.prakiraan-musim');
    }
    function showBanjir(){
    return view('front.prakiraan.iklim.potensi-banjir-dasarian');
    }
    function showBanjirBulanan(){
    return view('front.prakiraan.iklim.potensi-banjir-bulanan');
    }
    // Maritim
    function showDiniGelombang(){
        return view('front.prakiraan.maritim.peringatan-dini-gelombang');
    }
    function showTinggiGelombang(){
        return view('front.prakiraan.maritim.prakiraan-tinggi-gelombang');
    }
}
