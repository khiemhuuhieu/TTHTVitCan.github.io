<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NewsPost extends Model
{
    public $timestamps=false;
    protected $fillable=['news_post_title','news_post_slug','news_post_desc','news_post_content','news_post_meta','news_post_keyword','news_post_status','news_post_image','news_cate_id'];
    protected $primaryKey='news_post_id';
    protected $table ='tbl_news_post'; 
    public function news_cate(){
    	return $this->belongsTo('App\Models\NewsCategory','news_cate_id');
    }
}
