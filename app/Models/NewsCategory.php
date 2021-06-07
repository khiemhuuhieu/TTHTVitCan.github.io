<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NewsCategory extends Model
{
    public $timestamps=false;
    protected $fillable=['news_cate_name','news_cate_status','news_cate_slug','news_cate_desc'];
    protected $primaryKey='news_cate_id';
    protected $table ='tbl_news_category'; 
}
