<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\Models\OpenClass;
use App\Models\Employee;
use App\Models\Students;
use App\Models\LopHoc;
use App\Models\NhapDiem;
use App\Models\CaHoc;
use App\Exports\ThiLai;
use App\Http\Requests;
use Session;
use DB;
use Auth;
use Excel;
session_start();

class LopHocController extends Controller
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
    public function quan_ly_lop_hoc(){
    	$this->AuthLogin();
        $lop_hoc = DB::table('tbl_lop_hoc')->orderby('id','DESC')->paginate(6);
    	return view('admin.lop_hoc.all_class_open')->with(compact('lop_hoc'));
    }
    public function them_lop_hoc(){
        $this->AuthLogin();
        $employee = Employee::where('ChucVu','2')->orderby('id','ASC')->get();
        return view('admin.lop_hoc.add_class')->with(compact('employee'));
    }
    public function luu_tao_lop(Request $request){
        $this->AuthLogin();
        $this->validation($request);
        $data = $request->all();
        $lop_hoc = new LopHoc();
        $lop_hoc->MaLop = $data['MaLop'];
        $lop_hoc->TenLop = $data['TenLop'];
        $lop_hoc->MaGV = $data['MaGV'];
        $lop_hoc->TinhTrang = $data['TinhTrang'];
        $lop_hoc->save();
        Session::put('message','Thêm lớp học thành công');
        return Redirect('quan-ly-lop-hoc');
    }
    public function danh_sach_lop(){
        $this->AuthLogin();
        $lop_hoc = LopHoc::orderby('id','DESC')->paginate(7);
        return view('admin.lop_hoc.danh_sach_lop_gv')->with(compact('lop_hoc'));
    }
    public function danh_sach_hoc_vien($MaLop){
        $this->AuthLogin();
        $diem = DB::table('tbl_diem')->where('MaLop',$MaLop)->orderby('tbl_diem.MaLop','ASC')->get();
        $student= Students::where('Lop',$MaLop)->orderby('id','ASC')->get();
        return view('admin.lop_hoc.danh_sach_hv')->with(compact('student','diem'));
    }
    public function nhap_diem($MaHocVien){
        $this->AuthLogin();
        $hoc_vien= Students::where('MaHocVien',$MaHocVien)->first();
        return view('admin.lop_hoc.nhap_diem')->with('hoc_vien',$hoc_vien);
    }
    public function luu_nhap_diem(Request $request){
        $this->AuthLogin();
        $data = $request->all();
        $diem = new NhapDiem();
        $tb=($data['GK']*2 + $data['TH']*3 + $data['CK']*5)/10;
        $diem->TenHocVien =$data['TenHocVien'];
        $diem->MaHocVien =$data['MaHocVien'];
        $diem->MaLop =$data['MaLop'];
        $diem->GK = $data['GK'];
        $diem->TH = $data['TH'];
        $diem->CK= $data['CK'];
        $diem->TB = $tb;
        if($tb <=5){
            $diem->XepLoai = 'Học lại';
        }
        elseif ($tb>5 && $tb<=8) {
            $diem->XepLoai = 'Khá';
        }
        elseif($tb>8){
            $diem->XepLoai = 'Giỏi';
        }
        $diem->save();
        return Redirect('danh-sach-lop');
    } 
    public function sua_diem($id){
        $this->AuthLogin();
        $sua_diem = NhapDiem::where('id',$id)->get();
        return view('admin.lop_hoc.sua_diem')->with(compact('sua_diem'));
    }
    public function cap_nhat_diem(Request $request, $id){
        $this->AuthLogin();
        $data = $request->all();
        $cap_nhat_diem = NhapDiem::find($id);
        $tb=($data['GK']*2 + $data['TH']*3 + $data['CK']*5)/10;
        $cap_nhat_diem->TenHocVien = $data['TenHocVien'];
        $cap_nhat_diem->MaHocVien = $data['MaHocVien'];
        $cap_nhat_diem->MaLop = $data['MaLop'];
        $cap_nhat_diem->GK = $data['GK'];
        $cap_nhat_diem->TH = $data['TH'];
        $cap_nhat_diem->CK = $data['CK'];
        $cap_nhat_diem->TB = $tb;
         if($tb <=5){
            $cap_nhat_diem->XepLoai = 'Học lại';
        }
        elseif ($tb>5 && $tb<=8) {
            $cap_nhat_diem->XepLoai = 'Khá';
        }
        elseif($tb>8){
            $cap_nhat_diem->XepLoai = 'Giỏi';
        }
        $cap_nhat_diem->save();
        Session::put('message','Cập nhật điểm thành công');
        return Redirect('danh-sach-lop');


    }
    public function danh_sach_ca_hoc(){
        $this->AuthLogin();
        $ca_hoc = CaHoc::orderby('id','DESC')->paginate(10);
        return view('admin.lop_hoc.quan_ly_ca_hoc')->with(compact('ca_hoc'));
    }
    public function them_ca_hoc(){
        $this->AuthLogin();
        $lop_hoc = LopHoc::orderby('id','DESC')->get();
        return view('admin.lop_hoc.them_ca_hoc')->with(compact('lop_hoc'));
    }
    public function luu_ca_hoc(Request $request){
        $this->AuthLogin();
        $data = $request->all();
        $this->validations($request);
        $ca_hoc = new CaHoc();
        $ca_hoc->MaCaHoc = $data['MaCaHoc'];
        $ca_hoc->MaLop = $data['MaLop'];
        $ca_hoc->MaGV = $data['MaGV'];
        $ca_hoc->Ngay = $data['Ngay'];
        $ca_hoc->Gio = $data['Gio'];
        $ca_hoc->PhongHoc = $data['PhongHoc'];
        $ca_hoc->save();
        Session::put('message','Thêm ca học thành công');
        return Redirect::to('quan-ly-ca-hoc');
    }
    public function sua_ca_hoc($id){
        $this->AuthLogin();
        $ca_hoc = CaHoc::where('id',$id)->get();
        return view('admin.lop_hoc.sua_ca_hoc')->with(compact('ca_hoc'));
    }
    public function cap_nhat_ca_hoc(Request $request, $id){
        $this->AuthLogin();
        $this->validationsss($request);
        $data = $request->all();
        $cap_nhat_ca_hoc = CaHoc::find($id);
        $cap_nhat_ca_hoc->MaCaHoc = $data['MaCaHoc'];
        $cap_nhat_ca_hoc->MaLop = $data['MaLop'];
        $cap_nhat_ca_hoc->MaGV = $data['MaGV'];
        $cap_nhat_ca_hoc->Ngay = $data['Ngay'];
        $cap_nhat_ca_hoc->Gio = $data['Gio'];
        $cap_nhat_ca_hoc->PhongHoc = $data['PhongHoc'];
        $cap_nhat_ca_hoc->save();
        Session::put('message','Cập nhật thành công ca học');
        return Redirect::to('quan-ly-ca-hoc');
    }
    public function lich_day(){
        $this->AuthLogin();
        $ca_hoc = CaHoc::orderby('id','ASC')->get();
        return view('admin.lop_hoc.lich_giang_vien')->with(compact('ca_hoc'));
    }
    public function diem_danh_hoc_vien($MaLop){
        $this->AuthLogin();
        $diem_danh = Students::where('Lop',$MaLop)->where('TinhTrang',1)->orderby('id','DESC')->get();
        return view('admin.lop_hoc.diem_danh')->with(compact('diem_danh'));
    }
    //Huy
    public function sua_lop($id){
        $this->AuthLogin();
        $lop = LopHoc::where('id',$id)->get();
        $giaovien = Employee::where('ChucVu',2)->orderby('id','DESC')->get();

        return view('admin.lop_hoc.sua_lop')->with(compact('lop','giaovien'));
    }
    public function cap_nhap_lop_hoc(Request $request,$id){
        $this->AuthLogin();
        $this->validationss($request);
        $data = $request->all();
        $cap_nhat_lop = LopHoc::find($id);
        $cap_nhat_lop->MaLop = $data['MaLop'];
        $cap_nhat_lop->TenLop =$data['TenLop'];
        $cap_nhat_lop->MaGV =$data['MaGV'];
        $cap_nhat_lop->TinhTrang =$data['TinhTrang'];
        $cap_nhat_lop->save();
         Session::put('message','Cập nhật lớp học thành công');
        return Redirect::to('quan-ly-lop-hoc');
    }
    public function xoa_lop($id){
        $this->AuthLogin();
            DB::table('tbl_lop_hoc')->where('id',$id)->delete();
            Session::put('message','Xóa thành công lớp học');
            return Redirect()->back();
    }
    public function danh_sach_thi_lai(){
        $this->AuthLogin();
        $ds_lop = LopHoc::where('TinhTrang',0)->orderby('id','ASC')->paginate(3);
        return view('admin.quanlysauthi.ds_cac_lop')->with(compact('ds_lop'));
    }
    public function ds_hv_thi_lai($MaLop){
        $this->AuthLogin();
        $ds_hv_thi_lai = NhapDiem::where('MaLop',$MaLop)->where('XepLoai','=','Học lại')->orderby('id','ASC')->get();
        return view('admin.quanlysauthi.ds_hv_thi_lai')->with(compact('ds_hv_thi_lai'));
    }
    public function in_danh_sach_thi_lai(){
        $this->AuthLogin();
        
         return Excel::download(new ThiLai, 'danh_sach_thi_lai.xlsx');
    }
    public function danh_sach_lop_cap_chung_chi(){
        $this->AuthLogin();
         $ds_lop_cc = LopHoc::where('TinhTrang',0)->orderby('id','ASC')->paginate(4);
        return view('admin.chungchi_phuckhao.ds_lop_cap_cc')->with(compact('ds_lop_cc'));
    }
    public function ds_cap_cc($MaLop){
        $this->AuthLogin();
         $ds_cap_cc = NhapDiem::where('MaLop',$MaLop)->where('XepLoai','<>','Học lại')->orderby('id','ASC')->get();
         return view('admin.chungchi_phuckhao.ds_cap_cc')->with(compact('ds_cap_cc'));
    }
    public function ds_pk(){
        $this->AuthLogin();
         $ds_pk = LopHoc::where('TinhTrang',0)->orderby('id','ASC')->paginate(4);
        return view('admin.chungchi_phuckhao.ds_lop_pk')->with(compact('ds_pk'));        
    }
    public function phuc_khao($MaLop){
        $this->AuthLogin();
          $phuc_khao = NhapDiem::where('MaLop',$MaLop)->orderby('id','ASC')->get();
        return view('admin.chungchi_phuckhao.ds_hv_pk')->with(compact('phuc_khao'));
    }
    public function validation(Request $request){
         return $this->validate($request,[
            'MaLop'=>'required|min:5|max:20',
            'TenLop'=>'required|min:10|max:30',
        ],[
            'MaLop.required'=>'Mã  lớp không được bỏ trống, ít nhất 6 kí tự',
            'TenLop.required'=>'Tên lớp không được bỏ trống, ít nhất 10 kí tự',
        ]);
    }
     public function validationss(Request $request){
         return $this->validate($request,[
            'MaLop'=>'required|min:5|max:20',
            'TenLop'=>'required|min:10|max:30',
        ],[
            'MaLop.required'=>'Mã  lớp không được bỏ trống, ít nhất 6 kí tự',
            'TenLop.required'=>'Tên lớp không được bỏ trống, ít nhất 10 kí tự',
        ]);
    }
     public function validations(Request $request){
         return $this->validate($request,[
            'MaCaHoc'=>'required|min:5|max:20',
            'Ngay'=>'required|date_format:Y-m-d|after:today',
            'Gio'=>'required',
            'PhongHoc'=>'required',
        ],[
            'MaCaHoc.required'=>'Mã  ca học không được bỏ trống, ít nhất 5 kí tự',
            'Ngay.required'=>'Ngày không được bỏ trống',
            'Gio.required'=>'Giờ học không được bỏ trống',
            'PhongHoc.required'=>'Phòng học không được bỏ trống',
        ]);
    }
     public function validationsss(Request $request){
         return $this->validate($request,[
            'MaCaHoc'=>'required|min:5|max:20',
            'Ngay'=>'required|date_format:Y-m-d|after:today',
            'Gio'=>'required',
            'PhongHoc'=>'required',
        ],[
            'MaCaHoc.required'=>'Mã  lớp không được bỏ trống, ít nhất 5 kí tự',
            'Ngay.required'=>'Ngày không được bỏ trống',
            'Gio.required'=>'Giờ học không được bỏ trống',
            'PhongHoc.required'=>'Phòng học không được bỏ trống',
        ]);
    }

}
