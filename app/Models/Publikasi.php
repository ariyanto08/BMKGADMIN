<?php

namespace App\Models;

use App\Models\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Publikasi extends Model
{
    use HasFactory;
    protected $table = 'publikasi';

    function handleUploadPdf()
    {
        $this->handleDelete();
        if (request()->hasFile('file')) {
            $file = request()->file('file');
            $destination = "pdf/publikasi";
            $filename = pathinfo($file->getClientOriginalName(), PATHINFO_FILENAME);
            $url =  $file->storeAs($destination, $filename);
            $this->file = "" . $url;
            $this->save();
        }
    }
    function handleUploadGambar()
    {
        $this->handleDeleteGambar();
        if (request()->hasFile('gambar')) {
            $gambar = request()->file('gambar');
            $destination = "image/publikasi";
            $filename = $gambar->getClientOriginalName();
            $url =  $gambar->storeAs($destination, $filename);
            $this->gambar = "" . $url;
            $this->save();
        }
    }

    function handleDelete()
    {

        $file = $this->file;
        if ($file) {
            $path = public_path($file);
            if (file_exists($path)) {
                unlink($path);
            }
            return true;
        }
    }
    function handleDeleteGambar()
    {

        $gambar = $this->gambar;
        if ($gambar) {
            $path = public_path($gambar);
            if (file_exists($path)) {
                unlink($path);
            }
            return true;
        }
    }
}
