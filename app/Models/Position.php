<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Position extends Model
{
   public $timestamps=false;
    protected $fillable=['position_name'];
    protected $primaryKey='position_id';
    protected $table ='tbl_position'; 
}
