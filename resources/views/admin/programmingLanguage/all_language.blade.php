@extends('admin_layout')
@section('admin_content')
    <div class="table-agile-info">
  <div class="panel panel-default">
    <div class="panel-heading">
      Danh sách ngôn ngữ lập trình và phần mềm hỗ trợ
    </div>
   <button type="submit" class="btn btn-primary"><a style="color: white" href="{{URL::to('/add_language')}}">Thêm</a></button>
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
            <th>Tên chuyên đề</th>
            <th>Mô tả</th>
            <th>Từ khóa</th>
            <th>Trạng thái</th>
            <th style="width:30px;"></th>
          </tr>
        </thead>
        <tbody>
          @foreach ($all_language as $key => $language)
          <tr>
           
            <td>{{$language->language_name}}</td>
            <td>{{$language->language_desc}}</td>
            <td><span class="text-ellipsis">{{$language->language_keywords}}</span></td>
            <td><span class="text-ellipsis">
               <?php
                 if($language->language_status==0){
              ?>
                 <a href="{{URL::to('/unactive_language/'.$language->language_id)}}"><span class="fa-thumb-styling  fa fa-thumbs-up"></span></a>
              <?php
            }elseif($language->language_status==1){
              ?>
                 <a href="{{URL::to('/active_language/'.$language->language_id)}}"><span class="fa-thumb-styling fa fa-thumbs-down"></span></a>
               <?php
             }
               ?>  
            </span></td>
            <td>
              <a href="{{URL::to('/edit_language/'.$language->language_id)}}" class="active" ui-toggle-class=""><i class="fa fa-pencil-square-o text-success text-active"></i></a>
               <a onclick="return confirm('Bạn có chắc muốn xóa hay không?')" href="{{URL::to('/delete_language/'.$language->language_id)}}" class="active" ui-toggle-class=""><i class="fa fa-times text-danger text"></i></a>
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
           {!!$all_language->render()!!}
          </ul>
        </div>
      </div>
    </footer>
  </div>
</div>
@endsection