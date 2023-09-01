<?php

namespace App\Exports;

use App\Models\SppModel;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class SppExport implements FromCollection,WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return collect(SppModel::getAllspp());
        //return SppModel::all();
    }

    public function headings():array {
        return [
            'id',
            'nama',
            'tgl_bayar',
            'jumlah'
        ];
    }
}
