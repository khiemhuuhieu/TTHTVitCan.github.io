<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\Models\Admin;
use App\Models\Roles;
use Auth;
use DB;
use Session;
session_start();
class AuthController extends Controller
{
   public function register_auth(){
   	return view('admin.customer_auth.register');
   }
   public function register(Request $Request){
   	$data = $Request->all();

   $admin = new Admin();
   $admin->admin_email = $data['admin_email'];
   $admin->admin_password = md5($data['admin_password']);
   $admin->admin_name = $data['admin_name'];
   $admin->admin_phone = $data['admin_phone'];
   $admin->save();
   return Redirect::to('/register_auth')->with('message','Đăng kí thành công');
  } 
  public function login_auth(){
  	return view('admin.customer_auth.login_auth');
  }  
  public function login(Request $Request){
  	$data =$Request->all();
  	if(Auth::attempt(['admin_email'=>$Request->admin_email,'admin_password'=>$Request->admin_password])){
  		return Redirect::to('/dashboard');
  	}else{
  		return Redirect::to('/login_auth')->with('message','Lỗi đăng nhậpp');
  	}
  }
  public function logout_auth(){
  	Auth::logout();
  	return Redirect::to('/login_auth')->with('message','Đăng xuất thành công');
  }
}
