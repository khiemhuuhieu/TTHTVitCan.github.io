@extends('admin_layout')
@section('admin_content')
  <div class="table-agile-info">
  <div class="panel panel-default">
    <div class="panel-heading">
    Điểm danh
    </div>
    <div class="row w3-res-tb">
      <div class="col-sm-12 text-left">
      <!--   <button class="btn btn-primary">
        <a href="{{URL::to('/them-lop-hoc')}}" style="font-size: 18px;font-weight: bold;color: white">Thêm lớp học</a>
      </button> -->
      </div>
    </div>
    <div class="table-responsive">
      <table class="table table-striped b-t b-light">
        <thead>
          <tr>
            <th>STT</th>
            <th>Mã học sinh</th>
            <th>Tên học sinh</th>
            <th>Điểm danh</th>
            <th>Số buổi vắng</th>
            <th>Số buổi đi học</th>
            <th style="width:30px;">Xóa sửa</th>
          </tr>
        </thead>
        <tbody>
          <?php
          $i=0;
          ?>
       @foreach($diem_danh as $key=>$val)
       @php $i++;
       @endphp
          <tr>
            <td>{{$i}}</td>
            <td>{{$val->MaHocVien}}</td>
            <td>{{$val->TenHocVien}}</td>
            <td>
              
            </td>
            <td></td>
            <td></td>
  
           <td>
              <a href="" class="active" ui-toggle-class=""><i class="fa fa-pencil-square-o text-success text-active"></i></a>
               <a onclick="return confirm('Bạn có chắc muốn xóa hay không?')" href="" class="active" ui-toggle-class=""><i class="fa fa-times text-danger text"></i></a>
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