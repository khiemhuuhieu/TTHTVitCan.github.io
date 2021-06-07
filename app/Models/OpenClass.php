<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OpenClass extends Model
{
    public $timestamps=false;
    protected $fillable=['class_name','class_image','thematic_id','language_id','opending_day','schudule_day','study_time','tuition','address_class','class_desc','class_keywords','teacher','student_number','class_status'];
    protected $primaryKey='class_id';
    protected $table ='tbl_class'; 
     public function comment(){
    	return $this->hasMany('App\Models\Comment');
    }
}
