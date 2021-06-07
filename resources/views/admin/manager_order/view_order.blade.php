@extends('admin_layout')
@section('admin_content')
<div class="table-agile-info">
  <div class="panel panel-default">
    <div class="panel-heading">
      Thông tin đăng nhập
    </div>
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
            <th>Tên học viên</th>
            <th>Số điện thoại</th>
            <th>Địa chỉ</th>
            <th>Email</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>{{$customer->customer_name}}</td>
            <td>{{$customer->customer_phone}}</td>
             <td>{{$customer->customer_address}}</td>
            <td>{{$customer->customer_email}}</td>
          </tr>
        
        </tbody>
      </table>
    </div>
  </div>
</div>
<br>
<div class="table-agile-info">
  <div class="panel panel-default">
    <div class="panel-heading">
      Chi tiết khóa học 
    </div>
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
          <th>STT</th>
            <th>Tên lớp học</th>
            <th>Slot còn lại</th>
            <th>Mã giảm giá</th>
            <th>Số lượng</th>
            <th>Học phí</th>
            <th>Tổng tiền</th>
          </tr>
        </thead>
        <tbody>
          <?php
          $i=1;
          $total=0;
          ?>
          @foreach($order_details as $key=>$val)
          <?php
          $i++;
          $subtotal= $val->student_number * $val->tuition;
          $total+=$subtotal; 
          ?>
          <tr class="color_qty_{{$val->class_id}}">
            <td>{{$i}}</td>
            <td>{{$val->class_name}}</td>
            <td>{{$val->class->student_number}}</td>
            <td>
              @if($val->coupon != 'no')
              {{$val->coupon}}
              @else
              Không có mã giảm giá
              @endif
            </td><td><input type="number" {{$order_status ==2 ? 'disabled' : '' }} min="1" name="student_number_limit" class="student_number_limit_{{$val->class_id}}" value="{{$val->student_number}}">

                <input type="hidden" name="order_student_qty_storage" class="order_student_qty_storage_{{$val->class_id}}" value="{{$val->class->student_number}}">

                <input type="hidden" name="order_code" class="order_code" value="{{$val->order_code}}">

                <input type="hidden" name="order_class_id" class="order_class_id" value="{{$val->class_id}}">
                @if($order_status !=2)
                <button class="btn btn-default update_student_numberss" data-class_id="{{$val->class_id}}"  name="update_student_numberss">Cập nhật</button>
                @endif
            </td>
            <td>{{number_format($val->tuition,0,',','.')}}đ</td>
            <td>{{number_format($subtotal,0,',','.')}}đ</td>
          </tr>
          @endforeach
          <tr>
           <td colspan="5">
            <?php
            $total_coupon=0; 
            ?>
             @if($coupon_condition==1)
             <?php

             $total_after_coupon=($total * $coupon_number)/100;
             echo 'Tiền được giảm giá: '.number_format($total_after_coupon,0,',','.').'đ';
             $total_coupon=$total - $total_after_coupon;
             ?>
             @elseif($coupon_condition==2)
              <?php
             echo 'Tiền được giảm giá: '.number_format($coupon_number,0,',','.').'đ';
             $total_coupon=$total-$coupon_number;
             ?>

             @endif
             ------Tổng tiền thanh toán: {{number_format($total_coupon,0,',','.')}}đ 
           </td>
         </tr>
         <tr>
          @foreach($order as $key=>$ord)
          @if($ord->order_status==1)
          <form>
            @csrf()
           <td colspan="6">
             <select class="form-control order_detail">
              <option  value="">---Chọn hình thức xử lý---</option>
               <option id="{{$ord->order_id}}" value="1" selected>Chưa xử lý</option>
               <option id="{{$ord->order_id}}" value="2">Đã xử lý</option>
               <option id="{{$ord->order_id}}" value="3">Tạm giữ</option>
             </select>
           </td>
         </form>
         @elseif($ord->order_status==2)
         <form>
          @csrf()
           <td colspan="6">
             <select class="form-control order_detail">
              <option id="{{$ord->order_id}}" value="1">Chưa xử lý</option>
               <option id="{{$ord->order_id}}" value="2" selected>Đã xử lý </option>
               <option id="{{$ord->order_id}}" value="3">Tam giữ</option>
             </select>
           </td>
         </form>
         @else
         <form>
          @csrf()
           <td colspan="6">
             <select class="form-control order_detail">
              <option id="{{$ord->order_id}}" value="1">Chưa xử lý</option>
               <option id="{{$ord->order_id}}" value="2">Đã xử lý </option>
               <option id="{{$ord->order_id}}" value="3" selected>Tam giữ</option>
             </select>
           </td>
         </form>
         @endif
         @endforeach
         </tr>
        </tbody>
      </table>
      <a href="{{URL::to('/print_order/'.$val->order_code)}}">In Hóa Đơn</a>
    </div>
  </div>
</div>

@endsection