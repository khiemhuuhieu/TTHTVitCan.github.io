<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LopHoc extends Model
{
    public $timestamps=false;
    protected $fillable=['Malop','TenLop','MaGV','TinhTrang'];
    protected $primaryKey='id';
    protected $table ='tbl_lop_hoc'; 
}
