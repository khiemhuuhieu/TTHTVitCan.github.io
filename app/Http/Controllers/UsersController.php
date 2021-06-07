<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Route;
use App\Models\Roles;
use App\Models\Admin;
use App\Models\Employee;
use Validator;
use Auth;
use DB;
use Session;

class UsersController extends Controller
{
    public function index(){
    	$admin = Admin::with('roles')->orderBy('admin_id','DESC')->paginate(5);
    	return view('admin.users.all_users')->with(compact('admin'));
    }
    public function add_user(){
        $all_employee = DB::table('tbl_employee')->orderby('id','DESC')->get();
        return view('admin.users.add_user')->with(compact('all_employee'));
    }
    public function assign_roles(Request $request){
        if(Auth::id()==$request->admin_id){
            return Redirect()->back()->with('message','Mày admin mà quyền cao nhất rồi, phân quyền gì nữa.');
        }

        $user = Admin::where('admin_email',$request->admin_email)->first();
        $user->roles()->detach();
        if($request->director_role){
           $user->roles()->attach(Roles::where('name','director')->first());     
        }
        if($request->employee_role){
           $user->roles()->attach(Roles::where('name','employee')->first());     
        }
        if($request->teacher_role){
           $user->roles()->attach(Roles::where('name','teacher')->first());     
        }
        if($request->accountant_role){
           $user->roles()->attach(Roles::where('name','accountant')->first());     
        }
        if($request->admin_role){
           $user->roles()->attach(Roles::where('name','admin')->first());     
        }
        return redirect()->back()->with('message','Cấp quyền thành công');
    }
     public function store_users(Request $request){
        $this->validation($request);
        $data = $request->all();
        $admin = new Admin();
        $admin->admin_name = $data['admin_name'];
        $admin->admin_phone = $data['admin_phone'];
        $admin->admin_email = $data['admin_email'];
        $admin->MaNhanVien = $data['MaNhanVien'];
        $admin->admin_password = md5($data['admin_password']);
        $admin->save();
        $admin->roles()->attach(Roles::where('name','user')->first());
        Session::put('message','Thêm tài khoản thành công');
        return Redirect::to('users');
    }
    public function delete_user($admin_id){
        if(Auth::id() == $admin_id){
            return Redirect()->back()->with('message','Mày điên hả, mày là admin mà, xóa cc');
        }
        $admin=Admin::find($admin_id);

        if($admin){
            $admin->roles()->detach();
            $admin->delete();
        }
        return Redirect()->back()->with('message','Xóa tụi cấp dưới rồi nha.');
    }
    public function inpersonate($admin_id){
        $user = Admin::where('admin_id',$admin_id)->first();
        if($user){
            Session()->put('inpersonate',$user->admin_id);
        }
        return Redirect()->back()->with('/users');
    }
    public function inpersonate_destroy(){
        Session()->forget('inpersonate');
        return Redirect('/users');
    }
    public function validation(Request $request){
         return $this->validate($request,[
            'admin_password'=>'required|min:6|max:30',
        ],[
            'admin_password.required'=>'Không được bỏ trống. Mật khẩu ít nhất 6 kí tự',
          
        ]);
    }
}
