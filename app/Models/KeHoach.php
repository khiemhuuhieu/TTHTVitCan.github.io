<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KeHoach extends Model
{
    public $timestamps=false;
    protected $fillable=['TenKeHoach','Slug','File','created_at'];
    protected $primaryKey='id';
    protected $table ='tbl_kehoach'; 
}
