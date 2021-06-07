@extends('admin_layout')
@section('admin_content')
    <div class="table-agile-info">
  <div class="panel panel-default">
    <div class="panel-heading">
      Chi tiết lớp
    </div>
    <div class="row w3-res-tb">
     
      <div class="col-sm-4">
      </div>
   
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
            <th>Ngày khai giảng</th>
            <th>Lich học</th>
            <th>Thời lượng</th>
            <th>Địa điểm</th>
            <th>Số lượng học viên</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($order_detail as $key => $class)
          <tr>
            <td>{{$class->opending_day}}</td>
            <td>{{$class->schedule_day}}</td>
            <td>{{$class->study_time}}</td>
            <td>{{$class->address_class}}</td>
            <td>{{$class->student_number}}</td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>
</div>
@endsection