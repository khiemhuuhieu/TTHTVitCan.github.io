@extends('welcome')
@section('content')
<section id="form"><!--form-->
		<div class="container">
			<div class="row">
				<div class="col-sm-4">
					<div class="signup-form"><!--sign up form-->
						<h2>Đăng kí tài khoản</h2>
						<form action="{{URL::to('/add_customer')}}" method="POST">
							{{csrf_field()}}
							<input type="text" name="customer_name" placeholder="Tên tài khoản"/>
							     @if($errors->has('customer_name'))
                                   <span style="color: red">
                                    {{$errors->first('customer_name')}}
                                   @endif
							<input type="email" name="customer_email" placeholder="Email"/>
							     @if($errors->has('customer_email'))
                                   <span style="color: red">
                                    {{$errors->first('customer_email')}}
                                   @endif
							<input type="text" name="customer_address" placeholder="Địa chỉ"/>
							     @if($errors->has('customer_address'))
                                   <span style="color: red">
                                    {{$errors->first('customer_address')}}
                                   @endif
							<input type="telephone" name="customer_telephone" placeholder="Số điện thoại"/>
							     @if($errors->has('customer_telephone'))
                                   <span style="color: red">
                                    {{$errors->first('customer_telephone')}}
                                   @endif
							<input type="password" name="customer_password" placeholder="Mật khẩu"/>
							     @if($errors->has('customer_password'))
                                   <span style="color: red">
                                    {{$errors->first('customer_password')}}
                                   @endif
							<button type="submit" class="btn btn-default">Đăng kí</button>
						</form>
					</div><!--/sign up form-->
				</div>
				<div class="col-sm-4 col-sm-offset-1">
					<div class="login-form"><!--login form-->
						<h2>Đăng nhập tài khoản</h2>
						<form action="{{URL::to('/login_customer')}}" method="POST">
							{{csrf_field()}}
							<input type="email" name="email_account" placeholder="Tài khoản" />
							<input type="password" name="password_account" placeholder="Mật khẩu" />
							<span>
								<a href="{{URL::to('quen-mat-khau')}}">Quên mật khẩu</a>
							</span>
							<button type="submit" class="btn btn-default">Đăng nhập</button>
						</form>
					</div><!--/login form-->
				</div>
				<div class="col-sm-1">
					<h2 class="or">HOẶC</h2>
				</div>
			</div>
		</div>
	</section><!--/form-->	
@endsection