@extends('admin_layout')
@section('admin_content')
<div class="table-agile-info">
  <div class="panel panel-default">
    <div class="panel-heading">
      Danh sách mã giảm giá
    </div>
    <li style="list-style: none;margin: 10px 10px;font-size: 20px;font-weight: bold;"><a href="{{URL::to('/insert_coupon')}}">Thêm mã giảm giá</a></li>
    <div class="table-responsive">
      <table class="table table-striped b-t b-light">
        <?php
        $message=Session::get('message');
        if($message){
          echo '<span style="color:red">'.$message.'</span>';
          Session::put('message',null);
        }
        ?>
        <thead>
          <tr>
            <th>Tên mã giảm giá</th>
            <th>Mã giảm giá</th>
            <th>Số lượng giảm giá</th>
            <th>Điều kiện giảm giá</th>
            <th>Số giảm</th>
          </tr>
        </thead>
        <tbody> 
          @foreach($coupon as $key =>$val_coupon)     
          <tr>
            <td>{{($val_coupon->coupon_name)}}</td>
            <td>{{($val_coupon->coupon_code)}}</td>
            <td>{{($val_coupon->coupon_time)}}</td>
            <td><span class="text-ellipsis">
              <?php
                 if($val_coupon->coupon_condition==1){
              ?>
                 Giảm theo %
              <?php
            }elseif($val_coupon->coupon_condition==2){
              ?>
                Giảm theo tiền mặt
               <?php
             }
               ?>  
            </span></td>
              <td><span class="text-ellipsis">
              <?php
                 if($val_coupon->coupon_condition==1){
              ?>
                 Giảm: {{$val_coupon->coupon_number}} %
              <?php
            }elseif($val_coupon->coupon_condition==2){
              ?>
                 Giảm tiền: {{number_format($val_coupon->coupon_number,0,',','.').'đ'}}
               <?php
             }
               ?>  
            </span></td>
            <td>
              <a onclick="return confirm('Bạn có chắc muốn xóa mã này không?')" href="{{URL::to('/delete_coupon/'.$val_coupon->coupon_id)}}" class="active" ui-toggle-class=""><i class="fa fa-times text-danger text"></i></a>
            </td>
          </tr>
         @endforeach
        
        </tbody>
      </table>
    </div>
    <footer class="panel-footer">
      <div class="row">
        
        <div class="col-sm-5 text-center">
          <small class="text-muted inline m-t-sm m-b-sm">showing 20-30 of 50 items</small>
        </div>
        <div class="col-sm-7 text-right text-center-xs">                
          <ul class="pagination pagination-sm m-t-none m-b-none">
            <li><a href=""><i class="fa fa-chevron-left"></i></a></li>
            <li><a href="">1</a></li>
            <li><a href="">2</a></li>
            <li><a href="">3</a></li>
            <li><a href="">4</a></li>
            <li><a href=""><i class="fa fa-chevron-right"></i></a></li>
          </ul>
        </div>
      </div>
    </footer>
  </div>
</div>
@endsection