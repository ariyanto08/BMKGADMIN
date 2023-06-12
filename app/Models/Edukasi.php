<?php

namespace App\Models;

use App\Models\Model;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Edukasi extends Model
{
    use HasFactory;
    protected $table = 'publikasi_edukasi_cuaca';

    function handleUploadFoto()
    {
        $this->handleDelete();
        if (request()->hasFile('file')) {
            $gambar = request()->file('file');
            $destination = "image/edukasi";
            $randomStr = Str::random(5);
            $filename = $this->id . "-" . time() . "-" . $randomStr . "." . $gambar->extension();
            $url =  $gambar->storeAs($destination, $filename);
            $this->file = "" . $url;
            $this->save();
        }
    }

    function handleDelete()
    {

        $gambar = $this->file;
        if ($gambar) {
            $path = public_path($gambar);
            if (file_exists($path)) {
                unlink($path);
            }
            return true;
        }
    }
}
