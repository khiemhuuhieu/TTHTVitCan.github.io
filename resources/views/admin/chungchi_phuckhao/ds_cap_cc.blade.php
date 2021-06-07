@extends('admin_layout')
@section('admin_content')
  <div class="table-agile-info">
  <div class="panel panel-default">
    <div class="panel-heading">
    Danh sách học viên cấp chứng chỉ
    </div>
    <div class="row w3-res-tb">
      <div class="col-sm-12 text-left">
      </div>
    </div>
    <div class="table-responsive">
      <table class="table table-striped b-t b-light"  id="table2excel">
        <thead>
          <tr>
            <th>Mã học viên</th>
            <th>Tên học viên</th>
            <th>Mã lớp</th>
            <th>GK</th>
            <th>TH</th>
            <th>CK</th>
            <th>TB</th> 
            <th>Xếp loại</th>         
          </tr>
        </thead>
        <tbody>
      
          @foreach($ds_cap_cc as $key=>$val)
          <tr>
            <td>{{$val->MaHocVien}}</td>
            <td>{{$val->TenHocVien}}</td>
            <td>{{$val->MaLop}}</td>
            <td>{{$val->GK}}</td>
            <td>{{$val->TH}}</td>
            <td>{{$val->CK}}</td>
            <td>{{$val->TB}}</td>
            <td>{{$val->XepLoai}}</td>
          </tr>
          @endforeach
      </tbody>
      </table>
      <button class="btn btn-success xuat">Xuất File Excel<button>
    </div><br>
    
    <footer class="panel-footer">
      <div class="row">
        
        <div class="col-sm-5 text-center">

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