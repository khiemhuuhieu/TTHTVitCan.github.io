<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Students extends Model
{
     public $timestamps=false;
    protected $fillable=['MaHocVien','TenHocVien','NgaySinh','Lop','DiaChi','GhiChu','TinhTrang','SDT','MaPH'];
    protected $primaryKey='id';
    protected $table ='tbl_students'; 
}
