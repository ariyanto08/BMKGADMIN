<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\User\UserController;
use App\Http\Controllers\Galeri\FotoController;
use App\Http\Controllers\Beranda\PegawaiController;
use App\Http\Controllers\Penerbangan\AcsController;
use App\Http\Controllers\Pengamatan\PetaController;
use App\Http\Controllers\Pengamatan\SuhuController;
use App\Http\Controllers\Publikasi\BeritaController;
use App\Http\Controllers\Publikasi\ArtikelController;
use App\Http\Controllers\Publikasi\BuletinController;
use App\Http\Controllers\Publikasi\EdukasiController;
use App\Http\Controllers\Pengamatan\EkstrimController;
use App\Http\Controllers\Pengamatan\LapisanController;
use App\Http\Controllers\Beranda\PenghargaanController;
use App\Http\Controllers\Pengamatan\AnalisisController;
use App\Http\Controllers\Pengamatan\KalenderController;
use App\Http\Controllers\Pengamatan\Stamet30Controller;
use App\Http\Controllers\Pengamatan\WindroseController;
use App\Http\Controllers\Pengamatan\RangkumanController;
use App\Http\Controllers\LayananPublik\ProspelController;
use App\Http\Controllers\Penerbangan\FlightDocController;
use App\Http\Controllers\Pengamatan\KelembapanController;
use App\Http\Controllers\Prakiraan\Cuaca\AnginController;
use App\Http\Controllers\LayananPublik\ProsedurController;
use App\Http\Controllers\Publikasi\TransparansiController;
use App\Http\Controllers\LayananPublik\PelayananController;
use App\Http\Controllers\Prakiraan\Cuaca\PotensiController;
use App\Http\Controllers\LayananPublik\InfoLayananController;
use App\Http\Controllers\Pengamatan\IkhtisarHarianController;
use App\Http\Controllers\Prakiraan\Cuaca\HarianKtpController;
use App\Http\Controllers\LayananPublik\PelayananDataController;
use App\Http\Controllers\Prakiraan\Cuaca\MingguanKtpController;
use App\Http\Controllers\Prakiraan\Maritim\AnginLautController;
use App\Http\Controllers\Prakiraan\Maritim\PelabuhanController;
use App\Http\Controllers\Prakiraan\Maritim\PasangSurutController;

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


Route::prefix('data_manager')->middleware('auth')->group(function () {
    Route::prefix('admin')->middleware('auth')->group(function () {
        Route::resource('pegawai', PegawaiController::class);
        Route::resource('penghargaan', PenghargaanController::class);
        Route::resource('mingguan', MingguanKtpController::class);
        Route::resource('angin', AnginController::class);
        Route::resource('potensi', PotensiController::class);
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
        Route::resource('flightdoc', FlightDocController::class);
        Route::resource('acs', AcsController::class);
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
        Route::resource('artikel', ArtikelController::class);

        Route::get('berita', [BeritaController::class, 'index']);
        Route::get('berita/create', [BeritaController::class, 'create']);
        Route::post('berita', [BeritaController::class, 'store']);
        Route::get('berita/{berita}', [BeritaController::class, 'show']);
        Route::get('berita/{berita}/edit', [BeritaController::class, 'edit']);
        Route::put('berita/{berita}', [BeritaController::class, 'update']);
        Route::delete('berita/{berita}', [BeritaController::class, 'destroy']);

        Route::resource('buletin', BuletinController::class);
        Route::resource('edukasi', EdukasiController::class);
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
