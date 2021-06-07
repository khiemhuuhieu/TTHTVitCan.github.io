<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Redirect;
use App\Models\Students;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Models\OpenClass;
use App\Models\LopHoc;
use DB;
use App\Exports\ExcelExport;
use App\Imports\ExcelImport;
use Excel;
use Session;
use Auth;
class StudentController extends Controller
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
	public function all_student(){
		 $this->AuthLogin();

        $all_student = Students::orderby('id','DESC')->paginate(10);
        return view('admin.student.all_student')->with(compact('all_student'));
	}
	public function add_student(){
        $lop_hoc = LopHoc::orderby('id','DESC')->get();
		return view('admin.student.add_student')->with(compact('lop_hoc'));
	}
     public function save_students(Request $Request){
        $this->AuthLogin();
        $data = $Request->all();
        $this->validation($Request);
        $students = new Students();

        $students->MaHocVien = $data['ma_hocvien'];
        $students->TenHocVien = $data['ten_hocvien'];
        $students->NgaySinh = $data['ngay_sinh'];
        $students->Lop = $data['lop'];
        $students->Diachi = $data['dia_chi'];
        $students->GhiChu = $data['ghi_chu'];
        $students->TinhTrang = $data['tinh_trang'];
        $students->SDT = $data['so_dienthoai'];
        $students->MaPH = $data['ma_phuhuynh'];
        $students->save();
        Session::put('message',"Thêm học viên thành công");
        return Redirect::to('all_student');
    }
    public function edit_student($id){
        $this->AuthLogin();

        $lop_hoc = LopHoc::orderby('id','DESC')->get();
        $edit_student = DB::table('tbl_students')->where('id',$id)->get();
        $manager_student = view('admin.student.edit_student')->with('edit_student',$edit_student)->with('lop_hoc',$lop_hoc);
        return view('admin_layout')->with('admin.student.edit_student',$manager_student);
    }
    public function save_edit_students(Request $Request, $id){
        $this->AuthLogin();
        $this->validations($Request);
        $data = $Request->all();
        $student = Students::find($id);
        $student->MaHocVien = $data['ma_hocvien'];
        $student->TenHocVien = $data['ten_hocvien'];
        $student->NgaySinh = $data['ngay_sinh'];
        $student->Lop = $data['lop'];
        $student->Diachi = $data['dia_chi'];
        $student->GhiChu = $data['ghi_chu'];
        $student->TinhTrang = $data['tinh_trang'];
        $student->SDT = $data['so_dienthoai'];
        $student->MaPH = $data['ma_phuhuynh'];
        $student->save();
        Session::put('message','Cập nhật thành công thông tin học viên');
        return Redirect::to('all_student');

    }
    public function delete_students($id){
        $this->AuthLogin();
        DB::table('tbl_students')->where('id',$id)->delete();
        Session::put('message','Xóa thành công học viên');
        return Redirect::to('all_student');
    }
     public function export_csv(){
        return Excel::download(new ExcelExport , 'danh_sach_hoc_vien.xlsx');
    }

    public function import_csv(Request $request){
        $path = $request->file('file')->getRealPath();
        Excel::import(new ExcelImport, $path);
        return back();
    }
     public function validation(Request $request){
         return $this->validate($request,[
            'ma_hocvien'=>'required|min:3|max:10',
            'ten_hocvien'=>'required|min:10|max:100',
            'ngay_sinh'=>'required',
            'dia_chi'=>'required|min:6|max:20',
            'so_dienthoai'=>'required',
            'ma_phuhuynh'=>'required',
        ],[
            'ma_hocvien.required'=>'Mã học viên không được bỏ trống',
            'ten_hocvien.required'=>'Tên học viên không được bỏ trống',
            'ngay_sinh.required'=>'Ngày sinh không được bỏ trống',
            'dia_chi.required'=>'Địa chỉ không được bỏ trống',
            'so_dienthoai.required'=>'Số điện thoại không được bỏ trống',
            'ma_phuhuynh.required'=>'Mã phụ huynh không được bỏ trống',
        ]);
    }
      public function validations(Request $request){
         return $this->validate($request,[
            'ma_hocvien'=>'required|min:3|max:10',
            'ten_hocvien'=>'required|min:10|max:100',
            'ngay_sinh'=>'required',
            'dia_chi'=>'required|min:6|max:20',
            'so_dienthoai'=>'required',
            'ma_phuhuynh'=>'required',
        ],[
            'ma_hocvien.required'=>'Mã học viên không được bỏ trống',
            'ten_hocvien.required'=>'Tên học viên không được bỏ trống',
            'ngay_sinh.required'=>'Ngày sinh không được bỏ trống',
            'dia_chi.required'=>'Địa chỉ không được bỏ trống',
            'so_dienthoai.required'=>'Số điện thoại không được bỏ trống',
            'ma_phuhuynh.required'=>'Mã phụ huynh không được bỏ trống',
        ]);
    }
    public function search_student(Request $Request){
        $this->AuthLogin();
        $keyword = $Request->keyword_submit;
         $search_student = DB::table('tbl_students')->where('MaHocVien','like','%'.$keyword.'%')->get();
         return view('admin.student.search_student')->with(compact('search_student'));
    }

}
