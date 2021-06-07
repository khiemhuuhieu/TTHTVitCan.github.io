<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderDetails extends Model
{
     public $timestamps=false;
    protected $fillable=['class_id','order_code','class_name','student_number','tuition','coupon'];
    protected $primaryKey='order_details_id';
    protected $table ='tbl_order_details';
    public function class(){
    	return $this->belongsTo('App\Models\OpenClass','class_id');
    } 
}
