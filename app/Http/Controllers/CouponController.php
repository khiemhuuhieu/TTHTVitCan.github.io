<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\Models\OpenClass;
use App\Http\Requests;
use App\Models\Coupon;
use Session;
use Cart;
use DB;
use Auth;
session_start();
class CouponController extends Controller
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
    public function insert_coupon(){
    	$this->AuthLogin();
		return view('admin.coupon.add_coupon');
	}
	public function insert_coupon_code(Request $Request){
		$this->AuthLogin();
		$data = $Request->all();
		$coupon = new Coupon;
		$coupon->coupon_name = $data['coupon_name'];
		$coupon->coupon_code = $data['coupon_code'];
		$coupon->coupon_time = $data['coupon_time'];
		$coupon->coupon_condition = $data['coupon_condition'];
		$coupon->coupon_number = $data['coupon_number'];
		$coupon->save();
		Session::put('message',"Thêm mã thành công");
    	return Redirect::to('all_coupon');
	}
	public function all_coupon(){
		$this->AuthLogin();
		$coupon = Coupon::orderby('coupon_id','DESC')->get();
		return view('admin.coupon.all_coupon')->with(compact('coupon'));
	}
	public function delete_coupon($coupon_id){
		$this->AuthLogin();
		$coupon = Coupon::find($coupon_id);
		$coupon->delete();
		return Redirect::to('all_coupon')->with('message','Xóa thành công mã sản phẩm');
	}
}
