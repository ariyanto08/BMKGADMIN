<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\Model;

class HarianKtp extends Model
{
    use HasFactory;
    protected $table = 'prakiraan_cuaca_harianktp';
    protected $fillable = ['kabupaten', 'tanggal', 'kecamatan', 'cuaca_jam_7', 'cuaca_jam_10', 'cuaca_jam_13', 'cuaca_jam_16', 'cuaca_jam_19', 'cuaca_jam_22', 'cuaca_jam_01', 'cuaca_jam_04', 'cuaca_jam_07', 'suhu_udara', 'arah_angin', 'kec_angin', 'kelembapan'];
}
