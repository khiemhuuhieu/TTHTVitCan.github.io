<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NhapDiem extends Model
{
    public $timestamps=false;
    protected $fillable=['MaHocVien','TenHocVien','MaLop','GK','TH','CK','TB','Xếp loại'];
    protected $primaryKey='id';
    protected $table ='tbl_diem'; 
}
