@extends('admin_layout')
@section('admin_content')
  <div class="table-agile-info">
  <div class="panel panel-default">
    <div class="panel-heading">
    Quản lý chứng chỉ
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
            <th style="width:30px;">Danh sách học viên</th>
          </tr>
        </thead>
        <tbody>
          <?php
          $i=0;
          ?>
          @foreach($ds_lop_cc as $key=>$val)
          @php
          $i++;
          @endphp
          <tr>
            <td>{{$i}}</td>
            <td>{{$val->MaLop}}</td>
            <td>{{$val->TenLop}}</td>
            <td>{{$val->MaGV}}</td>
            <td>
            <button class="btn btn-primary">
              <a style="color: white" href="{{URL::to('danh-sach-hoc-vien-cap-chung-chi/'.$val->MaLop)}}">Danh sách học viên</a>
            </button>
            </td>
          </tr>
          @endforeach
      </tbody>
      </table>
    </div>
    <footer class="panel-footer">
      <div class="row">
        
        <div class="col-sm-5 text-center">

        </div>
        <div class="col-sm-7 text-right text-center-xs">                
          <ul class="pagination pagination-sm m-t-none m-b-none">
          {!!$ds_lop_cc->render()!!}
          </ul>
        </div>
      </div>
    </footer>
  </div>
</div>
@endsection