@extends('admin_layout')
@section('admin_content')
<div class="table-agile-info">
  <div class="panel panel-default">
    <div class="panel-heading">
     Quản lý tài khoản
    </div>
    <div class="row w3-res-tb">
      <div class="col-sm-4">
      </div>
      <div class="col-sm-12">
      <button class="btn btn-primary">
      <a style="font-size: 20px;font-weight: bold;color: white" href="{{URL::to('/add_user')}}">Thêm tài khoản</a>
    </button>
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
            <th>Tên tài khoản</th>
            <th>Mã nhân viên</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Nhân viên</th>
            <th>Admin</th>
            <th>Giáo viên</th>
            <th>Giám đốc</th>
            <th>Kế toán</th>
            <th style="width:30px;"></th>
          </tr>
        </thead>
        <tbody>  
        @foreach($admin as $key =>$user) 
        <form action="{{URL::to('/assign_roles')}}" method="POST"> 
        @csrf()    
          <tr>
            <td>{{$user->admin_name}}</td>
            <td>{{$user->MaNhanVien}}</td>
            <td>{{$user->admin_email}}
              <input type="hidden" name="admin_email" value="{{$user->admin_email}}">
               <input type="hidden" name="admin_id" value="{{$user->admin_id}}"> 
            </td>
            <td>{{$user->admin_phone}}</td>
            <td><input type="checkbox" name="employee_role" {{$user->hasRole('employee') ? 'checked' : ''}}></td>
            <td><input type="checkbox" name="admin_role" {{$user->hasRole('admin') ? 'checked' : ''}}></td>
            <td><input type="checkbox" name="teacher_role" {{$user->hasRole('teacher') ? 'checked' : ''}}></td>
            <td><input type="checkbox" name="director_role" {{$user->hasRole('director') ? 'checked' : ''}}></td> 
            <td><input type="checkbox" name="accountant_role" {{$user->hasRole('accountant') ? 'checked' : ''}}></td>  
            <td>
              <p><input type="submit" value="Phân quyền" class="btn btn-sm btn-default" style="width: 95px"></p>
             <p><a style="margin:5px 0;width: 95px" href="{{URL::to('/delete_user/'.$user->admin_id)}}" class="btn btn-sm btn-danger">Xóa user</a></p>
              <p><a style="margin:5px 0" href="{{URL::to('/inpersonate/'.$user->admin_id)}}" class="btn btn-sm btn-success">Chuyển quyền</a></p>
            </td>
          </tr>
        </form>
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
         {!!$admin->render()!!}
          </ul>
        </div>
      </div>
    </footer>
  </div>
</div>
@endsection