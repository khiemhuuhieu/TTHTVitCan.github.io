<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LoaiThuChi extends Model
{
    public $timestamps=false;
    protected $fillable=['Loai','TenLoai'];
    protected $primaryKey='Loai_id';
    protected $table ='tbl_loai_thu_chi'; 
}
