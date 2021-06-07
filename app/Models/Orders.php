<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Orders extends Model
{
    public $timestamps=false;
    protected $fillable=['customer_id','order_status','order_code','created_at'];
    protected $primaryKey='order_id';
    protected $table ='tbl_orders'; 
}
