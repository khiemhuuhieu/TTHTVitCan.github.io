<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DaoTao extends Model
{
     public $timestamp=false;
    protected $fillable=['TieuDe','Slug','ChiTiet','danhmuc_id','HienThi'];
    protected $primaryKey='id';
    protected $table='tbl_daotao';
     public function daotao_cate(){
    	return $this->belongsTo('App\Models\Thematic','thematic_id');
    }
}
