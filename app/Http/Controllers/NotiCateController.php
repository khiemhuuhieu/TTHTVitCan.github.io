<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\Models\Thematic;
use App\Http\Requests;
use App\Models\Slider;
use Session;
use Validator;
use DB;
use Auth;
use App\Models\NotiCate;
session_start();

class NotiCateController extends Controller
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
     public function all_cate_noti(){
        $this->AuthLogin();
        $noti_cate = NotiCate::orderby('noti_cate_id','DESC')->paginate(5);
    	return view('admin.noti_cate_post.all_noti_cate')->with(compact('noti_cate'));
    }
    public function add_noti_cate(){
        $this->AuthLogin();
        return view('admin.noti_cate_post.add_noti_cate');
    }
    public function save_noti_cate(Request $Request){
        $this->AuthLogin();
        $this->validation($Request);
        $data = $Request->all();
        $noti_cate = new NotiCate();
        $noti_cate->noti_cate_name = $data['noti_cate_name'];
        $noti_cate->noti_cate_status = $data['noti_cate_status'];
        $noti_cate->noti_cate_slug = $data['noti_cate_slug'];
        $noti_cate->noti_cate_desc = $data['noti_cate_desc'];
        $noti_cate->save();
        Session::put('message',"Thêm danh mục thành công");
        return Redirect::to('/all-cate-noti');
    }
    public function delete_noti_cate($noti_cate_id){
         $this->AuthLogin();
        $noti_cate = NotiCate::find($noti_cate_id);
        $noti_cate->delete();
        Session::put('message','Xóa thành công');
        return Redirect()->back();
    }
    public function edit_noti_cate($noti_cate_id){
         $this->AuthLogin();
         $edit_noti_cate = NotiCate::where('noti_cate_id',$noti_cate_id)->get();
         $manager_noti_cate = view('admin.noti_cate_post.edit_noti_cate')->with('edit_noti_cate',$edit_noti_cate);
        return view('admin_layout')->with('admin.noti_cate_post.edit_noti_cate',$manager_noti_cate);
    }
    public function update_noti_cate(Request $Request,$noti_cate_id){
        $data = $Request->all();
        $update_noti_cate = NotiCate::find($noti_cate_id);

        $update_noti_cate->noti_cate_name = $data['noti_cate_name'];
        $update_noti_cate->noti_cate_slug = $data['noti_cate_slug'];
        $update_noti_cate->noti_cate_desc = $data['noti_cate_desc'];
        $update_noti_cate->noti_cate_status = $data['noti_cate_status'];

        $update_noti_cate->save();

        Session::put('message',"Cập nhập thành công");
        return Redirect::to('/all-cate-noti');
    }
    public function validation($request){
        return $this->validate($request,[
            'noti_cate_name'=>'required|min:10|max:30',
            'noti_cate_status'=>'required',
            'noti_cate_desc'=>'required|min:30|max:255'
        ],[
            'noti_cate_name.required'=>'Tên thông báo ít nhất 10 kí tự',
            'noti_cate_desc.required'=>'Mô tả thông báo ít nhất 30 kí tự'
        ]);
    }
}
