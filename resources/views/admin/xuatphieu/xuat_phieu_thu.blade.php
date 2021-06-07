@extends('admin_layout')
@section('admin_content')
  <div class="table-agile-info">
  <div class="panel panel-default">
    <div class="panel-heading">
    Xuất phiếu thu
    </div>
    <div class="row w3-res-tb">
      <div class="col-sm-12 text-left">
          
      </div>
    </div>
    <div class="table-responsive">
      <table class="table table-striped b-t b-light" id="xuat_phieu_thu">
        <thead>
          <tr>
            <th>STT</th>
            <th>Ngày tháng</th>
            <th>Thu/Chi</th>
            <th>Loại</th>
            <th>Người thu/chi</th>
            <th>Nội dung</th>
            <th>Thu</th>
            <th>Ghi chú</th>
            <th style="width:30px;"></th>
          </tr>
        </thead>
        <tbody>
          <?php
          $i=0;
          ?>
          @foreach($thu as $key =>$val)
          @php
          $i++;
          @endphp
          <tr>
            <td>{{$i}}</td>
            <td>{{$val->NgayThang}}</td>
            <td>{{$val->ThuChi}}</td>
            <td>{{$val->Loai}}</td>
            <td>{{$val->NguoiThu}}</td>
            <td>{{$val->NoiDung}}</td>
            <td>{{number_format($val->SoTienThu,0,',','.')}}.đ</td>
            <td>{{$val->GhiChu}}</td>
           
          </tr>
          @endforeach
      </tbody>
      </table>
      <button class="btn btn-success xuat_thu">Xuất File Excel<button>
    </div>
    <footer class="panel-footer">
      <div class="row">
        
        <div class="col-sm-5 text-center">
         <!--  <small class="text-muted inline m-t-sm m-b-sm">showing 20-30 of 50 items</small> -->
        </div>
        <div class="col-sm-7 text-right text-center-xs">                
        
        </div>
      </div>
    </footer>
  </div>
</div>
@endsection