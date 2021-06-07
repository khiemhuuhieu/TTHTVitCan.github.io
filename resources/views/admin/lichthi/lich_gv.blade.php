@extends('admin_layout')
@section('admin_content')
    <div class="table-agile-info">
  <div class="panel panel-default">
    <div class="panel-heading">
      Quản lý lịch thi
    </div>
    <div class="row w3-res-tb">
      <div class="col-sm-12">
      </div>
    </div>
    <div class="table-responsive">
      <table class="table table-striped b-t b-light">
        <thead>
          <tr>
            <th>Tên lớp</th>
            <th>Mã lớp</th>
            <th>Ngày thi</th>
            <th>Giờ thi</th>
            <th>Phòng thi</th>
            <th>Giám thị</th>
          </tr>
        </thead>
        <tbody>
          <?php
          $nv_auth =Auth::user()->MaNhanVien;
          ?>
          @foreach($lichthi as $key=>$val)
          @if($nv_auth == $val->GiamThi)
          <tr>       
            <td>{{$val->TenLop}}</td>
            <td>{{$val->MaLop}}</td>
            <td>{{$val->NgayThi}}</td>
            <td>{{$val->GioThi}}</td>
            <td>{{$val->PhongThi}}</td>
            <td>{{$val->GiamThi}}</td>
          </tr>
          @endif
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
            {!!$lichthi->render()!!}
          </ul>
        </div>
      </div>
    </footer>
  </div>
</div>
@endsection