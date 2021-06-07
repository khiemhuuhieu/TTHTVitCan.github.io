@extends('admin_layout')
@section('admin_content')
    <div class="table-agile-info">
  <div class="panel panel-default">
    <div class="panel-heading">
     Lương nhân viên
    </div>
    <div class="table-responsive">
      <table class="table table-striped b-t b-light">
        <thead>
          <tr>
            <th>Tên nhân viên</th>
            <th>Mã nhân viên</th>
            <th>Chúc vụ</th>
            <th>Lương cứng</th>
            <th>Cộng</th>
            <th>Trừ</th>
            <th>Ghi chú</th>
            <th>Tổng cộng</th>
            <th style="width:30px;"></th>
          </tr>
        </thead>
        <tbody>
           <?php
              $nam_auth =Auth::user()->admin_name;
              $email_auth =Auth::user()->admin_email;
              foreach($all_money as $key=>$val){
                if($email_auth == $val->Email){
           ?>
          <tr>
          <td>{{$val->TenNhanVien}}</td>
          <td>{{$val->MaNhanVien}}</td>
          <td>{{$val->ChucVu}}</td>
          <td>{{number_format($val->LuongCung,0,',','.')}}.đ</td>
          <td>{{number_format($val->Cong,0,',','.')}}.đ</td>
          <td>{{number_format($val->Tru,0,',','.')}}.đ</td>
          <td>{{$val->GhiChu}}</td>
          <td>{{number_format($val->TongTien,0,',','.')}}.đ</td>
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