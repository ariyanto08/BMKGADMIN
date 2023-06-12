<?php

namespace App\Models;

use App\Models\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Potensi extends Model
{
    use HasFactory;
    protected $table = 'potensi_hujan';
    function handleUploadPdf()
    {
        $this->handleDelete();
        if (request()->hasFile('file')) {
            $file = request()->file('file');
            $destination = "pdf/potensi";
            $filename = $file->getClientOriginalExtension();
            $url =  $file->storeAs($destination, $filename);
            $this->file = "" . $url;
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
}
