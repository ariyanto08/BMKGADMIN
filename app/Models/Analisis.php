<?php

namespace App\Models;

use App\Models\Model;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Analisis extends Model
{
    use HasFactory;
    protected $table = 'pengamatan_curahujan_analisis_bulanan';

    function handleUploadGambarCh()
    {
        $this->handleDelete();
        if (request()->hasFile('gambar_ch')) {
            $gambar_ch = request()->file('gambar_ch');
            $destination = "image/analisis";
            $randomStr = Str::random(5);
            $filename = $this->id . "-" . time() . "-" . $randomStr . "." . $gambar_ch->extension();
            $url =  $gambar_ch->storeAs($destination, $filename);
            $this->gambar_ch = "" . $url;
            $this->save();
        }
    }

    function handleDelete()
    {

        $gambar_ch = $this->gambar_ch;
        if ($gambar_ch) {
            $path = public_path($gambar_ch);
            if (file_exists($path)) {
                unlink($path);
            }
            return true;
        }
    }
    function handleUploadGambarSifatCh()
    {
        $this->handleDeleteSifat();
        if (request()->hasFile('gambar_sifat_ch')) {
            $gambar_sifat_ch = request()->file('gambar_sifat_ch');
            $destination = "image/analisis";
            $randomStr = Str::random(5);
            $filename = $this->id . "-" . time() . "-" . $randomStr . "." . $gambar_sifat_ch->extension();
            $url =  $gambar_sifat_ch->storeAs($destination, $filename);
            $this->gambar_sifat_ch = "" . $url;
            $this->save();
        }
    }

    function handleDeleteSifat()
    {

        $gambar_sifat_ch = $this->gambar_sifat_ch;
        if ($gambar_sifat_ch) {
            $path = public_path($gambar_sifat_ch);
            if (file_exists($path)) {
                unlink($path);
            }
            return true;
        }
    }
}
