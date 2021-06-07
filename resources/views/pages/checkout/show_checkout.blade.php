@extends('welcome')
@section('content')
<section id="cart_items">
	        <div class="col-sm-14">
			<div class="breadcrumbs">
				<ol class="breadcrumb">
				  <li><a href="{{URL::to('/')}}">Home</a></li>
				  <li class="active">Thanh toán</li>
				</ol>
			</div>
			<div class="shopper-informations">
				<div class="row">
					<div class="col-sm-6 clearfix">
						<p>Thông tin của bạn</p>
						<div class="shopper-info">
							<?php
							 $customer_id = Session::get('customer_id');
							 	foreach($customer as $key=>$val){
							 		if($val->customer_id ==$customer_id){
							?>
							<form action="{{URL::to('/save_student')}}" method="POST">
								@csrf()
								<input type="text" name="customer_name" value="{{$val->customer_name}}">
								<input type="email" name="customer_email"  value="{{$val->customer_email}}">
								<input type="text" name="customer_phone"  value="{{$val->customer_phone}}">
								<input type="text" name="customer_address" value="{{$val->customer_address}}">
								@if(Session::get('coupon'))
								@foreach(Session::get('coupon') as $key=>$cou)
								<input type="hidden" name="order_coupon" class="order_coupon" value="{{$cou['coupon_code']}}">
								@endforeach
								@else
								<input type="hidden" name="order_coupon" class="order_coupon" value="no">
								@endif
								<div class="">
									<div class="form-group">
										<label for="exampleInputPassword">Chọn hình thức thanh toán</label>
									<select class="payment_select" class="form-control input-sm m-bot15 payment_select">
										<option value="0">Qua chuyển khoản</option>
										<option value="1">Tiền mặt</option>
									</select>
									</div>
								</div>
								<input type="button" name="send_class" value="XÁC NHẬN ĐĂNG KÍ KHÓA HỌC" class="btn btn-primary btn-sm send_class">
							</form>
							<?php
						}
					  }
							?>
						</div>
					</div>			
				</div>
			</div>
			<div class="table-responsive cart_info">
				<form action="{{URL::to('/update_cart')}}" method="POST">
					@csrf
				<table class="table table-condensed">
					<thead>
						<tr class="cart_menu">
							<td class="description">Tên khóa học</td>
							<td class="price">Học phí</td>
							<td class="quantity">Số lượng khóa học</td>
							<td class="total">Tổng tiền</td>
							<td></td>
						</tr>
					</thead>
					<tbody>
						<?php
						if(Session::get('cart')==true){
						$total=0;
					    foreach(Session::get('cart') as $key =>$cart_ajax){
						$subtotal = $cart_ajax['tuition']*$cart_ajax['student_qty'];
						$total+=$subtotal;						
					    ?>
						<tr>
							<td class="cart_description">
								<h4><a href="">{{$cart_ajax['class_name']}}</a></h4>
							</td>
							<td class="cart_price">
								<p>{{number_format($cart_ajax['tuition'],0,',','.')}}đ</p>
							</td>
							<td class="cart_quantity">
								<div class="cart_quantity_button">
							<input class="cart_quantity_input" type="number" min="1" name="cart_qty[{{$cart_ajax['session_id']}}]" value="{{$cart_ajax['student_qty']}}">
								</div>
							</td>
							<td class="cart_total">
								<p class="cart_total_price">
									{{number_format($subtotal,0,',','.')}}đ
							   </p>
							</td>
							<td class="cart_delete">
								<a class="cart_quantity_delete" href="{{URL::to('/delete_class_home/'.$cart_ajax['session_id'])}}"><i class="fa fa-times"></i></a>
							</td>
						</tr>
						<?php
					}
						?>
						<tr>
						<td><input type="submit" value="Cập nhật khóa học" name="update_qty" class="btn btn-default check_out"></td>
						<td><a class="btn btn-default check_out" href="{{URL::to('/del_all_cart')}}">Xóa tất cả</a></td>
						<td>
							<?php
							if(Session::get('coupon')){
							?>
							<a class="btn btn-default check_out" href="{{URL::to('/unset_coupon')}}">Xóa mã</a>
							<?php
						     }
							?>
						</td>
						<td colspan="6">
						   <li style="list-style: none;">Tổng tiền: <span>{{number_format($total,0,',','.')}}đ</span></li>

						   <?php
						     if(Session::get('coupon')){
						    ?>
						     <li style="list-style: none;">
						     	<?php
						   	    foreach(Session::get('coupon') as $key=>$cou){
						   	         if($cou['coupon_condition']==1){
						   	    ?>						   
						   	     Giảm giá theo phần trăm: {{$cou['coupon_number']}}%

						   	    <p>
						   	    	<?php
						   	    	$total_coupon = ($total * $cou['coupon_number'])/100;
						   	    	?>
						   	    </p>
						   	    <p>
						   	    	<?php
						   	    	 $total_after_coupon = $total - $total_coupon;
						   	    	?>
						   	    </p>
						   	    <p><li style="list-style: none;">Tổng đã giảm: {{number_format($total_after_coupon,0,',','.')}}đ</li></p>
						   	    <?php
						   	     }elseif($cou['coupon_condition']==2){
						   	    ?>
						   	    Số tiền giảm: {{number_format($cou['coupon_number'],0,',','.')}}đ
						   	    <p>
						   	    	<?php
						   	    	$total_coupon=$total - $cou['coupon_number'];
						   	    	?>
						   	    </p>
						   	     <p><li style="list-style: none;">Tổng đã giảm: {{number_format($total_coupon,0,',','.')}}đ</li>
						   	   <?php
						   	   }
						      }
						   	   ?>
						   	   </li>
						   	   <?php
						   	    }
						         ?>
						         <div class="col-md-12">
						         	<div id="paypal-button"></div>
						         </div>
					    </td>
					</tr>
					<?php
				}else{
					?>
					<tr>
					<td colspan="5">
					<center>
					<?php
					echo 'Quay lại trang chủ để đăng kí khóa học';
					?>
				    </center>
				    </td>
				    </tr>
					<?php
				   }
					?>
					</tbody>
					</form>
					<?php
					if(Session::get('cart')){
					?>
					<tr>
					<td>
						<form action="{{URL::to('/check_coupon')}}" method="POST">
							{{csrf_field()}}
						<input type="text" class="form-control" name="coupon_code" placeholder="Nhập mã giảm giá"><br>
					    <input type="submit" class="btn btn-default check_coupon" name="check_coupon" value="Tính mã giảm giá" >
					    </form>
					     </td>
					 </tr>
					<?php
				     }
					 ?>
				</table>
			</div>
		</div>
	</section> <!--/#cart_items-->
	<!-- <section id="do_action">
				<div class="col-sm-6">
					<div class="total_area">
						<ui>
							<li>Thành tiền<span>{{Cart::subtotal().' '.'VND'}}</span></li>
						</ul>
							<<a class="btn btn-default update" href="">Update</a> 
							  <?php
                                $customer_id=Session::get('customer_id');
                                if($customer_id!=NULL){
                                
                                ?>
                              <a class="btn btn-default check_out" href="{{URL::to('/checkout')}}">Thanh toán</a>
                                <?php
                                }else{
                                ?>
                                <a class="btn btn-default check_out" href="{{URL::to('/login_checkout')}}">Thanh toán</a>
                                <?php
                                 }
                                ?>
					</div>
				</div>
			</div>
		</div>
	</section> -->
@endsection