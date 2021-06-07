@extends('admin_layout')
@section('admin_content')
    <div class="table-agile-info">
  <div class="panel panel-default">
    <div class="panel-heading">
      Danh sách bài viết tin tức
    </div>
    <div class="row w3-res-tb text-left">
    <button type="submit" class="btn btn-primary"><a style="color: white" href="{{URL::to('/add-news-post')}}">Đăng kí viết bài</a></button>
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
            <th>Tên bài viết</th>
            <th>Hình ảnh</th>
            <th>Mô tả bài viết</th>
            <th>Danh mục tin tức</th>
            <th>Hiển thị</th>
            <th style="width:30px;"></th>
          </tr>
        </thead>
        <tbody>
          @foreach ($all_news_post as $key =>$post)
          <tr>
            <td>{{$post->news_post_title}}</td>
            <td><img src="{{asset('public/uploads/post/'.$post->news_post_image)}}" width="80" height="50"></td>
            <td>{!!$post->news_post_desc!!}</td>
            <td>{{$post->news_cate_name}}</td>
            <td><span class="text-ellipsis">
               <?php
                 if($post->news_post_status==0){
              ?>
                Ẩn
              <?php
            }elseif($post->news_post_status==1){
              ?>
               Hiện
               <?php
             }
               ?>  
            </span></td>
            <td>
              <a href="{{URL::to('/sua-tin-tuc/'.$post->news_post_id)}}" class="active" ui-toggle-class=""><i class="fa fa-pencil-square-o text-success text-active"></i></a>
               <a onclick="return confirm('Bạn có chắc muốn xóa hay không?')" href="{{URL::to('/xoa-tin-tuc/'.$post->news_post_id)}}" class="active" ui-toggle-class=""><i class="fa fa-times text-danger text"></i></a>
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
            {!!$all_news_post->render()!!}
          </ul>
        </div>
      </div>
    </footer>
  </div>
</div>
@endsection