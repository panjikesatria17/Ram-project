<?php

namespace App\Exports;

use App\Models\Datanasabah;
use Maatwebsite\Excel\Concerns\FromCollection;


class DatanasabahExport implements FromCollection
{
    /**
     * @return \Illuminate\Support\Collection
     */
    public function collection()
    {
        return Datanasabah::all();
    }
}
