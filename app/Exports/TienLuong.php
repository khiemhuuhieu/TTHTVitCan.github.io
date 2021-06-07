<?php

namespace App\Exports;

use App\Models\TinhLuong;
use Maatwebsite\Excel\Concerns\FromCollection;

class TienLuong implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return TinhLuong::all();
    }
    
}
