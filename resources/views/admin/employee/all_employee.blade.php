@extends('admin_layout')
@section('admin_content')
	<div class="table-agile-info">
	<div class="panel panel-default">
		<div class="panel-heading">
		 Danh sách nhân viên
		</div>
		<div class="row w3-res-tb">
		<div class="search_box pull-left">
				<form action="{{URL::to('tim-kiem-nhan-vien')}}" method="POST">
						{{csrf_field()}}
				<input type="text" name="keyword_submit" placeholder="Search"/>
				<input type="submit" class="btn btn-primary" style="margin-top: 0; color: #333" value="Tìm kiếm">
		</form>
		</div>              

			<div class="col-sm-4">
			</div>
			<div class="col-sm-3">
				<button class="btn btn-primary">
				<a href="{{URL::to('/add_employee')}}" style="font-size: 18px;color: white">Thêm nhân viên</a>
			</button>
			</div>
		</div>
		<div class="table-responsive">
					<?php
				$message=Session::get('message');
				if($message){
					echo '<span style="color:red">'.$message.'</span>';
					Session::put('message',null);
				}
				?>
			<table class="table table-striped b-t b-light">
				<thead>
					<tr>
						<th>Mã nhân viên</th>
						<th>Ảnh đại diện</th>
						<th>Tên nhân viên</th>
						<th>Email</th>
						<th>Chức vụ</th>
						<th>Địa chỉ</th>
						<th>Số điện thoại</th>
						<th>Trình độ chuyên môn</th>
						<th>Ngày sinh</th>
						<th style="width:30px;">Chỉnh sửa</th>
					</tr>
				</thead>
				<tbody> 
				@foreach($all_employee as $key=>$all_empl) 
					<tr>
						<td>{{$all_empl->MaNhanVien}}</td>
						<td><img src="{{URL::to('public/uploads/product/'.$all_empl->HinhAnh)}}" width="170" height="100"></td>
						<td>{{$all_empl->TenNhanVien}}</td>
						<td>{{$all_empl->Email}}</td>
						<td>{{$all_empl->position_name}}</td>
						<td>{{$all_empl->DiaChi}}</td>
						<td>{{$all_empl->SDT}}</td>
						<td>{{$all_empl->TrinhDo}}</td>
						<td>{{$all_empl->NgaySinh}}</td> 
					 <td>
							<a href="{{URL::to('sua-thong-tin-nhan-vien/'.$all_empl->id)}}" class="active" ui-toggle-class=""><i class="fa fa-pencil-square-o text-success text-active"></i></a>
							 <a onclick="return confirm('Bạn có chắc muốn xóa nhân viên hay không?')" href="{{URL::to('xoa-nhan-vien/'.$all_empl->id)}}" class="active" ui-toggle-class=""><i class="fa fa-times text-danger text"></i></a>
						</td>
					</tr>
					@endforeach
				</tbody>
			</table>
		</div>
		<footer class="panel-footer">
			<div class="row">
				
				<div class="col-sm-5 text-center">
					<!-- <small class="text-muted inline m-t-sm m-b-sm">showing 20-30 of 50 items</small> -->
				</div>
				<div class="col-sm-7 text-right text-center-xs">                
					<ul class="pagination pagination-sm m-t-none m-b-none">
						{!!$all_employee->render()!!}
					</ul>
				</div>
			</div>
		</footer>
	</div>
</div>
@endsection