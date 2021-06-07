@extends('admin_layout')
@section('admin_content')
  <div class="table-agile-info">
  <div class="panel panel-default">
    <div class="panel-heading">
     Danh sách chức vụ
    </div>
    <div class="row w3-res-tb">
    <div class="search_box pull-left">
        <form action="{{URL::to('/tim_kiem')}}" method="POST">
            {{csrf_field()}}
        <input type="text" name="keyword_submit" placeholder="Search"/>
        <input type="submit" class="btn btn-primary" style="margin-top: 0; color: #fff" value="Tìm kiếm">
    </form>
    </div>              

      <div class="col-sm-4">
      </div>
      <div class="col-sm-3">
        <button type="submit" class="btn btn-primary">
        <a href="{{URL::to('/add_position')}}" style="font-size: 18px;color: #fff">Thêm chức vụ</a></button>
      </div>
    </div>
    <div class="table-responsive">
      <table class="table table-striped b-t b-light">
        <thead>
          <tr>
            <th>STT</th>
            <th>Chức vụ</th>
            <th style="width:30px;"></th>
          </tr>
        </thead>
        <tbody>
          <?php
          $i=0;
          ?>
          @foreach($all_position as $key=>$ps)
          @php
          $i++;
          @endphp
          <tr>
            <td>{{$i}}</td>
            <td>{{$ps->position_name}}</td>
           <td>
              <a href="{{URL::to('/edit_position/'.$ps->position_id)}}" class="active" ui-toggle-class=""><i class="fa fa-pencil-square-o text-success text-active"></i></a>
               <a onclick="return confirm('Bạn có chắc muốn xóa hay không?')" href="{{URL::to('/delete_position/'.$ps->position_id)}}" class="active" ui-toggle-class=""><i class="fa fa-times text-danger text"></i></a>
            </td>
          </tr>
          @endforeach
      </tbody>
      </table>
    </div>
    <footer class="panel-footer">
      <div class="row">
        
        <div class="col-sm-5 text-center">
         <!--  <small class="text-muted inline m-t-sm m-b-sm">showing 20-30 of 50 items</small> -->
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