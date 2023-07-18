<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\User\UserController;
use App\Http\Controllers\Galeri\FotoController;
use App\Http\Controllers\Beranda\PegawaiController;
use App\Http\Controllers\Pengamatan\PetaController;
use App\Http\Controllers\Pengamatan\SuhuController;
use App\Http\Controllers\Publikasi\BeritaController;
use App\Http\Controllers\Publikasi\EdukasiController;
use App\Http\Controllers\Pengamatan\EkstrimController;
use App\Http\Controllers\Pengamatan\LapisanController;
use App\Http\Controllers\Beranda\PenghargaanController;
use App\Http\Controllers\Web\KontakController;
use App\Http\Controllers\Pengamatan\AnalisisController;
use App\Http\Controllers\Pengamatan\KalenderController;
use App\Http\Controllers\Pengamatan\Stamet30Controller;
use App\Http\Controllers\Pengamatan\WindroseController;
use App\Http\Controllers\Publikasi\PublikasiController;
use App\Http\Controllers\Pengamatan\RangkumanController;
use App\Http\Controllers\LayananPublik\ProspelController;
use App\Http\Controllers\Pengamatan\KelembapanController;
use App\Http\Controllers\Prakiraan\Cuaca\AnginController;
use App\Http\Controllers\LayananPublik\ProsedurController;
use App\Http\Controllers\Publikasi\TransparansiController;
use App\Http\Controllers\LayananPublik\PelayananController;
use App\Http\Controllers\Penerbangan\PenerbanganController;
use App\Http\Controllers\LayananPublik\InfoLayananController;
use App\Http\Controllers\Pengamatan\IkhtisarHarianController;
use App\Http\Controllers\Prakiraan\Cuaca\HarianKtpController;
use App\Http\Controllers\LayananPublik\PelayananDataController;
use App\Http\Controllers\Prakiraan\Cuaca\DiniController;
use App\Http\Controllers\Prakiraan\Cuaca\MingguanKtpController;
use App\Http\Controllers\Prakiraan\Maritim\AnginLautController;
use App\Http\Controllers\Prakiraan\Maritim\PelabuhanController;
use App\Http\Controllers\Prakiraan\Maritim\PasangSurutController;
use App\Http\Controllers\Web\BerandaController;
use App\Http\Controllers\Web\GaleriController;
use App\Http\Controllers\Web\LayananController;
use App\Http\Controllers\Web\PengamatanController;
use App\Http\Controllers\Web\PrakiraanController;
use App\Http\Controllers\Web\PublikasiWebController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('login', [AuthController::class, 'showLogin'])->name('login');
Route::post('login', [AuthController::class, 'loginproses']);
Route::get('logout', [AuthController::class, 'logout']);

//admin
Route::prefix('data_manager')->middleware('auth')->group(function () {
    Route::prefix('admin')->middleware('auth')->group(function () {
        Route::resource('pegawai', PegawaiController::class);
        Route::resource('penghargaan', PenghargaanController::class);
        Route::resource('mingguan', MingguanKtpController::class);
        Route::resource('angin', AnginController::class);
        Route::resource('dini', DiniController::class);
        //start kecepatan
        Route::get('kecepatan', [AnginLautController::class, 'index']);
        Route::get('kecepatan/create', [AnginLautController::class, 'create']);
        Route::post('kecepatan', [AnginLautController::class, 'store']);
        Route::get('kecepatan/{anginlaut}', [AnginLautController::class, 'show']);
        Route::get('kecepatan/{anginlaut}/edit', [AnginLautController::class, 'edit']);
        Route::put('kecepatan/{anginlaut}', [AnginLautController::class, 'update']);
        Route::delete('kecepatan/{anginlaut}', [AnginLautController::class, 'destroy']);
        //end
        Route::resource('pasangsurut', PasangSurutController::class);
        Route::resource('pelabuhan', PelabuhanController::class);
        Route::resource('penerbangan', PenerbanganController::class);
        Route::resource('ikhtisarharian', IkhtisarHarianController::class);
        Route::resource('rangkuman', RangkumanController::class);
        Route::resource('ekstrim', EkstrimController::class);
        Route::resource('suhu', SuhuController::class);
        Route::resource('kelembapan', KelembapanController::class);
        Route::resource('kalender', KalenderController::class);
        Route::resource('lapisan', LapisanController::class);
        Route::resource('windrose', WindroseController::class);
        Route::resource('stamet30', Stamet30Controller::class);
        Route::resource('peta', PetaController::class);

        Route::get('analisis', [AnalisisController::class, 'index']);
        Route::get('analisis/create', [AnalisisController::class, 'create']);
        Route::post('analisis', [AnalisisController::class, 'store']);
        Route::get('analisis/{analisis}', [AnalisisController::class, 'show']);
        Route::get('analisis/{analisis}/edit', [AnalisisController::class, 'edit']);
        Route::put('analisis/{analisis}', [AnalisisController::class, 'update']);
        Route::delete('analisis/{analisis}', [AnalisisController::class, 'destroy']);

        Route::resource('prospel', ProspelController::class);
        Route::resource('foto', FotoController::class);
        Route::resource('infolayanan', InfoLayananController::class);
        Route::resource('publikasi', PublikasiController::class);
        Route::resource('edukasi', EdukasiController::class);

        Route::get('berita', [BeritaController::class, 'index']);
        Route::get('berita/create', [BeritaController::class, 'create']);
        Route::post('berita', [BeritaController::class, 'store']);
        Route::get('berita/{berita}', [BeritaController::class, 'show']);
        Route::get('berita/{berita}/edit', [BeritaController::class, 'edit']);
        Route::put('berita/{berita}', [BeritaController::class, 'update']);
        Route::delete('berita/{berita}', [BeritaController::class, 'destroy']);

        Route::resource('transparansi', TransparansiController::class);
        Route::resource('pelayanan', PelayananController::class);
        Route::resource('prosedur', ProsedurController::class);
        Route::resource('user', UserController::class);

        Route::get('pelayanandata', [PelayananDataController::class, 'index']);
        Route::delete('pelayanandata/{pelayanadata}', [PelayananDataController::class, 'destroy']);

        Route::get('harianktp', [HarianKtpController::class, 'index']);
        Route::post('harianktp', HarianKtpController::class)->name('harianktp');
        Route::delete('harianktp/{harianktp}', [HarianKtpController::class, 'destroy']);


    });

});

//front
Route::get('beranda/profil-kantor', [BerandaController::class, 'showProfil']);
Route::get('beranda/sejarah-kantor', [BerandaController::class, 'showSejarah']);
Route::get('beranda/pegawai', [BerandaController::class, 'showPegawai']);
Route::get('beranda/penghargaan', [BerandaController::class, 'showPenghargaan']);
Route::get('prakiraan/cuaca/peringatan-dini-cuaca', [PrakiraanController::class, 'showDini']);
Route::get('prakiraan/cuaca/prakiraan-harian-ketapang', [PrakiraanController::class, 'showKetapang']);
Route::get('prakiraan/cuaca/prakiraan-harian-kayong-utara', [PrakiraanController::class, 'showKKU']);
Route::get('prakiraan/cuaca/prakiraan-cuaca-berbasis-dampak', [PrakiraanController::class, 'showDampak']);
Route::get('prakiraan/cuaca/prakiraan-mingguan-ketapang', [PrakiraanController::class, 'showMingguan']);
Route::get('prakiraan/cuaca/potensi-hujan-indonesia', [PrakiraanController::class, 'showPotensi']);
Route::get('prakiraan/cuaca/prakiraan-angin-3000-feet', [PrakiraanController::class, 'showAngin']);
Route::get('prakiraan/cuaca/potensi-pertumbuhan-awan-hujan', [PrakiraanController::class, 'showAwan']);
Route::get('prakiraan/cuaca/potensi-kemudahan-karhutla', [PrakiraanController::class, 'showKarhutla']);
Route::get('prakiraan/iklim/prakiraan-curah-hujan-dasarian', [PrakiraanController::class, 'showDasarian']);
Route::get('prakiraan/iklim/prakiraan-curah-hujan-bulanan', [PrakiraanController::class, 'showBulanan']);
Route::get('prakiraan/iklim/prakiraan-sifat-hujan', [PrakiraanController::class, 'showSifat']);
Route::get('prakiraan/iklim/prakiraan-musim', [PrakiraanController::class, 'showMusim']);
Route::get('prakiraan/iklim/potensi-banjir-dasarian', [PrakiraanController::class, 'showBanjir']);
Route::get('prakiraan/iklim/potensi-banjir-bulanan', [PrakiraanController::class, 'showBanjirBulanan']);
Route::get('prakiraan/maritim/peringatan-dini-gelombang', [PrakiraanController::class, 'showDiniGelombang']);
Route::get('prakiraan/maritim/prakiraan-tinggi-gelombang', [PrakiraanController::class, 'showTinggiGelombang']);
Route::get('kontak',[KontakController::class,'showKontak']);
Route::get('galeri/video',[GaleriController::class,'showVideo']);
Route::get('galeri/foto',[GaleriController::class,'showFoto']);
Route::get('publikasi/berita',[PublikasiWebController::class,'showBerita']);
Route::get('berita/detail-berita/{berita}',[PublikasiWebController::class,'showDetailBerita']);
Route::get('publikasi/artikel',[PublikasiWebController::class,'showArtikel']);
Route::get('artikel/detail-artikel/{artikel}',[PublikasiWebController::class,'showDetailArtikel']);
Route::get('publikasi/buletin',[PublikasiWebController::class,'showBuletin']);
Route::get('buletin/detail-buletin/{buletin}',[PublikasiWebController::class,'showDetailBuletin']);
Route::get('publikasi/edukasi-cuaca',[PublikasiWebController::class,'showEdukasi']);
Route::get('publikasi/transparansi-kerja',[PublikasiWebController::class,'showTransparansi']);
Route::get('layananpublik/pelayanan',[LayananController::class,'showProsedurLayanan']);
Route::get('layananpublik/informasilayanan',[LayananController::class,'showInfoLayanan']);
Route::get('layananpublik/pembayaran',[LayananController::class,'showPembayaran']);
Route::get('layananpublik/pelayanan/regulasi',[LayananController::class,'showRegulasi']);
Route::get('layananpublik/pelayanan/contoh-surat-pengantar',[LayananController::class,'showSurat']);
Route::get('pengamatan/citra-satelit/kalbar',[PengamatanController::class,'showKalbar']);
Route::get('pengamatan/citra-satelit/cloud-type-indo',[PengamatanController::class,'showCloud']);
Route::get('pengamatan/citra-satelit/sebaran-asap',[PengamatanController::class,'showSebaran']);
Route::get('pengamatan/citra-satelit/curah-hujan-akumulasi',[PengamatanController::class,'showAkumulasi']);
Route::get('pengamatan/citra-radar-cuaca/indonesia',[PengamatanController::class,'showIndo']);
Route::get('pengamatan/citra-radar-cuaca/sintang',[PengamatanController::class,'showSintang']);
Route::get('pengamatan/citra-radar-cuaca/pontianak',[PengamatanController::class,'showPonti']);
Route::get('pengamatan/citra-radar-cuaca/pangkalanbun',[PengamatanController::class,'showPangkalanbun']);
Route::get('pengamatan/titik-panas-kalbar',[PengamatanController::class,'showTitik']);
