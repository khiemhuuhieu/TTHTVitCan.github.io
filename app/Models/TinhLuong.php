<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TinhLuong extends Model
{
  public $timestamps=false;
    protected $fillable=['MaNhanVien','TenNhanVien','ChucVu','LuongCung','Tru','Cong','GhiChu','Email'];
    protected $primaryKey='id';
    protected $table ='tbl_bangluong'; 
}
