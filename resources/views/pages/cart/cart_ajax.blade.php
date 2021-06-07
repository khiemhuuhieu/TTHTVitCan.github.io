@extends('welcome')
@section('content')

<section id="cart_items">
	        <div class="col-sm-14">
			<div class="breadcrumbs">
				<ol class="breadcrumb">
				  <li><a href="{{URL::to('/')}}">Home</a></li>
				  <li class="active">Đăng kí khóa học</li>
				</ol>
			</div>
			  @if(Session()->has('message'))
			        <div class="alert alert-success">
			        	{!!Session()->get('message')!!}
			        </div>
			       @elseif(Session()->has('error'))
			       <div class="alert alert-danger">  
			       {!!Session()->get('error')!!} 
			       </div>
			  @endif
			<div class="table-responsive cart_info">
				<form action="{{URL::to('/update_cart')}}" method="POST">
					@csrf
				<table class="table table-condensed">
					<thead>
						<tr class="cart_menu">
							<td class="description">Tên khóa học</td>
							<td class="price">Học phí</td>
							<td class="description">SL học viên</td>
							<td class="description">Số lượng</td>
							<td class="total">Tổng tiền</td>
							<td colspan="2">Xóa</td>
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
							<td class="student_number">
								<p>{{$cart_ajax['student_number']}}</p>
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
						<td><a class="btn btn-default check_out" href="{{URL::to('/del_all_cart')}}">Hủy Đăng Kí</a></td>
						<td>
							<?php
							if(Session::get('customer_id')){
							?>
							<a class="btn btn-default check_out" href="{{URL::to('/checkout')}}">Đăng kí khóa học</a>
							<?php
						     }else{
							?>
							<a class="btn btn-default check_out" href="{{URL::to('/login_checkout')}}">Đăng kí khóa học</a>
							<?php
						}
							?>
						</td>
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
					    </td>
					</tr>
					<?php
				}else{
					?>
					<tr>
					<td colspan="5">
					<center>
					<?php
					echo 'Làm ơn quay lại trang chủ đăng kí khóa học';
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
	</section>
@endsection