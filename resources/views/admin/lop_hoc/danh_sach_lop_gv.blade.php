@extends('admin_layout')
@section('admin_content')
  <div class="table-agile-info">
  <div class="panel panel-default">
    <div class="panel-heading">
    Quản lý lớp học
    </div>
    <div class="row w3-res-tb">
      <div class="col-sm-12 text-left">
      </div>
    </div>
    <div class="table-responsive">
      <table class="table table-striped b-t b-light">
        <thead>
          <tr>
            <th>STT</th>
            <th>Mã lớp</th>
            <th>Tên lớp</th>
            <th>Mã Giáo viên</th>
            <th>Tình trạng</th>
            <th style="width:30px;">Danh sách học viên</th>
          </tr>
        </thead>
        <tbody>
          <?php
          $i=0;
          ?>
          <?php
          $manv = Auth::user()->MaNhanVien;
          foreach ($lop_hoc as $key => $value) {
            $i++;
          if($manv == $value->MaGV){
          ?>
          <tr>
            <td>{{$i}}</td>
            <td>{{$value->MaLop}}</td>
            <td>{{$value->TenLop}}</td>
            <td>{{$value->MaGV}}</td>
            <td>
              @if($value->TinhTrang ==1)
              Dự kiến
              @else
              Đang học
              @endif
            </td>
           <td>
            <button class="btn btn-primary">
              <a style="color: white" href="{{URL::to('danh-sach-hoc-vien/'.$value->MaLop)}}">Danh sách học viên</a>
            </button>
            </td>
          </tr>
          <?php
            }
          }
          ?>
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