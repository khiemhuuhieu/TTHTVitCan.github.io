<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Thematic extends Model
{
    public $timestamps=false;
    protected $fillable=['thematic_name','thematic_desc','thematic_status'];
    protected $primaryKey='thematic_id';
    protected $table ='tbl_thematic'; 
}
