@extends('admin_layout')
@section('admin_content')
  <div class="table-agile-info">
  <div class="panel panel-default">
    <div class="panel-heading">
    Nhập điểm
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
            <th>Mã học viên</th>
            <th>Tên học viên</th>
            <th>Mã lớp</th>
            <th style="width:30px;">Nhập điểm</th>
          </tr>
        </thead>
        <tbody>
          <?php
          $i=0;
          ?>
          @foreach($student as $key=>$val)
          @php
          $i++;
          @endphp
          <tr>
            <td>{{$i}}</td>
            <td>{{$val->MaHocVien}}</td>
            <td>{{$val->TenHocVien}}</td>
            <td>{{$val->Lop}}</td>                      
            <td>
              <button class="btn btn-primary">
                <a style="color: white" href="{{URL::to('nhap-diem/'.$val->MaHocVien)}}">Nhập điểm</a>
              </button>
            </td>
          </tr>
       @endforeach
      </tbody>
      </table>
    </div>
    <div class="table-agile-info">
  <div class="panel panel-default">
    <div class="panel-heading">
   Danh sách điểm
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
            <th>Tên học viên</th>
            <th>Mã lớp</th>
            <th>GK</th>
            <th>TH</th>
            <th>CK</th>
            <th>TB</th>
            <th>Xếp loại</th>
            <th style="width:30px;">Sửa</th>
          </tr>
        </thead>
        <tbody>
          <?php
          $i=0;
          ?>
        @foreach($diem as $key=>$vl)
          @php
          $i++;
          @endphp
          <tr>
            <td>{{$i}}</td>
            <td>{{$vl->TenHocVien}}</td>
            <td>{{$vl->MaLop}}</td>
            <td>{{$vl->GK}}</td>
            <td>{{$vl->TH}}</td>
            <td>{{$vl->CK}}</td>
            <td>{{$vl->TB}}</td>
            <td>{{$vl->XepLoai}}</td>                      
            <td>
               <a href="{{URL::to('sua-diem/'.$vl->id)}}" class="active" ui-toggle-class=""><i class="fa fa-pencil-square-o text-success text-active"></i></a>
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
          
          </ul>
        </div>
      </div>
    </footer>
  </div>
</div>
@endsection