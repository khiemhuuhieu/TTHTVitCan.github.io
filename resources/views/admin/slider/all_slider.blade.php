@extends('admin_layout')
@section('admin_content')
<div class="table-agile-info">
  <div class="panel panel-default">
    <div class="panel-heading">
      Danh sách banner
    </div>
   <li style="list-style: none;margin: 10px 10px; font-size: 20px;font-weight: bold;"><a href="{{URL::to('/insert_banner')}}">Thêm Banner</a></li>
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
            <th style="width:20px;">
              <label class="i-checks m-b-none">
                <input type="checkbox"><i></i>
              </label>
            </th>
            <th>Tên banner</th>
            <th>Hình ảnh</th>
            <th>Mô tả</th>
            <th>Hiển thị</th>
            <th style="width:30px;"></th>
          </tr>
        </thead>
        <tbody>
      
          @foreach ($all_slider as $key => $slider)
          
          <tr>
            <td><label class="i-checks m-b-none"><input type="checkbox" name="post[]"><i></i></label></td>
            <td>{{($slider->slider_name)}}</td>
            <td><img src="public/uploads/slider/{{($slider->slider_image)}}" width="400" height="120"></td>
            <td>{{($slider->slider_desc)}}</td>
            <td><span class="text-ellipsis">
              <?php
                 if($slider->slider_status==0){
              ?>
                 <a href="{{URL::to('/unactive_slider/'.$slider->slider_id)}}"><span class="fa-thumb-styling  fa fa-thumbs-up"></span></a>
              <?php
            }elseif($slider->slider_status==1){
              ?>
                 <a href="{{URL::to('/active_slider/'.$slider->slider_id)}}"><span class="fa-thumb-styling fa fa-thumbs-down"></span></a>
               <?php
             }
               ?>  
            </span></td>
            <td>
              <a href="{{URL::to('/edit_slider/'.$slider->slider_id)}}" class="active" ui-toggle-class=""><i class="fa fa-pencil-square-o text-success text-active"></i></a>
              <a onclick="return confirm('Bạn có chắc muốn xóa không?')" href="{{URL::to('/delete_slider/'.$slider->slider_id)}}" class="active" ui-toggle-class=""><i class="fa fa-times text-danger text"></i></a>
            </td>
          </tr>
         @endforeach
        
        </tbody>
      </table>
    </div>
   
  </div>
</div>
@endsection