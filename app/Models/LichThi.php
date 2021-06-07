<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LichThi extends Model
{
    public $timestamps=false;
    protected $fillable=['MaLop','TenLop','NgayThi','GioThi','PhongThi','GiamThi'];
    protected $primaryKey='id';
    protected $table ='tbl_lichthi'; 
}
