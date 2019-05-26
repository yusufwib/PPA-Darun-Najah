<?php

namespace App\Imports;

use App\Siswa;
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
            // 'id' => $row[0],
            'nis' => $row[0],
            'nama' => $row[1],
            'telp' => $row[2]
        ]);
    }
}
