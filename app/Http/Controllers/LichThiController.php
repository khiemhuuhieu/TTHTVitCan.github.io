<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Models\Position;
use App\Models\Employee;
use App\Models\LopHoc;
use App\Models\LichThi;
use DB;
use Session;
use Auth;

class LichThiController extends Controller
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
    public function all_exam(){
    	$this->AuthLogin();
    	$all_exam = LichThi::orderby('id','DESC')->paginate(10);
    	return view('admin.lichthi.all_exam')->with(compact('all_exam'));
    }
    public function add_exam(){
    	$this->AuthLogin();
    	$lop_hoc = LopHoc::where('TinhTrang',0)->orderby('id','ASC')->get();
    	$nhanvien = Employee::where('ChucVu',2)->orderby('id','ASC')->get();
    	return view('admin.lichthi.add_exam')->with(compact('lop_hoc','nhanvien'));
    }
    public function save_exam(Request $request){
    	$this->AuthLogin();
    	$this->validation($request);
    		$data = $request->all();
			$save_exam = new LichThi();
			$save_exam->MaLop = $data['MaLop'];
			$save_exam->TenLop = $data['TenLop'];
			$save_exam->NgayThi = $data['NgayThi'];
			$save_exam->GioThi = $data['GioThi'];
			$save_exam->PhongThi = $data['PhongThi'];
			$save_exam->GiamThi = $data['GiamThi'];
			$save_exam->save();
			Session::put('message','Thêm lịch thi thành công');
			return Redirect::to('quan-ly-lich-thi');
    }
      public function validation(Request $request){
         return $this->validate($request,[
            'NgayThi'=>'required|max:50',
            'GioThi'=>'required',
            'PhongThi'=>'required',
        ],[
            'NgayThi.required'=>'Ngày thi không được bỏ trống',
            'GioThi.required'=>'Giờ thi không được bỏ trống',
            'PhongThi.required'=>'Phòng thi không được bỏ trống',
        ]);
    }
    public function edit_exam($id){
    	$this->AuthLogin();
    	$edit_exam = LichThi::where('id',$id)->get();
    	$nhanvien = Employee::where('ChucVu',2)->orderby('id','ASC')->get();
    	return view('admin.lichthi.edit_exam')->with(compact('edit_exam','nhanvien'));
    }
    public function update_exam(Request $request,$id){
    	$this->AuthLogin();
    	$this->validations($request);
    	$data= $request->all();
	  	$update_exam = LichThi::find($id);
	  	$update_exam->MaLop = $data['MaLop'];
	  	$update_exam->TenLop = $data['TenLop'];
	  	$update_exam->NgayThi = $data['NgayThi'];
	  	$update_exam->GioThi = $data['GioThi'];
	  	$update_exam->PhongThi = $data['PhongThi'];
	  	$update_exam->GiamThi = $data['GiamThi'];
	  	$update_exam->save();
	  	Session::put('message','Cập nhật thành công');
	  	return Redirect::to('quan-ly-lich-thi');

    }
    public function del_exam($id){
    	$this->AuthLogin();
    DB::table('tbl_lichthi')->where('id',$id)->delete();
  	Session::put('message','Xóa thành công lịch thi');
  	return Redirect::to('quan-ly-lich-thi');
    }
    public function teacher_exam(){
        $this->AuthLogin();
        $lichthi = LichThi::orderby('id','DESC')->paginate(10);
        return view('admin.lichthi.lich_gv')->with(compact('lichthi'));
    }
     public function validations(Request $request){
         return $this->validate($request,[
            'NgayThi'=>'required|max:50',
            'GioThi'=>'required',
            'PhongThi'=>'required',
        ],[
            'NgayThi.required'=>'Ngày thi không được bỏ trống',
            'GioThi.required'=>'Giờ thi không được bỏ trống',
            'PhongThi.required'=>'Phòng thi không được bỏ trống',
        ]);
    }
}
