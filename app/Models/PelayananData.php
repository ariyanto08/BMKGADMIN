<?php

namespace App\Models;

use App\Models\Model;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class PelayananData extends Model
{
    use HasFactory;
    protected $table = 'layanan_publik_pelayanan_data_informasi';

    function handleUploadSuPengantar()
    {
        $this->handleDeleteSuPengantar();
        if (request()->hasFile('su_pengantar')) {
            $gambar = request()->file('su_pengantar');
            $destination = "image/layanandata";
            $randomStr = Str::random(5);
            $filename = $this->id . "-" . time() . "-" . $randomStr . "." . $gambar->extension();
            $url =  $gambar->storeAs($destination, $filename);
            $this->su_pengantar = "" . $url;
            $this->save();
        }
    }

    function handleDeleteSuPengantar()
    {

        $gambar = $this->su_pengantar;
        if ($gambar) {
            $path = public_path($gambar);
            if (file_exists($path)) {
                unlink($path);
            }
            return true;
        }
    }

    function handleUploadSuPernyataan()
    {
        $this->handleDeleteSuPernyataan();
        if (request()->hasFile('su_pernyataan')) {
            $gambar = request()->file('su_pernyataan');
            $destination = "image/layanandata";
            $randomStr = Str::random(5);
            $filename = $this->id . "-" . time() . "-" . $randomStr . "." . $gambar->extension();
            $url =  $gambar->storeAs($destination, $filename);
            $this->su_pernyataan = "" . $url;
            $this->save();
        }
    }

    function handleDeleteSuPernyataan()
    {

        $gambar = $this->su_pernyataan;
        if ($gambar) {
            $path = public_path($gambar);
            if (file_exists($path)) {
                unlink($path);
            }
            return true;
        }
    }

    function handleUploadProposal()
    {
        $this->handleDeleteProposal();
        if (request()->hasFile('proposal')) {
            $gambar = request()->file('proposal');
            $destination = "image/layanandata";
            $randomStr = Str::random(5);
            $filename = $this->id . "-" . time() . "-" . $randomStr . "." . $gambar->extension();
            $url =  $gambar->storeAs($destination, $filename);
            $this->proposal = "" . $url;
            $this->save();
        }
    }

    function handleDeleteProposal()
    {

        $gambar = $this->proposal;
        if ($gambar) {
            $path = public_path($gambar);
            if (file_exists($path)) {
                unlink($path);
            }
            return true;
        }
    }

    function handleUploadKtp()
    {
        $this->handleDeleteKtp();
        if (request()->hasFile('ktp')) {
            $gambar = request()->file('ktp');
            $destination = "image/layanandata";
            $randomStr = Str::random(5);
            $filename = $this->id . "-" . time() . "-" . $randomStr . "." . $gambar->extension();
            $url =  $gambar->storeAs($destination, $filename);
            $this->ktp = "" . $url;
            $this->save();
        }
    }

    function handleDeleteKtp()
    {

        $gambar = $this->ktp;
        if ($gambar) {
            $path = public_path($gambar);
            if (file_exists($path)) {
                unlink($path);
            }
            return true;
        }
    }
}
