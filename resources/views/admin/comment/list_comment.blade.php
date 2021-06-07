@extends('admin_layout')
@section('admin_content')
    <div class="table-agile-info">
  <div class="panel panel-default">
    <div class="panel-heading">
      Danh sách bình luận
    </div>
    <div id="notifi_comment"></div>
    <div class="table-responsive">
      <table class="table table-striped b-t b-light" id="myTable">
         <?php
        $message=Session::get('message');
        if($message){
          echo '<span style="color:red">'.$message.'</span>';
          Session::put('message',null);
        }
        ?>
        <thead>
          <tr>
            <th>Duyệt</th>
            <th>Người gửi</th>
            <th>Bình luận</th>
            <th>Ngày gửi</th>
            <th>Khóa học</th>
            <th>Quản lý</th>
            <th style="width:30px;"></th>
          </tr>
        </thead>
        <tbody>
          @foreach ($comment as $key => $cmt)
          <tr>
            <td>
             @if($cmt->comment_status==1)
                 <input type="button" data-comment_status="0" data-comment_id="{{$cmt->comment_id}}" id="{{$cmt->comment_class_id}}" class="btn btn-primary btn-xs binhluan_duyet_btn" value="Duyệt">
             @else
                 <input type="button" data-comment_status="1" data-comment_id="{{$cmt->comment_id}}" id="{{$cmt->comment_class_id}}" class="btn btn-danger btn-xs binhluan_duyet_btn" value="Bỏ duyệt">
             @endif
            </td>
            <td>{{$cmt->comment_name}}</td>
            <td>{{$cmt->comment}}
              <style type="text/css">
                ul.list_crep li{
                  list-style-type:decimal;
                  color: blue;
                  margin: 5px 40px;

                }
              </style>
              <ul class="list_crep">
                Trả lời:
                  @foreach($comment_rep as $key=>$all_cmt)
                  @if($all_cmt->comment_parent_comment == $cmt->comment_id)
                  <li>{{$all_cmt->comment}}</li>
                  @endif
                  @endforeach
              </ul>
              @if($cmt->comment_status == 0)
              <br><textarea rows="3" class="form-control reply_comment_{{$cmt->comment_id}}"></textarea>
              <br><button type="button" class="btn btn-default btn-xs btn-reply-comment" data-class_id="{{$cmt->comment_class_id}}" data-comment_id="{{$cmt->comment_id}}">Trả lời bình luận</button>
              @endif
            </td>
            <td>{{$cmt->comment_date}}</td>
            <td><a href="{{URL::to('/chi-tiet-khoa-hoc/'.$cmt->class->class_id)}}" target="_blank">{{$cmt->class->class_name}}</a></td>
        
              <td>
                <a href="" class="active" ui-toggle-class=""><i class="fa fa-pencil-square-o text-success text-active"></i></a> 
                <a onclick="return confirm('Bạn có chắc muốn xóa hay không?')" href="" class="active" ui-toggle-class=""><i class="fa fa-times text-danger text"></i></a>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>
</div>
@endsection