<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\Models\Slider;
use App\Models\NewsCategory;
use App\Models\NotiCate;
use App\Models\Employee;

use DB;
use App\Models\Contact;
use Session;
Session_start();
class ContactController extends Controller
{
    public function contact(){
    	$noti_cate = NotiCate::orderby('noti_cate_id','DESC')->get();
    	$news_cate = NewsCategory::orderby('news_cate_id','DESC')->get();
    	$thematic = DB::table('tbl_thematic')->where('thematic_status','1')->orderby('thematic_id')->get();
    	$language = DB::table('tbl_programminglanguage')->where('language_status','1')->orderby('language_id')->get();
    	 $slider= Slider::orderby('slider_id','DESC')->where('slider_status','1')->take(4)->get();
    	return view('pages.contact.contact')->with(compact('slider','thematic','language','news_cate','noti_cate'));
    }
     public function gioi_thieu(){
        $noti_cate = NotiCate::orderby('noti_cate_id','DESC')->get();
        $news_cate = NewsCategory::orderby('news_cate_id','DESC')->get();
        $thematic = DB::table('tbl_thematic')->where('thematic_status','1')->orderby('thematic_id')->get();
        $language = DB::table('tbl_programminglanguage')->where('language_status','1')->orderby('language_id')->get();
         $slider= Slider::orderby('slider_id','DESC')->where('slider_status','1')->take(4)->get();
        return view('pages.gioithieu.gioi_thieu')->with(compact('slider','thematic','language','news_cate','noti_cate'));
    }
    public function doi_ngu_giang_vien(){
        $giang_vien = Employee::where('ChucVu','2')->orderby('id','ASC')->paginate(4);
        $noti_cate = NotiCate::orderby('noti_cate_id','DESC')->get();
        $news_cate = NewsCategory::orderby('news_cate_id','DESC')->get();
        $thematic = DB::table('tbl_thematic')->where('thematic_status','1')->orderby('thematic_id')->get();
        $language = DB::table('tbl_programminglanguage')->where('language_status','1')->orderby('language_id')->get();
         $slider= Slider::orderby('slider_id','DESC')->where('slider_status','1')->take(4)->get();
        return view('pages.gioithieu.giang_vien')->with(compact('slider','thematic','language','news_cate','noti_cate','giang_vien'));

    }    
    public function information(){
    	return view('admin.contact.add_information');
    }
}
