@extends('welcome')
@section('content')
<section id="form"><!--form-->
		<div class="container">
			<div class="row">
				<div class="col-sm-12 col-sm-offset-1">
					<div class="login-form"><!--login form-->
						<h2>Điền email để lấy mật khẩu</h2>
						<form action="{{URL::to('/login_customer')}}" method="POST">
							{{csrf_field()}}
							<input type="email" name="email_account" placeholder="Nhập email" />
							<button type="submit" class="btn btn-default">Gửi</button>
						</form>
					</div><!--/login form-->
				</div>
		</div>
	</section><!--/form-->	
@endsection