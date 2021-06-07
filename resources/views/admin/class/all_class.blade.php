@extends('admin_layout')
@section('admin_content')
    <div class="table-agile-info">
  <div class="panel panel-default">
    <div class="panel-heading">
      Danh sách mở lớp
    </div>
    <div class="row w3-res-tb">
     
      <div class="col-sm-4">
      </div>
   
    </div>
    <div class="table-responsive">
      <table class="table table-striped b-t b-light">
         <?php
        $message=Session::get('message');
        if($message){
          echo '<span style="color:red">'.$message.'</span>';
          Session::put('message',null);
        }
        ?>
        <thead>
          <tr>
            <th>Tên lớp</th>
            <th>Mã lớp</th>
            <th>Chuyên đề</th>
            <th>Học phí</th>
            <th>Trạng thái</th>
            <th>Duyệt</th>
            <th>Chi tiết</th>
            <th style="width:30px;"></th>
          </tr>
        </thead>
        <tbody>
          @foreach ($all_class as $key => $class)
          <tr>
            <td>{{$class->class_name}}</td>
            <td>{{$class->class_code}}</td>
            <td>{{$class->thematic_name}}</td>
            <td>{{number_format($class->tuition,0,',','.')}}.đ</td>
             <td><span class="text-ellipsis">
               <?php
                 if($class->TinhTrang==0){
              ?>
                 Dự kiến
              <?php
            }elseif($class->TinhTrang==1){
              ?>
                Đang học
               <?php
             }
               ?>  
            </span></td>
            <td><span class="text-ellipsis">
               <?php
                 if($class->class_status==0){
              ?>
                 <a href="{{URL::to('/unactive_class/'.$class->class_id)}}"><span class="fa-thumb-styling  fa fa-thumbs-up"></span></a>
              <?php
            }elseif($class->class_status==1){
              ?>
                 <a href="{{URL::to('/active_class/'.$class->class_id)}}"><span class="fa-thumb-styling fa fa-thumbs-down"></span></a>
               <?php
             }
               ?>  
            </span></td>
            <td> <a href="{{URL::to('/view_class/'.$class->class_id)}}" class="active" ui-toggle-class=""><i class="fa fa-eye text-success text-active"></i></a></td>
            <td>
              <a href="{{URL::to('/edit_class/'.$class->class_id)}}" class="active" ui-toggle-class=""><i class="fa fa-pencil-square-o text-success text-active"></i></a>
               <a onclick="return confirm('Bạn có chắc muốn xóa hay không?')" href="{{URL::to('/delete_class/'.$class->class_id)}}" class="active" ui-toggle-class=""><i class="fa fa-times text-danger text"></i></a>
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
            {!!$all_class->render()!!}
          </ul>
        </div>
      </div>
    </footer>
  </div>
</div>
@endsection