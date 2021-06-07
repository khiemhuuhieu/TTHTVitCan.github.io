<?php

namespace App\Http\Controllers;

use Session;
use App\Http\Requests;
use Illuminate\Http\Request;
use App\Models\Slider;
use DB;
use App\Models\NewsCategory;
use App\Models\NotiCate;
use Illuminate\Support\Facades\Redirect;
session_start();
class HomeController extends Controller
{
    	public function index(Request $Request){
        $noti_cate = NotiCate::orderby('noti_cate_id','DESC')->get();
        $news_cate = NewsCategory::orderby('news_cate_id','DESC')->get();
        $slider = Slider::orderby('slider_id','DESC')->where('slider_status','1')->take(4)->get();
    	$thematic = DB::table('tbl_thematic')->where('thematic_status','1')->orderby('thematic_id')->get();
    	$language = DB::table('tbl_programminglanguage')->where('language_status','1')->orderby('language_id')->get();
    	$all_class = DB::table('tbl_class')->where('class_status','1')->orderby('class_id','desc')->paginate(6);

    	return view('pages.home')->with(compact('thematic','language','all_class','slider','news_cate','noti_cate'));
    }
     public function search(Request $Request){
         $noti_cate = NotiCate::orderby('noti_cate_id','DESC')->get();
         $news_cate = NewsCategory::orderby('news_cate_id','DESC')->get();
         $slider= Slider::orderby('slider_id','DESC')->where('slider_status','1')->take(4)->get();
         $keyword = $Request->keyword_submit;
    	 $thematic = DB::table('tbl_thematic')->where('thematic_status','1')->orderby('thematic_id')->get();
    	 $language = DB::table('tbl_programminglanguage')->where('language_status','1')->orderby('language_id')->get();
         $search_class = DB::table('tbl_class')->where('class_name','like','%'.$keyword.'%')->get();

         return view('pages.search_class.search_class')->with(compact('thematic','language','search_class','slider','news_cate','noti_cate'));
    }
}
