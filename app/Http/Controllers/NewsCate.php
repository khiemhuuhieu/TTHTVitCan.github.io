<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\Models\Thematic;
use App\Http\Requests;
use App\Models\Slider;
use Session;
use DB;
use Auth;
use App\Models\NewsCategory;
session_start();
class NewsCate extends Controller
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
    public function add_news_cate(){
    	$this->AuthLogin();
    	return view('admin.news_cate.add_news_cate');
    }
    public function save_news_cate(Request $Request){
    	$this->AuthLogin();
        $data = $Request->all();
        $news_cate = new NewsCategory();

        $news_cate->news_cate_name = $data['news_cate_name'];
        $news_cate->news_cate_status = $data['news_cate_status'];
        $news_cate->news_cate_slug = $data['news_cate_slug'];
        $news_cate->news_cate_desc = $data['news_cate_desc'];

        $news_cate->save();
    	Session::put('message',"Thêm thành công");
    	return Redirect::to('/all-news-cate');
    }
     public function all_news_cate(){
        $this->AuthLogin();
        $news_cate = NewsCategory::orderby('news_cate_id','DESC')->paginate(4);
    	return view('admin.news_cate.all_news_cate')->with(compact('news_cate'));
    }
    public function edit_news_cate($news_cate_id){
        $this->AuthLogin();
         $edit_news_cate = NewsCategory::where('news_cate_id',$news_cate_id)->get();
        $manager_news_cate = view('admin.news_cate.edit_news_cate')->with('edit_news_cate',$edit_news_cate);
        return view('admin_layout')->with('admin.news_cate.edit_news_cate',$manager_news_cate);
    }
    public function update_news_cate(Request $Request, $news_cate_id){
        $this->AuthLogin();
        $data = $Request->all();
        $update_news_cate = NewsCategory::find($news_cate_id);
        $update_news_cate->news_cate_name = $data['news_cate_name'];
        $update_news_cate->news_cate_slug = $data['news_cate_slug'];
        $update_news_cate->news_cate_desc = $data['news_cate_desc'];
        $update_news_cate->news_cate_status = $data['news_cate_status'];

        $update_news_cate->save();

        Session::put('message',"Cập nhập thành công");
        return Redirect::to('all-news-cate');
    }
    public function delete_news_cate($news_cate_id){
        $this->AuthLogin();
        $news_cate = NewsCategory::find($news_cate_id);
        $news_cate->delete();
        Session::put('message','Xóa thành công');
        return Redirect()->back();
    }

}
