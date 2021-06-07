@extends('admin_layout')
@section('admin_content')
  <div class="table-agile-info">
  <div class="panel panel-default">
    <div class="panel-heading">
     Danh sách học viên
    </div>
    <div class="row w3-res-tb">
    <div class="search_box pull-left">
        <form action="{{URL::to('tim-kiem-hoc-vien')}}" method="POST">
            {{csrf_field()}}
        <input type="text" name="keyword_submit" placeholder="Search"/>
        <input type="submit" class="btn btn-primary" style="margin-top: 0; color: #333" value="Tìm kiếm">
    </form>
    </div>              

      <div class="col-sm-4">
      </div>
      <div class="col-sm-3">
        <button class="btn btn-primary">
        <a href="{{URL::to('/add_student')}}" style="font-size: 18px;color: white">Thêm học viên</a>
      </button>
      </div>
    </div>
    <div class="table-responsive">
          <?php
        $message=Session::get('message');
        if($message){
          echo '<span style="color:red">'.$message.'</span>';
          Session::put('message',null);
        }
        ?>
      <table class="table table-striped b-t b-light">
        <thead>
          <tr>
            <th>Mã học viên</th>
            <th>Tên học viên</th>
            <th>Ngày sinh</th>
            <th>Mã Lớp</th>
            <th>Phụ huynh</th>
            <th>SDT</th>
            <th>Địa chỉ</th>
            <th>Ghi chú</th>
            <th>Tình trạng</th>
            <th style="width:30px;"></th>
          </tr>
        </thead>
        <tbody>  
        @foreach($all_student as $key=>$st)  
          <tr>
            <td>{{$st->MaHocVien}}</td>
            <td>{{$st->TenHocVien}}</td>
            <td>{{$st->NgaySinh}}</td>
            <td>{{$st->Lop}}</td>
            <td>{{$st->MaPH}}</td>
            <td>{{$st->SDT}}</td>
            <td>{{$st->Diachi}}</td>
            <td>{{$st->GhiChu}}</td>
            <td>
             <?php
                 if($st->TinhTrang==0){
              ?>
               Nghỉ học
              <?php
            }elseif($st->TinhTrang==1){
              ?>
                 Đang học
               <?php
             }
               ?>  
            </td>
           <td>
              <a href="{{URL::to('/edit_student/'.$st->id)}}" class="active" ui-toggle-class=""><i class="fa fa-pencil-square-o text-success text-active"></i></a>
               <a onclick="return confirm('Bạn có chắc muốn xóa hay không?')" href="{{URL::to('/delete_students/'.$st->id)}}" class="active" ui-toggle-class=""><i class="fa fa-times text-danger text"></i></a>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  <form action="{{url('import-csv')}}" method="POST" enctype="multipart/form-data">
          @csrf
        <input type="file" name="file" accept=".xlsx"><br>
       <input type="submit" value="Import CSV" name="import_csv" class="btn btn-warning">
        </form><br>
       <form action="{{url('export-csv')}}" method="POST">
          @csrf
       <input type="submit" value="Export CSV" name="export_csv" class="btn btn-success">
      </form>

    <footer class="panel-footer">
      <div class="row">
        
        <div class="col-sm-5 text-center">
          <small class="text-muted inline m-t-sm m-b-sm">showing 10 of 1 items</small>
        </div>
        <div class="col-sm-7 text-right text-center-xs">                
          <ul class="pagination pagination-sm m-t-none m-b-none">
           {!!$all_student->render()!!}
          </ul>
        </div>
      </div>
    </footer>
  </div>
</div>
@endsection