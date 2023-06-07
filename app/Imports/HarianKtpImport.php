<?php

namespace App\Imports;

use App\Models\HarianKtp;
use Maatwebsite\Excel\Concerns\ToModel;

class HarianKtpImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new HarianKtp([
            'kabupaten' =>$row[0],
            'tanggal' =>$row[1],
            'kecamatan' =>$row[2],
            'cuaca_jam_7' =>$row[3],
            'cuaca_jam_10' =>$row[4],
            'cuaca_jam_13' =>$row[5],
            'cuaca_jam_16' =>$row[6],
            'cuaca_jam_19' =>$row[7],
            'cuaca_jam_22' =>$row[8],
            'cuaca_jam_01' =>$row[9],
            'cuaca_jam_04' =>$row[10],
            'cuaca_jam_07' =>$row[11],
            'suhu_udara' =>$row[12],
            'arah_angin' =>$row[13],
            'kec_angin' =>$row[14],
            'kelembapan' =>$row[15],

        ]);
    }
}
