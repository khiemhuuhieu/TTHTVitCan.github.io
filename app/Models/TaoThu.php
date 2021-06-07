<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TaoThu extends Model
{
    public $timestamps=false;
    protected $fillable=['NgayThang','ThuChi','Loai','NguoiThu','NoiDung','SoTienThu','SoTienchi','GhiChu'];
    protected $primaryKey='id';
    protected $table ='tbl_thu_chi'; 
}
