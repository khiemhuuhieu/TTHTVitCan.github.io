<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\Models\Thematic;
use App\Http\Requests;
use App\Models\Slider;
use App\Models\NewsCategory;
use App\Models\NotiCate;
use Session;
use DB;
use Auth;
session_start();
class ThematicController extends Controller
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
    public function add_thematic(){
        $this->AuthLogin();
    	return view('admin.thematic.add_thematic');
    }
    public function all_thematic(){
        $this->AuthLogin();
    	$all_thematic = Thematic::orderby('thematic_id','DESC')->paginate(5);
    	$manager_thematic = view('admin.thematic.all_thematic')->with('all_thematic',$all_thematic);
    	return view('admin_layout')->with('admin.thematic.all_thematic', $manager_thematic);
    }
     public function save_thematic(Request $Request){
        $this->AuthLogin();
        $data = $Request->all();
        $this->validation($Request);
        $thematic = new Thematic();

        $thematic->thematic_name = $data['thematic_name'];
        $thematic->thematic_desc = $data['thematic_desc'];
        $thematic->thematic_status = $data['thematic_status'];
        $thematic->save();

    	Session::put('message',"Thêm chuyên đề thành công");
    	return Redirect::to('all_thematic');
    }
    public function unactive_thematic($thematic_id){
        $this->AuthLogin();
    	DB::table('tbl_thematic')->where('thematic_id',$thematic_id)->update(['thematic_status'=>1]);
    	Session::put('message','Kích hoạt hiện thành công');
    	return Redirect::to('all_thematic');
    }
    public function active_thematic($thematic_id){
        $this->AuthLogin();
    	DB::table('tbl_thematic')->where('thematic_id',$thematic_id)->update(['thematic_status'=>0]);
    	Session::put('message','Kích hoạt ẩn thành công');
    	return Redirect::to('all_thematic');
    }
    public function edit_thematic($thematic_id){
        $this->AuthLogin();
        $edit_thematic = Thematic::where('thematic_id',$thematic_id)->get();
    	$manager_thematic = view('admin.thematic.edit_thematic')->with('edit_thematic',$edit_thematic);
    	return view('admin_layout')->with('admin.thematic.edit_thematic',$manager_thematic);
    }
    public function update_thematic(Request $Request, $thematic_id){
        $this->AuthLogin();
        $data = $Request->all();
        $thematic = Thematic::find($thematic_id);
        $thematic->thematic_name = $data['thematic_name'];
        $thematic->thematic_desc = $data['thematic_desc'];

        $thematic->save();

    	Session::put('message',"Cập nhập chuyên đề thành công");
    	return Redirect::to('all_thematic');
    }
    public function delete_thematic($thematic_id){
        $this->AuthLogin();
    	DB::table('tbl_thematic')->where('thematic_id',$thematic_id)->delete();
    	Session::put('message','Xóa thành công chuyên đề');
    	
    	return Redirect::to('all_thematic');
    }
    public function show_thematic(Request $Request,$thematic_id){
        $noti_cate = NotiCate::orderby('noti_cate_id','DESC')->get();
        $news_cate = NewsCategory::orderby('news_cate_id','DESC')->get();
        $thematic = DB::table('tbl_thematic')->where('thematic_status','1')->orderby('thematic_id','desc')->get();
        $language = DB::table('tbl_programminglanguage')->where('language_status','1')->orderby('language_id','desc')->get();
        $slider= Slider::orderby('slider_id','DESC')->where('slider_status','1')->take(4)->get();
        $thematic_by_id = DB::table('tbl_class')->join('tbl_thematic','tbl_class.thematic_id','=','tbl_thematic.thematic_id')->where('tbl_class.thematic_id',$thematic_id)->get();
        $thematic_name = DB::table('tbl_thematic')->where('tbl_thematic.thematic_id',$thematic_id)->limit(1)->get();
        
        return view('pages.thematic.show_thematic')->with(compact('thematic','language','thematic_by_id','thematic_name','slider','news_cate','noti_cate'));
    }
     public function validation(Request $request){
         return $this->validate($request,[
            'thematic_name'=>'required|max:50',
            'thematic_desc'=>'required',
        ],[
            'thematic_name.required'=>'Tên chuyên đề không được bỏ trống',
            'thematic_desc.required'=>'Mô tả không được bỏ trống',
        ]);
    }
}
