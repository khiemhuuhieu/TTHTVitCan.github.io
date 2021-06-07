<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\Models\ProgrammingLanguage;
use App\Http\Requests;
use App\Models\Slider;
use App\Models\NewsCategory;
use App\Models\NotiCate;
use Session;
use DB;
use Auth;
session_start();

class ProgrammingLanguageController extends Controller
{
     public function AuthLogin(){
        if(Session::get('login_normal')){
            $admin_id =Session::get('admin_id');
        }else{
            $admin_id=Auth::id();
        }
         if($admin_id){
            return Redirect::to('/dashboard');
         }else{
            return Redirect::to('admin')->send();
       }
    }
    public function add_language(){
        $this->AuthLogin();
    	return view('admin.programmingLanguage.add_language');
    }
    public function all_language(){
        $this->AuthLogin();
    	$all_language = ProgrammingLanguage::orderby('language_id','DESC')->paginate(5);
    	$manager_language = view('admin.programmingLanguage.all_language')->with('all_language',$all_language);
    	return view('admin_layout')->with('admin.programmingLanguage.all_language', $manager_language);
    }
     public function save_language(Request $Request){
        $this->AuthLogin();
        $data = $Request->all();
        $this->validation($Request);
        $language = new ProgrammingLanguage();

        $language->language_name = $data['language_name'];
        $language->language_desc = $data['language_desc'];
        $language->language_keywords = $data['language_keywords'];
        $language->language_status = $data['language_status'];
        $language->save();

    	Session::put('message',"Thêm ngôn ngữ hoặc phầm mềm thành công");
    	return Redirect::to('all_language');
    }
     public function validation(Request $request){
         return $this->validate($request,[
            'language_name'=>'required|max:50',
            'language_desc'=>'required',
            'language_keywords'=>'required',
        ],[
            'language_name.required'=>'Tên ngôn ngữ hoặc phần mềm không được bỏ trống',
            'language_desc.required'=>'Mô tả không được bỏ trống',
            'language_keywords.required'=>'Từ khóa không được bỏ trống',
        ]);
    }
       public function unactive_language($language_id){
        $this->AuthLogin();
    	DB::table('tbl_programminglanguage')->where('language_id',$language_id)->update(['language_status'=>1]);
    	Session::put('message','Kích hoạt hiện thành công');
    	return Redirect::to('all_language');
    }
    public function active_language($language_id){
        $this->AuthLogin();
    	DB::table('tbl_programminglanguage')->where('language_id',$language_id)->update(['language_status'=>0]);
    	Session::put('message','Kích hoạt ẩn thành công');
    	return Redirect::to('all_language');
    }
    public function edit_language($language_id){
        $this->AuthLogin();
        $edit_language = ProgrammingLanguage::where('language_id',$language_id)->get();
    	$manager_language = view('admin.programmingLanguage.edit_language')->with('edit_language',$edit_language);
    	return view('admin_layout')->with('admin.programmingLanguage.edit_language',$manager_language);
    }
    public function update_language(Request $Request, $language_id){
        $this->AuthLogin();
        $data = $Request->all();
        $language = ProgrammingLanguage::find($language_id);
        $language->language_name = $data['language_name'];
        $language->language_desc = $data['language_desc'];
        $language->language_keywords = $data['language_keywords'];
        $language->save();

    	Session::put('message',"Cập nhập ngôn ngữ hoặc phần mềm thành công");
    	return Redirect::to('all_language');
    }
    public function delete_language($language_id){
        $this->AuthLogin();
    	DB::table('tbl_programminglanguage')->where('language_id',$language_id)->delete();
    	Session::put('message','Xóa thành công ngôn ngữ lập trình hoặc phần mềm');
    	
    	return Redirect::to('all_language');
    }
    //class theo language
      public function show_language(Request $Request,$language_id){
        $noti_cate = NotiCate::orderby('noti_cate_id','DESC')->get();
        $news_cate = NewsCategory::orderby('news_cate_id','DESC')->get();
        $slider= Slider::orderby('slider_id','DESC')->where('slider_status','1')->take(4)->get();
        $thematic = DB::table('tbl_thematic')->where('thematic_status','1')->orderby('thematic_id','desc')->get();
        $language = DB::table('tbl_programminglanguage')->where('language_status','1')->orderby('language_id','desc')->get();

        $language_by_id = DB::table('tbl_class')->join('tbl_programminglanguage','tbl_class.language_id','=','tbl_programminglanguage.language_id')->where('tbl_class.language_id',$language_id)->get();
        $language_name = DB::table('tbl_programminglanguage')->where('tbl_programminglanguage.language_id',$language_id)->limit(1)->get();
        
        return view('pages.language.show_language')->with(compact('thematic','language','language_by_id','language_name','slider','news_cate','noti_cate'));
    }
}
