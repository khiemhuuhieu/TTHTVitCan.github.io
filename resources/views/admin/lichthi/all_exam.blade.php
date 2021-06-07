@extends('admin_layout')
@section('admin_content')
    <div class="table-agile-info">
  <div class="panel panel-default">
    <div class="panel-heading">
      Quản lý lịch thi
    </div>
    <div class="row w3-res-tb">
      <div class="col-sm-12">
        <button class="btn btn-primary text-left">
          <a href="{{URL::to('them-lich-thi')}}" style="color: white">Thêm lịch thi</a>
        </button>
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
            <th>Tên lớp</th>
            <th>Mã lớp</th>
            <th>Ngày thi</th>
            <th>Giờ thi</th>
            <th>Phòng thi</th>
            <th>Giám thị</th>
            <th style="width:30px;"></th>
          </tr>
        </thead>
        <tbody>
          @foreach($all_exam as $key=>$val)
          <tr>       
            <td>{{$val->TenLop}}</td>
            <td>{{$val->MaLop}}</td>
            <td>{{$val->NgayThi}}</td>
            <td>{{$val->GioThi}}</td>
            <td>{{$val->PhongThi}}</td>
            <td>{{$val->GiamThi}}</td>
      
            <td>
              <a href="{{URL::to('sua-lich-thi/'.$val->id)}}" class="active" ui-toggle-class=""><i class="fa fa-pencil-square-o text-success text-active"></i></a>
               <a onclick="return confirm('Bạn có chắc muốn xóa hay không?')" href="{{URL::to('xoa-lich-thi/'.$val->id)}}" class="active" ui-toggle-class=""><i class="fa fa-times text-danger text"></i></a>
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
            {!!$all_exam->render()!!}
          </ul>
        </div>
      </div>
    </footer>
  </div>
</div>
@endsection