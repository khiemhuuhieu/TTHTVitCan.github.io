@extends('admin_layout')
@section('admin_content')
<div class="table-agile-info">
  <div class="panel panel-default">
    <div class="panel-heading">
      Danh sách học viên đăng kí khóa học
    </div>
    <div class="row w3-res-tb">
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
            <th>STT</th>
            <th>Mã đăng kí học viên</th>
            <th>Thời gian đăng kí</th>
            <th>Tình trạng đăng kí</th>
            <th style="width:30px;"></th>
          </tr>
        </thead>
        <tbody>
          <?php
          $i=1;
          ?>
          @foreach($order as $key=>$val)
          <tr>
            <td><i>{{$i++}}</i></td>
            <td>{{$val->order_code}}</td>
            <td>{{$val->created_at}}</td>
            <td>
              @if($val['order_status']==1)
              Chờ xử lý
              @else
              Đã xử lý
              @endif
            </td>
            <td>
              <a href="{{URL::to('/view_order/'.$val->order_code)}}" class="active" ui-toggle-class=""><i class="fa fa-eye text-success text-active"></i></a>
              <a onclick="return confirm('Bạn có chắc muốn xóa không?')" href="{{URL::to('/view_order/'.$val->order_code)}}" class="active" ui-toggle-class=""><i class="fa fa-times text-danger text"></i></a>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>
</div>
@endsection