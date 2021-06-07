@extends('admin_layout')
@section('admin_content')
  <div class="table-agile-info">
  <div class="panel panel-default">
    <div class="panel-heading">
    Quản lý lớp học
    </div>
    <div class="row w3-res-tb">
      <div class="col-sm-12 text-left">
        <button type="submit" class="btn btn-primary">
        <a href="{{URL::to('/them-lop-hoc')}}" style="font-size: 18px;font-weight: bold;color: white">Thêm lớp học</a>
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
            <th>Mã lớp</th>
            <th>Tên lớp</th>
            <th>Giáo viên</th>
            <th>Tình trạng</th>
            <th style="width:30px;"></th>
          </tr>
        </thead>
        <tbody>
       @foreach($lop_hoc as $key=>$val)
          <tr>
            <td>{{$val->MaLop}}</td>
            <td>{{$val->TenLop}}</td>
            <td>{{$val->MaGV}}</td>
            <td>
              @if($val->TinhTrang ==1)
              Dự kiến
              @else
              Đang học
              @endif
            </td>
           <td>
              <a href="{{URL::to('sua-lop/'.$val->id)}}" class="active" ui-toggle-class=""><i class="fa fa-pencil-square-o text-success text-active"></i></a>
               <a onclick="return confirm('Bạn có chắc muốn xóa hay không?')" href="{{URL::to('xoa-lop/'.$val->id)}}" class="active" ui-toggle-class=""><i class="fa fa-times text-danger text"></i></a>
            </td>
          </tr>
          @endforeach
      </tbody>
      </table>
    </div>
    <footer class="panel-footer">
      <div class="row">
        
        <div class="col-sm-5 text-center">
         <!--  <small class="text-muted inline m-t-sm m-b-sm">showing 20-30 of 50 items</small> -->
        </div>
        <div class="col-sm-7 text-right text-center-xs">                
          <ul class="pagination pagination-sm m-t-none m-b-none">
           {!!$lop_hoc->render()!!}
          </ul>
        </div>
      </div>
    </footer>
  </div>
</div>
@endsection