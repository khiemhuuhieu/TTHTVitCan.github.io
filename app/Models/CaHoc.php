<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CaHoc extends Model
{
     public $timestamp=false;
    protected $fillable=['MaCaHoc','MaLop','MaGV','Ngay','Gio'];
    protected $primaryKey='id';
    protected $table='tbl_cahoc';
}
