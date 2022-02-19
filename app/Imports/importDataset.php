<?php

namespace App\Imports;

use App\Models\Dataset;
use Maatwebsite\Excel\Concerns\ToModel;

class importDataset implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Dataset([
            'id' => $row[0],
            'nama' => $row[1],
            'emosional' => $row[2],
            'perilaku' => $row[3],
            'hiperaktif' => $row[4],
            'temansebaya' => $row[5],
            'sosial' => $row[6],
            'hasil' => $row[7],
        ]);
    }
}
