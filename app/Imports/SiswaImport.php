<?php

namespace App\Imports;

use App\Models\Siswa;
use Maatwebsite\Excel\Concerns\ToModel;

class SiswaImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Siswa([
            'id' => $row[0],
            'user_id' => $row[1],
            'nama' => $row[2],
            'nis' => $row[3],
            'rombel' => $row[4],
            'rayon' => $row[5],
            'no_hp' => $row[6],
        ]);
    }
}
