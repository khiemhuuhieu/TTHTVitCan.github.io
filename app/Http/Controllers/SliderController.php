<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\Models\Thematic;
use App\Http\Requests;
use App\Models\Slider;
use Session;
use DB;
session_start();
use Auth;
class SliderController extends Controller
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
    public function manager_banner(){
    	$this->AuthLogin();
    	$all_slider= Slider::orderby('slider_id','DESC')->get();
    	return view('admin.slider.all_slider')->with(compact('all_slider'));
    }
    public function insert_banner(){
        $this->AuthLogin();
    	return view('admin.slider.insert_slider');
    }
    public function insert_slider(Request $Request){
    	$this->AuthLogin();
    	$data=$Request->all();

    	$get_image=$Request->file('slider_image');

    	if($get_image){
    		$get_name_image= $get_image->getClientOriginalName();
    		$name_image= current(explode('.',$get_name_image));
    		$new_image= $name_image.rand(0,99).'.'.$get_image->getClientOriginalExtension();
    		$get_image->move('public/uploads/slider',$new_image);
    		
    		$slider= new Slider();
    		$slider->slider_name = $data['slider_name'];
    		$slider->slider_image = $new_image;
    		$slider->slider_status = $data['slider_status'];
    		$slider->slider_desc = $data['slider_desc'];
    		$slider->save();
    	    Session::put('message',"Thêm banner thành công");
    	    return Redirect::to('all_banner');
    	}else
    	{
    	    Session::put('message',"Làm ơn thêm hình ảnh");
    	    return Redirect::to('insert_banner');
    	} 	

    }
     public function unactive_slider($slider_id){
        $this->AuthLogin();
        DB::table('tbl_slider')->where('slider_id',$slider_id)->update(['slider_status'=>1]);
        Session::put('message','Kích hoạt hiện thành công');
        return Redirect::to('all_banner');
    }
    public function active_slider($slider_id){
        $this->AuthLogin();
        DB::table('tbl_slider')->where('slider_id',$slider_id)->update(['slider_status'=>0]);
        Session::put('message','Kích hoạt ẩn thành công');
        return Redirect::to('all_banner');
    }
    public function delete_slider($slider_id){
        $this->AuthLogin();
        DB::table('tbl_slider')->where('slider_id',$slider_id)->delete();
        Session::put('message','Xóa thành công banner');
        return Redirect::to('all_banner');
    }
     public function edit_slider($slider_id){
        $this->AuthLogin();
        $edit_slider=DB::table('tbl_slider')->where('slider_id',$slider_id)->get();
        $manager_edit=view('admin.slider.edit_slider')->with('edit_slider',$edit_slider);
        return view('admin_layout')->with('admin.edit_slider',$manager_edit);
    }
     public function update_slider(Request $Request, $slider_id){
        $this->AuthLogin();
        $data=array();
        $data['slider_name'] = $Request->slider_name;
        $data['slider_desc'] = $Request->slider_desc;     
        $get_image=$Request->file('slider_image');
        if($get_image)
        {
            $get_name_image=$get_image->getClientOriginalName();
            $name_image=current(explode('.',$get_name_image));
            $new_image=$name_image.rand(0,99).'.'.$get_image->getClientOriginalExtension();
            $get_image->move('public/uploads/slider',$new_image);
            $data['slider_image']=$new_image;
            DB::table('tbl_slider')->where('slider_id',$slider_id)->update($data);
            Session::put('message',"Cập nhật banner thành công");
            return Redirect::to('all_banner');
        }
        DB::table('tbl_slider')->where('slider_id',$class_id)->update($data);
        Session::put('message',"Cập nhập banner thành công");
        return Redirect::to('all_banner');
    }  
}
