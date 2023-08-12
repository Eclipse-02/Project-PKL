<?php

namespace App\Exports;

use App\Models\Provinsi;
use Maatwebsite\Excel\Concerns\FromCollection;

class ProvinsisExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Provinsi::all();
    }
}
