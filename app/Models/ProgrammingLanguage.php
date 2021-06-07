<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProgrammingLanguage extends Model
{
    public $timestamps=false;
    protected $fillable=['language_name','language_desc','language_keywords','thematic_status'];
    protected $primaryKey='language_id';
    protected $table ='tbl_programminglanguage'; 
}
