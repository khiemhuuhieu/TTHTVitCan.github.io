<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Models\Position;
use App\Models\Employee;
use DB;
use Session;
use Auth;

class EmployeeController extends Controller
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
    public function all_employee(){
    	  $this->AuthLogin();
        $all_employee = DB::table('tbl_employee')->join('tbl_position','tbl_position.position_id','=','tbl_employee.ChucVu')->orderby('id','DESC')->paginate(8);
        $manager_employee = view('admin.employee.all_employee')->with('all_employee',$all_employee);
        return view('admin_layout')->with('admin.employee.all_employee', $manager_employee);
    }
    public function add_employee(){
    	$this->AuthLogin();
    	$position = DB::table('tbl_position')->orderby('position_id','desc')->get();
    	return view('admin.employee.add_employee')->with(compact('position'));
    }
    public function save_employee(Request $Request){
        $this->AuthLogin();
        $this->validation($Request);
        $data=array();    
        $data['MaNhanVien'] = $Request->MaNhanVien;
        $data['TenNhanVien'] = $Request->TenNhanVien;
        $data['NgaySinh'] = $Request->NgaySinh;
        $data['SDT'] = $Request->SDT;
        $data['Email'] = $Request->Email;       
        $data['DiaChi'] = $Request->DiaChi;
        $data['TrinhDo'] = $Request->TrinhDo;
        $data['ChucVu'] = $Request->ChucVu;
        $data['HinhAnh']=$Request->HinhAnh;
        $get_image=$Request->file('HinhAnh');
        if($get_image)
        {
            $get_name_image=$get_image->getClientOriginalName();
            $name_image=current(explode('.',$get_name_image));
            $new_image=$name_image.rand(0,99).'.'.$get_image->getClientOriginalExtension();
             $get_image->move('public/uploads/product',$new_image);
            $data['HinhAnh']=$new_image;
            DB::table('tbl_employee')->INSERT($data);
            Session::put('message','Th??m nh??n vi??n th??nh c??ng');
            return Redirect::to('all_employee');
        }else
        {
            $data['HinhAnh']='';
            DB::table('tbl_employee')->INSERT($data);
            return Redirect::to('all_employee');
        }
     }
     public function edit_employee($id){
        $this->AuthLogin();
        $position = Position::orderby('position_id','DESC')->get();
        $edit_employee = Employee::where('id',$id)->orderby('id','DESC')->get();
        return view('admin.employee.edit_employee')->with(compact('edit_employee','position'));
     }
     public function update_employee(Request $Request, $id){
        $this->AuthLogin();
        $this->validations($Request);
        $data=array();
        $data['MaNhanVien'] = $Request->MaNhanVien;
        $data['TenNhanVien'] = $Request->TenNhanVien;
        $data['ChucVu'] = $Request->ChucVu;
        $data['TrinhDo'] = $Request->TrinhDo;
        $data['NgaySinh'] = $Request->NgaySinh;       
        $data['SDT'] = $Request->SDT;
        $data['Email'] = $Request->Email;
        $data['DiaChi'] = $Request->DiaChi;

        $get_image=$Request->file('HinhAnh');
        if($get_image)
        {
            $get_name_image=$get_image->getClientOriginalName();
            $name_image=current(explode('.',$get_name_image));
            $new_image=$name_image.rand(0,99).'.'.$get_image->getClientOriginalExtension();
            $get_image->move('public/uploads/product',$new_image);
            $data['HinhAnh']=$new_image;
            DB::table('tbl_employee')->where('id',$id)->update($data);
            Session::put('message',"C???p nh???t th??ng tin nh??n vi??n th??nh c??ng");
            return Redirect::to('all_employee');
        }

        DB::table('tbl_employee')->where('id',$id)->update($data);
        Session::put('message',"C???p nh???p th??ng tin nh??n vi??n th??nh c??ng");
        return Redirect::to('all_employee');
     }
     public function del_employee($id){
        $this->AuthLogin();
        DB::table('tbl_employee')->where('id',$id)->delete();
        Session::put('message','X??a th??nh c??ng nh??n vi??n');
        return Redirect()->back();
     }
     public function thong_tin_ca_nhan(){
        $rele_employee =DB::table('tbl_employee')->join('tbl_admin','tbl_employee.Email','=','tbl_admin.admin_email')->orderby('tbl_employee.id')->get();
        $manager_employee = view('admin.caNhan.tieusu')->with('rele_employee',$rele_employee);
        return view('admin_layout')->with('admin.caNhan.tieusu',$manager_employee);
     }
       public function validation(Request $request){
         return $this->validate($request,[
            'MaNhanVien'=>'required|min:3|max:10',
            'TenNhanVien'=>'required|min:5|max:100',
            'NgaySinh'=>'required',
            'SDT'=>'required|min:9|max:10',
            'Email'=>'required',
            'DiaChi'=>'required',
            'TrinhDo'=>'required',
            'HinhAnh'=>'required|mimes:jpg,bmp,png',
        ],[
            'MaNhanVien.required'=>'M?? nh??n vi??n kh??ng ???????c b??? tr???ng',
            'TenNhanVien.required'=>'T??n nh??n vi??n kh??ng ???????c b??? tr???ng',
            'NgaySinh.required'=>'Ng??y sinh kh??ng ???????c b??? tr???ng',
            'SDT.required'=>'S??? ??i???n tho???i kh??ng ???????c b??? tr???ng',
            'Email.required'=>'Email kh??ng ???????c b??? tr???ng',
            'DiaChi.required'=>'?????a ch??? kh??ng ???????c b??? tr???ng',
            'TrinhDo.required'=>'Tr??nh ????? kh??ng ???????c b??? tr???ng',
            'HinhAnh.required'=>'H??nh ???nh kh??ng ???????c b??? tr???ng',
        ]);
    }
     public function validations(Request $request){
         return $this->validate($request,[
            'MaNhanVien'=>'required|min:3|max:10',
            'TenNhanVien'=>'required|min:5|max:100',
            'NgaySinh'=>'required',
            'SDT'=>'required|min:9|max:10',
            'Email'=>'required',
            'DiaChi'=>'required',
            'TrinhDo'=>'required',
        ],[
            'MaNhanVien.required'=>'M?? nh??n vi??n kh??ng ???????c b??? tr???ng',
            'TenNhanVien.required'=>'T??n nh??n vi??n kh??ng ???????c b??? tr???ng',
            'NgaySinh.required'=>'Ng??y sinh kh??ng ???????c b??? tr???ng',
            'SDT.required'=>'S??? ??i???n tho???i kh??ng ???????c b??? tr???ng',
            'Email.required'=>'Email kh??ng ???????c b??? tr???ng',
            'DiaChi.required'=>'?????a ch??? kh??ng ???????c b??? tr???ng',
            'TrinhDo.required'=>'Tr??nh ????? kh??ng ???????c b??? tr???ng',
        ]);
    }
    public function search_employee(Request $Request){
        $this->AuthLogin();
         $keyword = $Request->keyword_submit;
        $search_employee = DB::table('tbl_employee')->join('tbl_position','tbl_position.position_id','=','tbl_employee.ChucVu')->where('TenNhanVien','like','%'.$keyword.'%')->get();
        return view('admin.employee.search_employee')->with(compact('search_employee'));
    }
}
