@extends('admin_layout')
@section('admin_content')
  <div class="table-agile-info">
  <div class="panel panel-default">
    <div class="panel-heading">
    Quản lý thu chi
    </div>
    <div class="row w3-res-tb">
      <div class="col-sm-12 text-left">
           <button class="btn btn-primary"><a href="{{URL::to('/tao-khoan-thu')}}" style="font-size: 18px;font-weight: bold;color: #ffff">Tạo khoản thu</a></button>
           <button class="btn btn-primary"><a href="{{URL::to('/tao-khoan-chi')}}" style="font-size: 18px;font-weight: bold;color: #ffff">Tạo khoản chi</a></button>
           <button class="btn btn-primary"><a href="{{URL::to('/xuat-phieu-chi')}}" style="font-size: 18px;font-weight: bold;color: #ffff">Xuất phiếu chi</a></button>
           <button class="btn btn-primary"><a href="{{URL::to('/xuat-phieu-thu')}}" style="font-size: 18px;font-weight: bold;color: #ffff">Xuất phiếu thu</a></button>
      </div>
    </div>
    <div class="table-responsive">
       <?php
        $message=Session::get('message');
         if($message){
          echo '<span style="color:red;width:100%;text-align: center;font-size:16px">'.$message.'</span>';
          Session::get('message',null);
          }
      ?>
      <table class="table table-striped b-t b-light">
        <thead>
          <tr>
            <th>STT</th>
            <th>Ngày tháng</th>
            <th>Thu/Chi</th>
            <th>Loại</th>
            <th>Người thu</th>
            <th>Nội dung</th>
            <th>Thu</th>
            <th>Chi</th>
            <th>Ghi chú</th>
            <th style="width:30px;"></th>
          </tr>
        </thead>
        <tbody>
          <?php
          $i=0;
          ?>
          @foreach($thu_chi as $key =>$val)
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
            <td>{{number_format($val->SoTienChi,0,',','.')}}.đ</td>
            <td>{{$val->GhiChu}}</td>
           <td>
              <a href="{{URL::to('sua-thu-chi/'.$val->id)}}" class="active" ui-toggle-class=""><i class="fa fa-pencil-square-o text-success text-active"></i></a>
               <a onclick="return confirm('Bạn có chắc muốn xóa hay không?')" href="{{URL::to('xoa-thu-chi/'.$val->id)}}" class="active" ui-toggle-class=""><i class="fa fa-times text-danger text"></i></a>
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
              {!!$thu_chi->render()!!}
          </ul>
        </div>
      </div>
    </footer>
  </div>
</div>
@endsection