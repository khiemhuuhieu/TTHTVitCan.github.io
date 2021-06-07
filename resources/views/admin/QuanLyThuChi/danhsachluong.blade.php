@extends('admin_layout')
@section('admin_content')
  <div class="table-agile-info">
  <div class="panel panel-default">
    <div class="panel-heading">
    Danh sách lương nhân viên
    </div>
    <div class="row w3-res-tb">
      <button class="btn btn-primary">
        <a style="color: white" href="{{URL::to('tinh-luong')}}">Tính lương</a>
      </button>
    </div>
    <div class="table-responsive">
      <table class="table table-striped b-t b-light">
        <thead>
          <tr>
            <th>STT</th>
            <th>Mã nhân viên</th>
            <th>Tên nhân viên</th>
            <th>Chức Vụ</th>
            <th>Lương cứng</th>
            <th>Trừ</th>
            <th>Cộng thêm</th>
            <th>Chi chú</th>
            <th>Tổng tiền</th>
            <th style="width:30px;"></th>
          </tr>
        </thead>
        <tbody>
          @php
          $i=0;
          $tongtiennv=0;
          $tongthanhtoan = 0;
          @endphp
          @foreach($all_luong as $key=>$val)
          @php
          $i++;
          $tongtiennv = $val->LuongCung - $val->Tru + $val->Cong;
          $tongthanhtoan+=$tongtiennv;
          @endphp
          <tr>
            <td>{{$i}}</td>
            <td>{{$val->MaNhanVien}}</td>
            <td>{{$val->TenNhanVien}}</td>
            <td>{{$val->ChucVu}}</td>
            <td>{{number_format($val->LuongCung,0,',','.')}}.đ</td>
            <td>{{number_format($val->Tru,0,',','.')}}.đ</td>
            <td>{{number_format($val->Cong,0,',','.')}}.đ</td>
            <td>{{$val->GhiChu}}</td>
            <td>{{number_format($tongtiennv,0,',','.')}}.đ</td>
            </td>
            <td>
              <a href="" class="active" ui-toggle-class=""><i class="fa fa-pencil-square-o text-success text-active"></i></a>
               <a onclick="return confirm('Bạn có chắc muốn xóa hay không?')" href="" class="active" ui-toggle-class=""><i class="fa fa-times text-danger text"></i></a>
            </td>
          </tr>
          @endforeach
      </tbody>
      <tr>
        <td colspan="5">Tổng cộng: {{number_format($tongthanhtoan,0,',','.')}}.đ</td>
      </tr>
      </table>
    </div>
        <form action="{{url('in-tien-luong')}}" method="POST">
          @csrf
       <input type="submit" value="In tiền lương nhân viên" name="export_csv" class="btn btn-success">
      </form>
    <footer class="panel-footer">
      <div class="row">
        
        <div class="col-sm-5 text-center">
         <!--  <small class="text-muted inline m-t-sm m-b-sm">showing 20-30 of 50 items</small> -->
        </div>
        <div class="col-sm-7 text-right text-center-xs">                
          <ul class="pagination pagination-sm m-t-none m-b-none">
            
          </ul>
        </div>
      </div>
    </footer>
  </div>
</div>
@endsection