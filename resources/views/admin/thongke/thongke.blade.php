@extends('admin_layout')
@section('admin_content')
<div class="container-fluid">
<style type="text/css">
	p.title_thongKe{
		text-align: center;
		font-size: 20px;
		font-weight: bold;
	}
</style>
<div class="row">
	<p class="title_thongKe">Thống kê số học viên đăng kí khóa học và doanh thu</p>
	<form autocomplete="off">
		@csrf()
		<div class="col-md-2">
			<p>Từ ngày: <input type="text"  id="datepicker" name="" class="form-control">
			<input type="button" id="btn-dashboard-filter" class="btn btn-primary btn-sm" value="Lọc kết quả"></p>
		</div>
		<div class="col-md-2">
			<p>Đến ngày: <input type="text"  id="datepicker2"  class="form-control"></p>
		</div>
		<div class="col-md-2">
			<p>
				Lọc theo:
				<select class="dashboard-filter form-control">
					<option>-----Chọn-----</option>
					<option value="7ngay">7 ngày</option>
					<option value="thangtruoc">Tháng trước</option>
					<option class="thangnay">Tháng này</option>
					<option value="365ngay">365 ngày qua</option>
				</select>
			</p>
		</div>
	</form>
	<div class="col-md-12">
		<div id="myfirstchart" style="height:300px; background: #e6e8e6"></div>
	</div>
</div>
 <div class="row">
<style type="text/css">
	table.table.table-bordered.table-dark{
		background: #32383e;
	}
	table.table.table-bordered.table-dark tr th{
		color: #fff;
	}
</style>
<p class="title_thongKe">Thống kê truy cập</p>
<table class="table table-bordered table-dark">
	<thead>
		<tr>
			<th scope="col">Đang online</th>
			<th scope="col">Tổng tháng trước</th>
			<th scope="col">Tổng tháng này</th>
			<th scope="col">Tổng môt năm</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td>1</td>
			<td>2</td>
			<td>3</td>
			<td>4</td>
		</tr>
	</tbody>
</table>	
</div>
</div>
@endsection