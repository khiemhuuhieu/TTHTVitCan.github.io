@extends('admin_layout')
@section('admin_content')
<div class="table-agile-info">
  <div class="panel panel-default">
    <div class="panel-heading">
      Thông tin cá nhân
    </div>
    <style type="text/css">
      .img{
        margin-top: 10px;
        margin-left: 5px;
        width: 300px;
        height: 300px;
        border: 1px solid red;
        border-radius: 4px 5px;

      }
      .styling{
        margin-top: 10px;
      }
      .styling p{
        padding-bottom: 10px;
      }
    </style>
    <div class="row">
       <?php
        $nam_auth =Auth::user()->admin_name;
        $nv_auth =Auth::user()->MaNhanVien;
        foreach($rele_employee as $key=>$val){
          if($nv_auth == $val->MaNhanVien){
        ?>
      <div class="col-md-4">
        <div class="img">
          <img src="{{URL::to('public/uploads/product/'.$val->HinhAnh)}}" width="100%" height="300px">
        </div>
      </div>
      <div class="col-md-8">
        <div class="styling">
          <p>Họ và tên: {{$val->TenNhanVien}}</p>
          <p>Mã nhân viên: {{$val->MaNhanVien}}</p>
          <p>Email: {{$val->Email}}</p>
          <p>Số điện thoại: {{$val->SDT}}</p>
          <p>Trình độ chuyên môn: {{$val->TrinhDo}}</p>
          <p>Chức vụ: 
            @if($val->ChucVu ==1)
            Nhân viên
            @elseif($val->ChucVu ==2)
            Giáo Viên
             @elseif($val->ChucVu ==3)
             Giám đốc
              @elseif($val->ChucVu ==4)
              Kế toán
               @else
               Chưa cấp
            @endif
          </p>
          <p>Địa chỉ:  {{$val->DiaChi}}</p>
          <p>Năm sinh: {{$val->NgaySinh}}</p>
         
        </div>
      </div>
       <?php     
          }
        }
          ?>
    </div>
  </div>
</div>
@endsection