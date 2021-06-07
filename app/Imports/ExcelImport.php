<?php

namespace App\Imports;

use App\Models\Students;
use Maatwebsite\Excel\Concerns\ToModel;

class ExcelImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Students([
            'MaHocVien' =>$row[0],
            'TenHocVien' =>$row[1],
            'NgaySinh' =>$row[2],
            'Lop' =>$row[3],
            'DiaChi' =>$row[4],
            'GhiChu' =>$row[5],
            'TinhTrang' =>$row[6],
            'SDT' =>$row[7],
            'MaPH' =>$row[8],
        ]);
    }
}
