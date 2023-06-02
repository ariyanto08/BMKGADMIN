<?php

namespace App\Models;

use Illuminate\Support\Str;
use App\Models\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Angin extends Model
{
    use HasFactory;
    protected $table = 'angin_3000';
    function handleUploadFoto()
    {
        $this->handleDelete();
        if (request()->hasFile('gambar1')) {
            $gambar1 = request()->file('gambar1');
            $destination = "image/angin";
            $randomStr = Str::random(5);
            $filename = $this->id . "-" . time() . "-" . $randomStr . "." . $gambar1->extension();
            $url =  $gambar1->storeAs($destination, $filename);
            $this->gambar1 = "" . $url;
            $this->save();
        }
        if (request()->hasFile('gambar2')) {
            $gambar2 = request()->file('gambar2');
            $destination = "image/angin";
            $randomStr = Str::random(5);
            $filename = $this->id . "-" . time() . "-" . $randomStr . "." . $gambar2->extension();
            $url =  $gambar2->storeAs($destination, $filename);
            $this->gambar2 = "" . $url;
            $this->save();
        }
        if (request()->hasFile('gambar3')) {
            $gambar3 = request()->file('gambar3');
            $destination = "image/angin";
            $randomStr = Str::random(5);
            $filename = $this->id . "-" . time() . "-" . $randomStr . "." . $gambar3->extension();
            $url =  $gambar3->storeAs($destination, $filename);
            $this->gambar3 = "" . $url;
            $this->save();
        }
        if (request()->hasFile('gambar4')) {
            $gambar4 = request()->file('gambar4');
            $destination = "image/angin";
            $randomStr = Str::random(5);
            $filename = $this->id . "-" . time() . "-" . $randomStr . "." . $gambar4->extension();
            $url =  $gambar4->storeAs($destination, $filename);
            $this->gambar4 = "" . $url;
            $this->save();
        }
        if (request()->hasFile('gambar5')) {
            $gambar5 = request()->file('gambar5');
            $destination = "image/angin";
            $randomStr = Str::random(5);
            $filename = $this->id . "-" . time() . "-" . $randomStr . "." . $gambar5->extension();
            $url =  $gambar5->storeAs($destination, $filename);
            $this->gambar5 = "" . $url;
            $this->save();
        }
        if (request()->hasFile('gambar6')) {
            $gambar6 = request()->file('gambar6');
            $destination = "image/angin";
            $randomStr = Str::random(5);
            $filename = $this->id . "-" . time() . "-" . $randomStr . "." . $gambar6->extension();
            $url =  $gambar6->storeAs($destination, $filename);
            $this->gambar6 = "" . $url;
            $this->save();
        }
        if (request()->hasFile('gambar7')) {
            $gambar7 = request()->file('gambar7');
            $destination = "image/angin";
            $randomStr = Str::random(5);
            $filename = $this->id . "-" . time() . "-" . $randomStr . "." . $gambar7->extension();
            $url =  $gambar7->storeAs($destination, $filename);
            $this->gambar7 = "" . $url;
            $this->save();
        }
        if (request()->hasFile('gambar8')) {
            $gambar8 = request()->file('gambar8');
            $destination = "image/angin";
            $randomStr = Str::random(5);
            $filename = $this->id . "-" . time() . "-" . $randomStr . "." . $gambar8->extension();
            $url =  $gambar8->storeAs($destination, $filename);
            $this->gambar8 = "" . $url;
            $this->save();
        }
        if (request()->hasFile('gambar9')) {
            $gambar9 = request()->file('gambar9');
            $destination = "image/angin";
            $randomStr = Str::random(5);
            $filename = $this->id . "-" . time() . "-" . $randomStr . "." . $gambar9->extension();
            $url =  $gambar9->storeAs($destination, $filename);
            $this->gambar9 = "" . $url;
            $this->save();
        }
        if (request()->hasFile('gambar10')) {
            $gambar10 = request()->file('gambar10');
            $destination = "image/angin";
            $randomStr = Str::random(5);
            $filename = $this->id . "-" . time() . "-" . $randomStr . "." . $gambar10->extension();
            $url =  $gambar10->storeAs($destination, $filename);
            $this->gambar10 = "" . $url;
            $this->save();
        }
    }

    function handleDelete()
    {

        $gambar1 = $this->gambar1;
        if ($gambar1) {
            $path = public_path($gambar1);
            if (file_exists($path)) {
                unlink($path);
            }
            return true;
        }

        $gambar2 = $this->gambar2;
        if ($gambar2) {
            $path = public_path($gambar2);
            if (file_exists($path)) {
                unlink($path);
            }
            return true;
        }

        $gambar3 = $this->gambar3;
        if ($gambar3) {
            $path = public_path($gambar3);
            if (file_exists($path)) {
                unlink($path);
            }
            return true;
        }
        $gambar4 = $this->gambar4;
        if ($gambar4) {
            $path = public_path($gambar4);
            if (file_exists($path)) {
                unlink($path);
            }
            return true;
        }
        $gambar5 = $this->gambar5;
        if ($gambar5) {
            $path = public_path($gambar5);
            if (file_exists($path)) {
                unlink($path);
            }
            return true;
        }
        $gambar6 = $this->gambar6;
        if ($gambar6) {
            $path = public_path($gambar6);
            if (file_exists($path)) {
                unlink($path);
            }
            return true;
        }
        $gambar7 = $this->gambar7;
        if ($gambar7) {
            $path = public_path($gambar7);
            if (file_exists($path)) {
                unlink($path);
            }
            return true;
        }
        $gambar8 = $this->gambar8;
        if ($gambar8) {
            $path = public_path($gambar8);
            if (file_exists($path)) {
                unlink($path);
            }
            return true;
        }
        $gambar9 = $this->gambar9;
        if ($gambar9) {
            $path = public_path($gambar9);
            if (file_exists($path)) {
                unlink($path);
            }
            return true;
        }
        $gambar10 = $this->gambar10;
        if ($gambar10) {
            $path = public_path($gambar10);
            if (file_exists($path)) {
                unlink($path);
            }
            return true;
        }
    }
}
