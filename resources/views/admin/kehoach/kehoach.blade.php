@extends('admin_layout')
@section('admin_content')
  <div class="table-agile-info">
  <div class="panel panel-default">
    <div class="panel-heading">
     Danh sách kế hoạch
    </div>
    <div class="row w3-res-tb">
    <div class="search_box pull-left">
        <form action="{{URL::to('/tim_kiem')}}" method="POST">
            {{csrf_field()}}
        <input type="text" name="keyword_submit" placeholder="Search"/>
        <input type="submit" class="btn btn-primary" style="margin-top: 0; color: #333" value="Tìm kiếm">
    </form>
    </div>              
      <div class="col-sm-3">
        <button class="btn btn-primary">
        <a href="{{URL::to('/len-ke-hoach')}}" style="font-size: 18px;color: white;">Lên kế hoạch</a>
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
            <th>STT</th>
            <th>Tên kế hoạch</th>
            <th>Ngày đăng</th>
            <th>File</th>
            <th style="width:30px;"></th>
          </tr>
        </thead>
        <tbody>
          <?php
          $i=0;
          ?>
          @foreach($ke_hoach as $key=>$val)
          @php
          $i++;
          @endphp
          <tr>
          <td>{{$i}}</td>
          <td>{{$val->TenKeHoach}}</td>
          <td>{{$val->created_at}}</td>
          @if($val->File != NULl)
          <td><a href="{{URL::to('public/uploads/document/'.$val->File)}}">Tải về</a></td>
          @else
          <td>Không có file</td>
          @endif
           <td>
              <a href="{{URL::to('sua-ke-hoach/'.$val->id)}}" class="active" ui-toggle-class=""><i class="fa fa-pencil-square-o text-success text-active"></i></a>
               <a onclick="return confirm('Bạn có chắc muốn xóa hay không?')" href="{{URL::to('xoa-ke-hoach/'.$val->id)}}" class="active" ui-toggle-class=""><i class="fa fa-times text-danger text"></i></a>
            </td>
          </tr>
         @endforeach
        </tbody>
      </table>
    </div>
    <footer class="panel-footer">
      <div class="row">
        
        <div class="col-sm-5 text-center">
          <!-- <small class="text-muted inline m-t-sm m-b-sm">showing 20-30 of 50 items</small> -->
        </div>
        <div class="col-sm-7 text-right text-center-xs">                
          <ul class="pagination pagination-sm m-t-none m-b-none">
           {!!$ke_hoach->render()!!}
          </ul>
        </div>
      </div>
    </footer>
  </div>
</div>
@endsection