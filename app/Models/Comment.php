<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    public $timestamp=false;
    protected $fillable=['comment','comment_name','comment_date','comment_class_id','comment_status','comment_parent_comment'];
    protected $primaryKey='comment_id';
    protected $table='tbl_comment';
    public function class(){
    	return $this->belongsTo('App\Models\OpenClass','comment_class_id');
    }
}
