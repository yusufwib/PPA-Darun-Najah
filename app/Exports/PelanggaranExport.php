<?php

namespace App\Exports;

use App\Pelanggaran;
use Maatwebsite\Excel\Concerns\FromCollection;

class PelanggaranExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Pelanggaran::all();
    }
}
