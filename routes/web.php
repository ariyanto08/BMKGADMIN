<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Galeri\FotoController;
use App\Http\Controllers\Beranda\PegawaiController;
use App\Http\Controllers\Penerbangan\AcsController;
use App\Http\Controllers\Pengamatan\PetaController;
use App\Http\Controllers\Pengamatan\SuhuController;
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
use App\Http\Controllers\Prakiraan\Cuaca\PotensiController;
use App\Http\Controllers\LayananPublik\InfoLayananController;
use App\Http\Controllers\Pengamatan\IkhtisarHarianController;
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

Route::prefix('data_manager')->group(function () {
    Route::prefix('admin')->group(function () {
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

    });
});