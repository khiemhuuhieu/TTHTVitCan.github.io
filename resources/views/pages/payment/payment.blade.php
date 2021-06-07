@extends('welcome')
@section('content')

	<section id="cart_items">
		<div class="col-sm-12">
			<div class="breadcrumbs">
				<ol class="breadcrumb">
				  <li><a href="#">Home</a></li>
				  <li class="active">Thanh toán</li>
				</ol>
			</div><!--/breadcrums-->
			<div class="table-responsive cart_info">
				<?php
				$content= Cart::content();
				?>
				<table class="table table-condensed">
					<thead>
						<tr class="cart_menu">
							<td class="images">Hình ảnh</td>
							<td class="description">Tên khóa học</td>
							<td class="price">Học phí</td>
							<td class="quantity">Khóa học</td>
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
			<h4 style="margin: 40px;font-size: 20px">Chọn hình thức thanh toán</h4>
			<form action="{{URL::to('/order_place')}}" method="POST">
				{{csrf_field()}}
			<div class="payment-options">
					<span>
						<label><input name="payment_option" value="1" type="checkbox">Thanh toán bằng thẻ</label>
					</span>
					<span>
						<label><input name="payment_option" value="2" type="checkbox">Thanh toán trực tiếp</label>
					</span>
					<span>
						<label><input name="payment_option" value="3" type="checkbox">Thanh toán bằng the ghi nợ</label>
					</span>
					<br>
					<span><label><input type="submit" value="Thanh toán" name="send_to_order" class="btn btn-primary btn-sm"></label></span>	
				</div>
			</form>
		</div>
	</section> <!--/#cart_items-->

@endsection