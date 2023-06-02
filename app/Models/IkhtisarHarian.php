<?php

namespace App\Models;

use App\Models\Model;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class IkhtisarHarian extends Model
{
    use HasFactory;
    protected $table = 'pengamatan_ikhtisar_cuaca_harian';

    function handleUploadFoto()
    {
        $this->handleDelete();
        if (request()->hasFile('gambar')) {
            $gambar = request()->file('gambar');
            $destination = "image/ikhtisar_harian";
            $randomStr = Str::random(5);
            $filename = $this->id . "-" . time() . "-" . $randomStr . "." . $gambar->extension();
            $url =  $gambar->storeAs($destination, $filename);
            $this->gambar = "" . $url;
            $this->save();
        }
    }

    function handleDelete()
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
