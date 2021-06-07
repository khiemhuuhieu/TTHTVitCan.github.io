<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Models\LoaiThuChi;
use App\Models\TaoThu;
use App\Models\Students;
use App\Models\Employee;
use App\Models\Position;
use App\Models\TinhLuong;
use App\Exports\TienLuong;
use DB;
use Session;
use Auth;
use PDF;
use Excel;

class ThuChiController extends Controller
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
    public function all_loaiThuChi(){
    	$this->AuthLogin();
    	$all_ThuChi = LoaiThuChi::orderby('Loai_id','DESC')->paginate(5);
    	return view('admin.LoaiThuChi.tat_ca_loai')->with(compact('all_ThuChi'));
    }
    public function add_loaiThuchi(){
    	$this->AuthLogin();
    	return view('admin.LoaiThuChi.them_loai');
    }
    public function save_loaiThuchi(Request $request){
    	$this->AuthLogin();
        $this->validations($request);
    	$data = $request->all();
    	$loai_ThuChi = new LoaiThuChi();

    	$loai_ThuChi->Loai = $data['Loai'];
    	$loai_ThuChi->TenLoai = $data['TenLoai'];
    	$loai_ThuChi->save();
        Session::put('message','Thêm loại thu chi thành công');
    	return Redirect::to('/danh-sach-loai-thu-chi');
    }
    public function edit_loaiThuchi($Loai_id){
        $this->AuthLogin();
        $edit_loaiThuchi = LoaiThuChi::where('Loai_id',$Loai_id)->get();
        return view('admin.LoaiThuChi.sua_loai')->with(compact('edit_loaiThuchi'));
    }
    public function update_loaiThuchi(Request $request,$Loai_id){
        $this->AuthLogin();
        $this->validationss($request);
        $data  = $request->all();
        $update_loaiThuchi = LoaiThuChi::find($Loai_id);
        $update_loaiThuchi->Loai = $data['Loai'];
        $update_loaiThuchi->TenLoai = $data['TenLoai'];
        $update_loaiThuchi->save();
        Session::put('message','Cập nhật thành công');
        return Redirect::to('danh-sach-loai-thu-chi');
    }
    public function del_loaiThuchi($Loai_id){
        $this->AuthLogin();
        DB::table('tbl_loai_thu_chi')->where('Loai_id',$Loai_id)->delete();
        Session::put('message','xóa thành công');
        return Redirect('danh-sach-loai-thu-chi');
    }
    public function validationss(Request $request){
         return $this->validate($request,[
            'TenLoai'=>'required|max:100',
            'Loai'=>'required|max:100',
        ],[
            'TenLoai.required'=>'Yêu cầu điền tên loại thu chi',
            'Loai.required'=>'Yêu cầu điền loại thu chi ',
        ]);
    }
      public function validations(Request $request){
         return $this->validate($request,[
            'TenLoai'=>'required|min:5|max:100',
            'Loai'=>'required|min:3|max:100',
        ],[
            'TenLoai.required'=>'Yêu cầu điền tên loại thu chi',
            'Loai.required'=>'Yêu cầu điền loại thu chi ',
        ]);
    }
    public function all_thu_chi(){
        $this->AuthLogin();
        $employee = DB::table('tbl_employee')->orderby('id','desc')->get();
        $thu_chi = DB::table('tbl_thu_chi')->orderby('id','desc')->paginate(6);
         return view('admin.QuanLyThuChi.tat_ca_thuchi')->with(compact('thu_chi','employee'));
    }
    public function tao_khoan_thu(){
        $this->AuthLogin();
        $employee = DB::table('tbl_employee')->orderby('id','desc')->get();
        $student = DB::table('tbl_students')->orderby('id','desc')->get();
        $loaiThuChi = DB::table('tbl_loai_thu_chi')->orderby('Loai_id','desc')->get();
        return view('admin.QuanLyThuChi.tao_thu')->with(compact('student','loaiThuChi','employee'));
    }
    public function luu_khoan_thu(Request $request){
        $this->AuthLogin(); 
        $this->validatio($request);
        $data = $request->all();
        $luu_thu = new TaoThu();
        $luu_thu->NgayThang = $data['NgayThang'];
        $luu_thu->ThuChi = 'Thu';
        $luu_thu->Loai = $data['loaithu'];
        $luu_thu->NguoiThu = $data['NguoiThu'];
        $luu_thu->NoiDung = $data['NoiDung'];
        $luu_thu->SoTienThu = $data['SoTienThu'];
        $luu_thu->SoTienChi = 0;
        $luu_thu->GhiChu = $data['GhiChu'];
        $luu_thu->save();
        Session::put('message','Tạo khoản thu thành công');
        return Redirect('/quan-ly-thu-chi');
    }
    public function validatio(Request $request){
         return $this->validate($request,[
            'NgayThang'=>'required',
            'NoiDung'=>'required|max:100',
            'SoTienThu'=>'required|min:7|max:9',
        ],[
            'NgayThang.required'=>'Yêu cầu chọn ngày tháng',
            'NoiDung.required'=>'Làm ơn nhập nội dung thu',
            'SoTienThu.required'=>'Không được bỏ trống, nhập tiền thu',
        ]);
    }
    public function tao_khoan_chi(){
         $this->AuthLogin();
        $employee = DB::table('tbl_employee')->orderby('id','desc')->get();
        $loaiThuChi = DB::table('tbl_loai_thu_chi')->orderby('Loai_id','desc')->get();
        return view('admin.QuanLyThuChi.tao_chi')->with(compact('loaiThuChi','employee'));
    }
    public function luu_khoan_chi(Request $request){
        $this->AuthLogin();
        $this->validati($request);
        $data = $request->all();
        $luu_chi = new TaoThu();
        $luu_chi->NgayThang = $data['NgayThang'];
        $luu_chi->ThuChi = 'Chi';
        $luu_chi->Loai = $data['loaithu'];
        $luu_chi->NguoiThu = $data['NguoiThu'];
        $luu_chi->NoiDung = $data['NoiDung'];
        $luu_chi->SoTienChi = $data['SoTienChi'];
        $luu_chi->SoTienThu = 0;
        $luu_chi->GhiChu = $data['GhiChu'];
        $luu_chi->save();
        Session::put('message','Tạo khoản chi thành công');
        return Redirect('/quan-ly-thu-chi');
    }
     public function validati(Request $request){
         return $this->validate($request,[
            'NgayThang'=>'required',
            'NoiDung'=>'required|max:100',
            'SoTienChi'=>'required|min:7|max:9',
        ],[
            'NgayThang.required'=>'Yêu cầu chọn ngày tháng',
            'NoiDung.required'=>'Làm ơn nhập nội dung thu',
            'SoTienChi.required'=>'Không được bỏ trống, nhập tiền chi',
        ]);
    }
    public function danh_sach_luong(){
        $all_luong =TinhLuong::orderby('id','DESC')->get();
        return view('admin.QuanLyThuChi.danhsachluong')->with(compact('all_luong'));
    }
    public function tinh_luong(){
        $position = Position::orderby('position_id','ASC')->get();
        $employee = Employee::orderby('id','ASC')->get();
        return view('admin.QuanLyThuChi.tinhluong')->with(compact('employee','position'));
    }
    public function luu_tinh_luong(Request $request){
        $this->AuthLogin();
         $this->validation($request);
        $data = $request->all();
        $luong = new TinhLuong();
        $tongtien =$data['LuongCung'] - $data['Tru'] + $data['Cong'];
        $luong->TenNhanVien = $data['TenNhanVien'];
        $luong->MaNhanVien = $data['MaNhanVien'];
        $luong->ChucVu = $data['ChucVu'];
        $luong->Email = $data['Email'];
        $luong->LuongCung = $data['LuongCung'];
        $luong->Tru = $data['Tru'];
        $luong->Cong = $data['Cong'];
        $luong->GhiChu = $data['GhiChu'];
        $luong->TongTien = $tongtien;
        $luong->save();
        return Redirect('danh-sach-luong');

    }
    public function in_tien_luong(){

        return Excel::download(new TienLuong , 'danh-sach-luong.xlsx');
    }
    public function xem_luong_ca_nhan(){
          $all_money =DB::table('tbl_bangluong')->join('tbl_admin','tbl_bangluong.Email','=','tbl_admin.admin_email')->orderby('tbl_bangluong.id')->get();
        $manager_money = view('admin.caNhan.xem_luong')->with('all_money',$all_money);
        return view('admin_layout')->with('admin.caNhan.xem_luong',$manager_money);
    }
     public function validation(Request $request){
         return $this->validate($request,[
            'LuongCung'=>'required|min:7|max:8',
        ],[
            'LuongCung.required'=>'Yêu cầu nhập lương, ít nhất 6 kí tự là số',
        ]);
    }
    public function export_chi(){
        $this->AuthLogin();
        $chi = TaoThu::where('ThuChi','=','Chi')->orderby('id','ASC')->get();
        return view('admin.xuatphieu.xuat_phieu_chi')->with(compact('chi'));
    }
    public function export_phieu(){
        $this->AuthLogin();
        $thu = TaoThu::where('ThuChi','=','Thu')->orderby('id','ASC')->get();
        return view('admin.xuatphieu.xuat_phieu_thu')->with(compact('thu'));
    }
    public function edit_thuchi($id){
        $this->AuthLogin();
        $edit_thuchi = DB::table('tbl_thu_chi')->where('id',$id)->get();
        $student = DB::table('tbl_students')->orderby('id','desc')->get();
        return view('admin.QuanLyThuChi.sua_thu')->with(compact('edit_thuchi','student'));

    }
      public function validat(Request $request){
         return $this->validate($request,[
            'NgayThang'=>'required',
            'NoiDung'=>'required|max:100',
            'SoTienChi'=>'required|min:7|max:9',
        ],[
            'NgayThang.required'=>'Yêu cầu chọn ngày tháng',
            'NoiDung.required'=>'Làm ơn nhập nội dung thu',
            'SoTienChi.required'=>'Không được bỏ trống, nhập tiền chi',
        ]);
    }
}
