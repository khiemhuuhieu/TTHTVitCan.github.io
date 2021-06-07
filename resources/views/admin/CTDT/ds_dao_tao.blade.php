@extends('admin_layout')
@section('admin_content')
    <div class="table-agile-info">
  <div class="panel panel-default">
    <div class="panel-heading">
      Bài viết về chương trình đào tạo
    </div>
    <div class="row w3-res-tb">
        <button type="submit" class="btn btn-primary"><a style="color: white" href="{{URL::to('them-bai-viet-dao-tao')}}">Thêm bài viết</a></button>
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
            <th>Tiêu đề</th>
            <th>Danh mục</th>
            <th>Hiển thị</th>
            <th style="width:30px;"></th>
          </tr>
        </thead>
        <tbody>
          @foreach($daotao as $key=>$val)
          <tr>
            <td>{{$val->TieuDe}}</td>
            <td>{{$val->thematic_name}}</td>
            <td>
               <?php
                 if($val->HienThi==0){
              ?>
                 <a href="{{URL::to('/hien-dao-tao/'.$val->id)}}"><span class="fa-thumb-styling  fa fa-thumbs-up"></span></a>
              <?php
            }elseif($val->HienThi==1){
              ?>
                 <a href="{{URL::to('/an-dao-tao/'.$val->id)}}"><span class="fa-thumb-styling fa fa-thumbs-down"></span></a>
               <?php
             }
               ?>  
            </td>
            <td>
              <a href="{{URL::to('sua-bai-viet-dao-tao/'.$val->id)}}" class="active" ui-toggle-class=""><i class="fa fa-pencil-square-o text-success text-active"></i></a>
               <a onclick="return confirm('Bạn có chắc muốn xóa hay không?')" href="{{URL::to('xoa-bai-viet-dao-tao/'.$val->id)}}" class="active" ui-toggle-class=""><i class="fa fa-times text-danger text"></i></a>
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
    
          </ul>
        </div>
      </div>
    </footer>
  </div>
</div>
@endsection