<?php

namespace App\Exports;

use App\DiplomaEE;
use Maatwebsite\Excel\Concerns\FromCollection;

class DiplomaEEExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return DiplomaEE::all();
    }
}
