@extends('admin_layout')
@section('admin_content')
    <div class="table-agile-info">
  <div class="panel panel-default">
    <div class="panel-heading">
      Danh sách bài viết thông báo
    </div>
    <div class="row w3-res-tb">
    <button type="submit" class="btn btn-primary"><a style="color: white" href="{{URL::to('/viet-thong-bao')}}">Viết bài thông báo</a></button>
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
            <th>Tên thông báo</th>
            <th>File</th>
            <th>Danh mục thông báo</th>
            <th>Hiển thị</th>
            <th style="width:30px;">Lựa chọn</th>
          </tr>
        </thead>
        <tbody>
          @foreach($all_noti_post as $key => $val)
          <tr>
            <td>{{$val->noti_post_title}}</td>
              @if($val->noti_post_document)
              <td><a target="_blank" href="{{URL::to('public/uploads/document/'.$val->noti_post_document)}}">Xem file</a></td>
              @else
              <td>Không có file</td>
              @endif
            <td>{{$val->noti_cate_name}}</td>
             <td><span class="text-ellipsis">
               <?php
                 if($val->noti_post_status==0){
              ?>
                 <a href="{{URL::to('/kich-hoat-hien/'.$val->noti_post_id)}}"><span class="fa-thumb-styling  fa fa-thumbs-up"></span></a>
              <?php
            }elseif($val->noti_post_status==1){
              ?>
                 <a href="{{URL::to('/kich-hoat-an/'.$val->noti_post_id)}}"><span class="fa-thumb-styling fa fa-thumbs-down"></span></a>
               <?php
             }
               ?>  
            </span></td>
            <td>
              <a href="{{URL::to('/chinh-sua-thong-bao/'.$val->noti_post_id)}}" class="active" ui-toggle-class=""><i class="fa fa-pencil-square-o text-success text-active"></i></a>
               <a onclick="return confirm('Bạn có chắc muốn xóa hay không?')" href="{{URL::to('/xoa-thong-bao/'.$val->noti_post_id)}}" class="active" ui-toggle-class=""><i class="fa fa-times text-danger text"></i></a>
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