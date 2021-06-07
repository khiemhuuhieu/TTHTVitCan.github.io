<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\Models\Thematic;
use App\Models\Orders;
use App\Models\OrderDetails;
use App\Models\Coupon;
use App\Models\Customer;
use App\Models\Student;
use App\Http\Requests;
use App\Models\OpenClass;
use Session;
use DB;
use PDF;
session_start();

class OrderController extends Controller
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
     public function manager_order(){
    	$order= Orders::orderby('created_at','DESC')->get();
    	return view('admin.manager_order.manager_order')->with(compact('order'));
    }
    public function view_order($order_code){
		$order_details = OrderDetails::where('order_code',$order_code)->get();
		$order = Orders::where('order_code',$order_code)->get();
		foreach($order as $key=>$ord){
			$customer_id = $ord->customer_id;
			$student_id = $ord->student_id;
			$order_status = $ord->order_status; 
		}
		$customer = Customer::where('customer_id',$customer_id)->first();
		$order_details_product= OrderDetails::with('class')->where('order_code',$order_code)->get();
		foreach($order_details_product as $key=>$pr_coupon){
			$product_coupon=$pr_coupon->coupon;
		}
		if($product_coupon !='no'){
			$coupon= Coupon::where('coupon_code',$product_coupon)->first();
		    $coupon_condition = $coupon->coupon_condition;
		    $coupon_number = $coupon->coupon_number;
		}else{
			$coupon_condition=2;
			$coupon_number=0;
		}
		return view('admin.manager_order.view_order')->with(compact('order_details','customer','order_details_product','coupon_condition','coupon_number','order','order_status'));
	}
	public function print_order($checkout_code){
		$pdf= \App::make('dompdf.wrapper');
		$pdf->loadHTMl($this->print_order_convert($checkout_code));
		return $pdf->stream();
	}
	public function print_order_convert($checkout_code){
		$order_details = OrderDetails::where('order_code',$checkout_code)->get();
		$order = Orders::where('order_code',$checkout_code)->get();
		foreach($order as $key=>$ord){
			$customer_id = $ord->customer_id;
			$student_id = $ord->student_id;
		}
		$customer = Customer::where('customer_id',$customer_id)->first();
		$order_details_product= OrderDetails::with('class')->where('order_code',$checkout_code)->get();
		foreach($order_details_product as $key=>$pr_coupon){
			$product_coupon=$pr_coupon->coupon;
		}
		if($product_coupon !='no'){
			$coupon= Coupon::where('coupon_code',$product_coupon)->first();
		    $coupon_condition = $coupon->coupon_condition;
		    $coupon_number = $coupon->coupon_number;
		    if($coupon_condition==1){
		    	$coupon_echo=$coupon_number.'%';
		    }elseif($coupon_condition==2){
		    	$coupon_echo =number_format($coupon_number,0,',','.').'đ';
		    }
		}else{
			$coupon_condition=2;
			$coupon_number=0;
			$coupon_echo=0;
		}
		$output='';
		$output.='
		<style>body{
			font-family: Dejavu Sans;
			}
			.table-styling{
				border:1px solid #000;
			}
			.table-styling tr th{
				border:1px solid #000;
			}
			.table-styling tr td{
				border:1px solid #000;
			}
			</style>
			<h2><center>Trung Tâm Tin Học Vịt Cạn</center></h2>
			<p style="text-align: right;">Ngày.......tháng.....năm....</p>
			<h3><center>Hóa đơn Thanh Toán Học Phí</center></h3>
			<p>Thông tin học viên:</p>
			 <table class="table-styling">
				    <thead>
				      <tr>
				        <th>Tên học viên</th>
				        <th>Số điện thoại</th>
				        <th>Email</th>
				        <th>Địa chỉ</th>
				      </tr>
				    </thead>
				    <tbody>
				    .';
				    	$output.='
				      <tr>
				        <td>'.$customer->customer_name.'</td>
				        <td>'.$customer->customer_phone.'</td>
				        <td>'.$customer->customer_email.'</td>
				        <td>'.$customer->customer_address.'</td>
				      </tr>
				      ';
				      $output.='
				    </tbody>
				  </table>
		          ';
              $output.='
				<p>Chi tiết hóa đơn:</p>
				 <table class="table-styling">
					    <thead>
					      <tr>
					        <th>Tên khóa học</th>
					        <th>Học phí</th>
					        <th>Số lượng</th>
					        <th>Mã giảm giá</th>
					        <th>Tổng tiền</th>
					      </tr>
					    </thead>
					    <tbody>
					    .';
				    $total=0;
				    foreach($order_details_product as $key=>$val){
				    	$subtotal=$val->student_number * $val->tuition;
				    	$total+=$subtotal;
				    	if($val->product_coupon!='no'){
				    		$product_coupon=$val->coupon;
				    	}else{
				    		$product_coupon='Không mã';
				    	}
				    	$output.='
				      <tr>
				        <td>'.$val->class_name.'</td>
				        <td>'.number_format($val->tuition,0,',','.').'đ'.'</td>
				        <td>'.$val->student_number.'</td>
				        <td>'.$product_coupon.'</td>
				        <td>'.number_format($val->tuition * $val->student_number,0,',','.').'đ'.'</td>
				      </tr>
				      ';
				  }
				  if($coupon_condition==1){
				   	
		               $total_after_coupon=($total * $coupon_number)/100;
		               $total_coupon=$total - $total_after_coupon ;
		            }elseif($coupon_condition==2){

		               $total_coupon=$total-$coupon_number ;
		            }
				  $output.='
				  <tr>
				  <td colspan="6">
				   <p>Tổng tiền: '. number_format($total,0,',','.').'đ'.'</p>
				  <p>Tiền giảm: '.$coupon_echo.'</p>
				  <p>Thanh toán: '.number_format($total_coupon,0,',','.').'đ'.'</p>
				  <p>Bằng chữ:...............................................................</p>
				  </td>
				  </tr>
				  ';
				      $output.='
				    </tbody>
				  </table>
				  <p><center>Kí tên</center></p>
			 <table>
				    <thead>
				      <tr>
				        <th width="200px">Người lập phiếu</th>
				        <th width="800px">Người nhận</th>
				      </tr>
				    </thead>
				    <tbody>
				    .';
				      $output.='
				    </tbody>
				  </table>
		          ';



		return $output;
	}
	public function update_student_number(Request $Request){
		$data=$Request->all();
		$order = Orders::find($data['order_id']);
		$order->order_status = $data['order_status'];
		$order->save(); 
		if($order->order_status==2){
			foreach ($data['order_class_id'] as $key => $value) {
				$class= OpenClass::find($value);
				$student_quantity = $class->student_number;
				$student_sold =$class->student_sold; 
			    foreach ($data['quantity'] as $key2 => $qty) {
				if($key==$key2){
					$student_remain = $student_quantity - $qty;
					$class->student_number =$student_remain;
					$class->student_sold = $student_sold + $qty;
					$class->save();
				}
			}
			}
		}elseif($order->order_status!=2 && $order->order_status!=3){
			foreach ($data['order_class_id'] as $key => $value) {
				$class= OpenClass::find($value);
				$student_quantity = $class->student_number;
				$student_sold =$class->student_sold; 
			    foreach ($data['quantity'] as $key2 => $qty) {
				if($key==$key2){
					$student_remain = $student_quantity + $qty;
					$class->student_number =$student_remain;
					$class->student_sold = $student_sold - $qty;
					$class->save();
				}
			}
			}

		}
	}
	public function update_student_qty(Request $Request){
		$data = $Request->all();
		$order_details = OrderDetails::where('class_id',$data['class_id'])->where('order_code',$data['order_code'])->first();
		$order_details->student_number = $data['student_number_limit'];
		$order_details->save();

	}

}
