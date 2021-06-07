<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NotiCate extends Model
{
    public $timestamps=false;
    protected $fillable=['noti_cate_name','noti_cate_status','noti_cate_slug','noti_cate_desc'];
    protected $primaryKey='noti_cate_id';
    protected $table ='tbl_notifi_cate'; 
}
