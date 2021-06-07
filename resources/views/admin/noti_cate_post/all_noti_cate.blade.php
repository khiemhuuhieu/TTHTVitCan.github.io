@extends('admin_layout')
@section('admin_content')
    <div class="table-agile-info">
  <div class="panel panel-default">
    <div class="panel-heading">
      Danh sách danh mục phần thông báo
    </div>
    <div class="row w3-res-tb ">
     <button type="submit" class="btn btn-primary"><a style="color: white" href="{{URL::to('/add-noti-cate')}}">Thêm danh mục thông báo</a></button>
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
            <th>Tên danh mục</th>
            <th>Slug</th>
            <th>Mô tả</th>
            <th>Trạng thái</th>
            <th style="width:30px;"></th>
          </tr>
        </thead>
        <tbody>
          @foreach ($noti_cate as $key => $noti_c)
          <tr>
            <td>{{$noti_c->noti_cate_name}}</td>
            <td>{{$noti_c->noti_cate_slug}}</td>
            <td>{{$noti_c->noti_cate_desc}}</td>
            <td>
               <?php
                 if($noti_c->noti_cate_status == 0){
              ?>
                 Ẩn
              <?php

              }elseif($noti_c->noti_cate_status == 1){

              ?>
                 Hiển thị
               <?php  
               }
              ?>  
            </td>
            <td>
              <a href="{{URL::to('/edit-noti-cate/'.$noti_c->noti_cate_id)}}" class="active" ui-toggle-class=""><i class="fa fa-pencil-square-o text-success text-active"></i></a>
               <a onclick="return confirm('Bạn có chắc muốn xóa hay không?')" href="{{URL::to('/delete-noti-cate/'.$noti_c->noti_cate_id)}}" class="active" ui-toggle-class=""><i class="fa fa-times text-danger text"></i></a>
            </td>
          </tr>
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