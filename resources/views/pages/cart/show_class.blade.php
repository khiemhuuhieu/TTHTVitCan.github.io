@extends('welcome')
@section('content')
@extends('welcome')
@section('content')
	<section id="cart_items">
		<div class="col-sm-14">
			<div class="breadcrumbs">
				<ol class="breadcrumb">
				  <li><a href="{{URL::to('/')}}">Home</a></li>
				  <li class="active">Khóa học của bạn</li>
				</ol>
			</div>
			<div class="table-responsive cart_info">
				<?php
				$content=Cart::content();
				?>
				<table class="table table-condensed">
					<thead>
						<tr class="cart_menu">
							<td class="images">Hình ảnh</td>
							<td class="description">Tên khóa học</td>
							<td class="price">Học phí</td>
							<td class="quantity">Số lượng khóa học</td>
							<td class="total">Tổng tiền</td>
							<td></td>
						</tr>
					</thead>
					<tbody>
						@foreach($content as $val_cart)
						<tr>
							<td class="cart_product">
								<a href=""><img src="{{URL::to('public/uploads/product/'.$val_cart->options->image)}}" alt="" width="70"></a>
							</td>
							<td class="cart_description">
								<h4><a href="">{{$val_cart->name}}</a></h4>
							</td>
							<td class="cart_price">
								<p>{{number_format($val_cart->price).' '.'đ'}}</p>
							</td>
							<td class="cart_quantity">
								<div class="cart_quantity_button">
									<form action="{{URL::to('/update_cart_quantity')}}" method="POST">
										{{csrf_field()}}
									<input class="cart_quantity_input" type="number" min="1" name="quantity" value="{{$val_cart->qty}}" autocomplete="off" size="2">
									<input type="hidden" value="{{$val_cart->rowId}}" name="row_cart" class="form-control">
									<input type="submit" value="Cập nhật" name="update_qty" class="btn btn-default btn-sm">
								</form>
								</div>
							</td>
							<td class="cart_total">
								<p class="cart_total_price">
									<?php
								$subtotal=$val_cart->price * $val_cart->qty;
								echo number_format($subtotal).' '.'VND';
								?>
								</p>
							</td>
							<td class="cart_delete">
								<a class="cart_quantity_delete" href="{{URL::to('/del_to_cart/'.$val_cart->rowId)}}"><i class="fa fa-times"></i></a>
							</td>
						</tr>
						@endforeach												
					</tbody>
				</table>
			</div>
		</div>
	</section> <!--/#cart_items-->
		<section id="do_action">
		<div class="container">

			<div class="row">
				<div class="col-sm-6">
					<div class="total_area">
						<ul>
							<li>Tổng tiền: <span>{{Cart::subtotal().' '.'đ'}}</span></li>
						</ul>
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
	</section><!--/#do_action-->
@endsection
@endsection