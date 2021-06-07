<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\Models\ProgrammingLanguage;
use App\Models\OpenClass;
use App\Models\Thematic;
use App\Http\Requests;
use App\Models\Student;
use App\Models\Orders;
use App\Models\OrderDetails;
use App\Models\Slider;
use App\Models\NewsCategory;
use App\Models\NotiCate;
use Session;
use Cart;
use DB;
session_start();

class CheckoutController extends Controller
{
    public function login_checkout(){
    $noti_cate = NotiCate::orderby('noti_cate_id','DESC')->get();
    $news_cate = NewsCategory::orderby('news_cate_id','DESC')->get();
    $slider= Slider::orderby('slider_id','DESC')->where('slider_status','1')->take(4)->get();
		$thematic = DB::table('tbl_thematic')->where('thematic_status','1')->orderby('thematic_id')->get();
		$language = DB::table('tbl_programminglanguage')->where('language_status','1')->orderby('language_id')->get();  
		return view('pages.checkout.login_checkout')->with(compact('thematic','language','slider','news_cate','noti_cate'));    	
    }
    public function add_customer(Request $Request){
    $this->validatetion($Request);
    $data=array();
    $data['customer_name'] = $Request->customer_name;
    $data['customer_email'] = $Request->customer_email;
    $data['customer_password'] = md5($Request->customer_password);
    $data['customer_phone'] = $Request->customer_telephone;
    $data['customer_address'] = $Request->customer_address;

    $customer_id = DB::table('tbl_customer')->insertGetId($data);

    Session::put('customer_id',$customer_id);
    Session::put('customer_name',$Request->customer_name);
    return Redirect::to('/checkout');
   }
   public function checkout(Request $Request){
         $customer = DB::table('tbl_customer')->orderby('customer_id','DESC')->get();
         $noti_cate = NotiCate::orderby('noti_cate_id','DESC')->get();
         $news_cate = NewsCategory::orderby('news_cate_id','DESC')->get();
         $slider= Slider::orderby('slider_id','DESC')->where('slider_status','1')->take(4)->get();
         $thematic = DB::table('tbl_thematic')->where('thematic_status','1')->orderby('thematic_id')->get();
		     $language = DB::table('tbl_programminglanguage')->where('language_status','1')->orderby('language_id')->get();  
         return view('pages.checkout.show_checkout')->with(compact('thematic','language','slider','news_cate','noti_cate','customer'));
   }
   public function login_customer(Request $Request){
    $email = $Request->email_account;
    $password = md5($Request->password_account);

    $result = DB::table('tbl_customer')->where('customer_email',$email)->where('customer_password',$password)->first();
    if($result){
        Session::put('customer_id',$result->customer_id);
        return Redirect::to('/checkout');
    }
    else{
        return Redirect::to('/login_checkout');
    }

   }
   public function logout_checkout(){
    Session::flush();
    return Redirect::to('/login_checkout');
   }
   public function validatetion(Request $request){
     return $this->validate($request,[
            'customer_name'=>'required|min:6|max:20',
            'customer_email'=>'required|min:20|max:40',
            'customer_password'=>'required|min:6|max:15',
            'customer_address'=>'required|min:6|max:60',
            'customer_telephone'=>'required|min:8|max:12',
        ],[
            'customer_name.required'=>'Tên không được bỏ trống, ít nhất 6 kí tự',
            'customer_email.required'=>'Email không được bỏ trống, ít nhất 20 kí tự',
            'customer_password.required'=>'Mật khẩu không được bỏ trống, ít nhất 6 kí tự',
            'customer_address.required'=>'Địa chỉ không được bỏ trống, ít nhất 6 kí tự',
            'customer_telephone.required'=>'SDT không được bỏ trống, ít nhất 7 nhập số',
        ]);
   }
   //  public function save_student(Request $Request){
   //  $data=array();
   //  $data['student_name'] = $Request->student_name;
   //  $data['student_level'] = $Request->student_level;
   //  $data['student_email'] = $Request->student_email;
   //  $data['student_phone'] = $Request->student_phone;
   //  $data['student_address'] = $Request->student_address;
   //  $data['student_note'] = $Request->student_note;

   //  $student_id = DB::table('tbl_student')->insertGetId($data);

   //  Session::put('student_id',$student_id);
   //  return Redirect::to('/payment');
   // }

   public function payment(){
         $noti_cate = NotiCate::orderby('noti_cate_id','DESC')->get();  
         $news_cate = NewsCategory::orderby('news_cate_id','DESC')->get();
         $slider= Slider::orderby('slider_id','DESC')->where('slider_status','1')->take(4)->get();
         $thematic = DB::table('tbl_thematic')->where('thematic_status','1')->orderby('thematic_id')->get();
         $language = DB::table('tbl_programminglanguage')->where('language_status','1')->orderby('language_id')->get();  
         return view('pages.payment.payment')->with(compact('thematic','language','slider','news_cate','noti_cate')); 
   }
    public function order_place(Request $Request){
    //insert payment
    $data=array();
    $data['payment_method'] = $Request->payment_option;
    $data['payment_status'] = 'Đang chờ xử lý';

    $payment_id=DB::table('tbl_payment')->insertGetId($data);

    //insert order
    $data_order = array();
    $data_order['customer_id'] = Session::get('customer_id');
    // $data_order['student_id'] = Session::get('student_id');
    $data_order['payment_id'] = $payment_id;
    $data_order['order_total'] = Cart::total();
    $data_order['order_status'] = 'Đang chờ xử lý';
    $order_id=DB::table('tbl_orders')->insertGetId($data_order);

    //insert order_details
    $content=Cart::content();
    foreach($content as $v_content){
    $data_order_details['order_id'] = $order_id;
    $data_order_details['class_id'] = $v_content->id;
    $data_order_details['class_name'] = $v_content->name;
    $data_order_details['tuition'] = $v_content->price;
    $data_order_details['student_number'] = $v_content->qty;
    $order_details_id = DB::table('tbl_order_details')->insertGetId($data_order_details);
    }

    if($data['payment_method'] == 1){
      echo 'Thanh toán thẻ';
    }
    elseif($data['payment_method'] == 2){
      Cart::destroy();
      $noti_cate = NotiCate::orderby('noti_cate_id','DESC')->get();
      $news_cate = NewsCategory::orderby('news_cate_id','DESC')->get();
       $slider= Slider::orderby('slider_id','DESC')->where('slider_status','1')->take(4)->get();
       $thematic = DB::table('tbl_thematic')->where('thematic_status','1')->orderby('thematic_id')->get();
       $language = DB::table('tbl_programminglanguage')->where('language_status','1')->orderby('language_id')->get(); 
      return view('pages.checkout.handcard')->with(compact('thematic','language','slider','news_cate','noti_cate'));
    }
    else{
      echo'Thanh toán thẻ ghi nợ';
    }
   }

   //checkout

    public function confirm_order(Request $Request){

    $data = $Request->all();
    $order = new Orders();
    $checkout_code = substr(md5(microtime()),rand(0,26),5);
    $order->customer_id = Session::get('customer_id');
    $order->order_status = 1;
    $order->order_code = $checkout_code;
    date_default_timezone_set('Asia/Ho_Chi_Minh');
    $order->created_at= now();
    $order->save();
    
    if(Session::get('cart')==true){
      foreach(Session::get('cart') as $key=>$val){

        $order_details= new OrderDetails;
    
        $order_details->class_id = $val['class_id'];
        $order_details->order_code = $checkout_code;
        $order_details->class_name = $val['class_name'];
        $order_details->student_number = $val['student_qty'];
        $order_details->tuition = $val['tuition'];
        $order_details->coupon =$data['order_coupon'];
        $order_details->save();
      }
    }
    Session::forget('coupon');
    Session::forget('cart');

   }
}
