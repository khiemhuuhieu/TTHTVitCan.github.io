<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NotificationPost extends Model
{
    public $timestamps=false;
    protected $fillable=['noti_post_title','noti_post_slug','noti_post_desc','notifi_post_status','noti_post_document','noti_cate_id'];
    protected $primaryKey='noti_post_id';
    protected $table ='tbl_noti_post';

    public function notifi_post(){
    	return $this->belongsTo('App\Models\NotiCate','noti_cate_id');
    }
}
