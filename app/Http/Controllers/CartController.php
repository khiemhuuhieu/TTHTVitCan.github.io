<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\Models\ProgrammingLanguage;
use App\Models\OpenClass;
use App\Models\Thematic;
use App\Http\Requests;
use App\Models\Coupon;
use App\Models\Slider;
use App\Models\NewsCategory;
use App\Models\NotiCate;
use Session;
use Cart;
use DB;
session_start();

class CartController extends Controller
{
    public function save_class_cart(Request $request){
    	 $classId = $request->class_id_hidden;
    	 $quantity = $request->qty;
    	 $class_info = DB::table('tbl_class')->where('class_id',$classId)->first();

    	 $thematic = DB::table('tbl_thematic')->where('thematic_status','1')->orderby('thematic_id')->get();
    	 $language = DB::table('tbl_programminglanguage')->where('language_status','1')->orderby('language_id')->get();
    	 $data['id'] = $classId;
          $data['qty'] = $quantity;
    	 $data['name'] = $class_info->class_name;
    	 $data['price'] = $class_info->tuition;
    	 $data['options']['image'] = $class_info->class_image;
    	 $data['weight'] = 123;
    	Cart::add($data);
        return Redirect::to('show_class');
        // Cart::destroy();
    	
    }
    public function show_class(){
        $noti_cate = NotiCate::orderby('noti_cate_id','DESC')->get();
        $news_cate = NewsCategory::orderby('news_cate_id','DESC')->get();
        $slider= Slider::orderby('slider_id','DESC')->where('slider_status','1')->take(4)->get();
	    $thematic = DB::table('tbl_thematic')->where('thematic_status','1')->orderby('thematic_id')->get();
	    $language = DB::table('tbl_programminglanguage')->where('language_status','1')->orderby('language_id')->get();
	    return view('pages.cart.show_class')->with(compact('thematic','language','slider','news_cate','noti_cate'));    	
    }
     public function del_to_cart($rowId){
    	Cart::update($rowId,0);
    	return Redirect::to('show_class');
    }
     public function update_quantity(Request $Request){
        $rowId=$Request->row_cart;
        $quantity=$Request->quantity;
        Cart::update($rowId,$quantity);
        return Redirect::to('/show_class');
    }

    //cart ajax
     public function add_cart_ajax(Request $request){
        $data = $request->all();
        print_r($data);
        $session_id = substr(md5(microtime()),rand(0,26),5);
        $cart = Session::get('cart');
        if($cart==true){
            $is_avaiable = 0;
            foreach($cart as $key => $val){
                if($val['class_id'] == $data['cart_class_id']){
                    $is_avaiable++;
                }
            }
            if($is_avaiable == 0){
                $cart[] = array(
                'session_id' => $session_id,
                'class_name' => $data['cart_class_name'],
                'class_id' => $data['cart_class_id'],
                'class_image' => $data['cart_class_image'],
                'student_number' => $data['cart_class_student_number'],
                'student_qty' => $data['cart_student_qty'],
                'tuition' => $data['cart_tuition'],
                );
                Session::put('cart',$cart);
            }
        }else{
            $cart[] = array(
                'session_id' => $session_id,
                'class_name' => $data['cart_class_name'],
                'class_id' => $data['cart_class_id'],
                'student_number' => $data['cart_class_student_number'],
                'class_image' => $data['cart_class_image'],
                'student_qty' => $data['cart_student_qty'],
                'tuition' => $data['cart_tuition'],
            );
        }
        Session::put('cart',$cart);
        Session::save();

    }
    public function update_cart(Request $Request){
        $data = $Request->all();
        $cart = Session::get('cart');
        if($cart == true){
            $message= '';

            foreach($data['cart_qty'] as $key =>$qty){

                foreach($cart as $session =>$val){

                    if($val['session_id']== $key && $qty<$cart[$session]['student_number']){
                        $cart[$session]['student_qty']=$qty;
                        $message .='<p style="color:blue">Bạn được phép mua khóa học :'.$cart[$session]['class_name'].' '.'Chúc mừng nha!!!</p>';

                    }elseif ($val['session_id']== $key && $qty>$cart[$session]['student_number']) {
                        $message .='<p style="color:red">Số lượng học viên vượt quá quy định :'.$cart[$session]['class_name'].' '.'Sorry</p>';
                    }
                }
            }
            Session::put('cart',$cart);
            return Redirect()->back()->with('message',$message);
        }else{
            return Redirect()->back()->with('error','Cập nhật số lượng khóa học thất bại');
        }
    }
     public function delete_class_home($session_id){
        $cart = Session::get('cart');
        if($cart == true){
            foreach($cart as $key =>$val){
                if($val['session_id']==$session_id){
                    unset($cart[$key]);
                }
            }
            Session::put('cart',$cart);
            return Redirect()->back()->with('message','Xóa thành công khóa học');
        }else{
            return Redirect()->back()->with('message','Xóa thất bại thất bại');
        }
    } 
     public function del_all_cart(){
        $cart=Session::get('cart');
        if($cart==true){
            Session::forget('cart');
            return Redirect()->back()->with('message','Xóa hết khóa học');
        }
    }

     public function gio_hang(Request $Request){ 
        $noti_cate = NotiCate::orderby('noti_cate_id','DESC')->get();
        $news_cate = NewsCategory::orderby('news_cate_id','DESC')->get();
        $slider= Slider::orderby('slider_id','DESC')->where('slider_status','1')->take(4)->get();
        $thematic = DB::table('tbl_thematic')->where('thematic_status','1')->orderby('thematic_id')->get();
        $language = DB::table('tbl_programminglanguage')->where('language_status','1')->orderby('language_id')->get();
        return view('pages.cart.cart_ajax')->with(compact('thematic','language','slider','news_cate','noti_cate')); 
    }
    //check coupon

       public function check_coupon(Request $Request){
        $data = $Request->all();
        $coupon = Coupon::where('coupon_code',$data['coupon_code'])->first();
        if($coupon){
            $coupon_count = $coupon->count();
            if($coupon_count > 0){
                $coupon_session = Session::get('coupon');
                if($coupon_session == true){
                    $is_avaiable = 0;
                    if($is_avaiable == 0){
                        $cou[]=array(
                            'coupon_code' => $coupon->coupon_code,
                            'coupon_condition' => $coupon->coupon_condition,
                            'coupon_number' => $coupon->coupon_number,
                        );
                        Session::put('coupon',$cou);
                    }
                }else{
                         $cou[] = array(
                            'coupon_code' => $coupon->coupon_code,
                            'coupon_condition' => $coupon->coupon_condition,
                            'coupon_number' => $coupon->coupon_number,
                        );
                        Session::put('coupon',$cou);
                        }
                 Session::save();
                 return Redirect()->back()->with('message','Thêm mã giảm giá thành công');       
            }
        }else{
                return Redirect()->back()->with('error','Thêm mã giảm giá thất bại'); 
             }
    }
    public function unset_coupon(){
        $coupon=Session::get('coupon');
        if($coupon==true){
            Session::forget('coupon');
            return Redirect()->back()->with('message','Xóa mã khuyến mãi');
        }
    }
}
