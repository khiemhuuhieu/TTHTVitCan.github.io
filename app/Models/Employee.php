<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    public $timestamps=false;
    protected $fillable=['TenNhanVien','MaNhanVien','DiaChi','SDT','Email','TrinhDo','ChucVu','NgaySinh','HinhAnh'];
    protected $primaryKey='id';
    protected $table ='tbl_employee'; 
    public function mot(){
    	return $this->belongsTo('App\Models\Admin','MaNhanVien');
    }
}
