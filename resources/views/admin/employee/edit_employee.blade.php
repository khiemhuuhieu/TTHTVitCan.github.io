@extends('admin_layout')
@section('admin_content')
<div class="row">
            <div class="col-lg-12">
                    <section class="panel">
                        <header class="panel-heading">
                            Thêm nhân viên 
                        </header>
                        <div class="panel-body">
                            <div class="position-center">
                                @foreach($edit_employee as $key=>$val)
                                <form role="form" action="{{URL::to('cap-nhat-nhan-vien/'.$val->id)}}" method="POST" enctype="multipart/form-data">
                                    @csrf()
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Mã nhân viên</label>
                                    <input type="text" class="form-control" name="MaNhanVien" placeholder="Nhập mã nhân viên.." value="{{$val->MaNhanVien}}">
                                     @if($errors->has('MaNhanVien'))
                                    <span style="color: red">
                                    {{$errors->first('MaNhanVien')}}
                                    @endif
                                </div>
                                 <div class="form-group">
                                    <label for="exampleInputCategory">Tên nhân viên</label>
                                    <input type="text" class="form-control" name="TenNhanVien" value="{{$val->TenNhanVien}}" placeholder="Tên nhân viên..">
                                     @if($errors->has('TenNhanVien'))
                                    <span style="color: red">
                                    {{$errors->first('TenNhanVien')}}
                                 @endif
                                </div>
                                 <div class="form-group">
                                    <label for="exampleInputOption">Chức vụ</label>
                                   <select name="ChucVu" class="form-control input-sm m-bot15">
                                    @foreach($position as $key=>$value)
                                       <option value="{{$value->position_id}}">{{$value->position_name}}</option>
                                    @endforeach   
                                   </select>
                                </div> 
                                 <div class="form-group">
                                    <label for="exampleInputPassword1">Trình độ</label>
                                    <input type="text" class="form-control" name="TrinhDo" id="exampleInputEmail1" value="{{$val->TrinhDo}}" placeholder="Nhập trình độ chuyên môn...">
                                      @if($errors->has('TrinhDo'))
                                    <span style="color: red">
                                    {{$errors->first('TrinhDo')}}
                                 @endif

                                </div>      
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Ảnh đại diện</label>
                                    <input type="file" class="form-control" name="HinhAnh" placeholder="Nhập ảnh đại diện..">
                                    <img src="{{URL::to('public/uploads/product/'.$val->HinhAnh)}}" width="80px" height="80px">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Ngày sinh</label>
                                    <input type="date" class="form-control" name="NgaySinh" id="exampleInputEmail1" placeholder="Nhập ngày sinh.." value="{{$val->NgaySinh}}">
                                       @if($errors->has('NgaySinh'))
                                    <span style="color: red">
                                    {{$errors->first('NgaySinh')}}
                                     @endif
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Số điện thoại</label>
                                    <input type="text" class="form-control" name="SDT" value="{{$val->SDT}}" placeholder="Nhập số điện thoại..">
                                       @if($errors->has('SDT'))
                                    <span style="color: red">
                                    {{$errors->first('SDT')}}
                                 @endif
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Email</label>
                                    <input type="text" class="form-control" name="Email" id="exampleInputEmail1" value="{{$val->Email}}" placeholder="Nhập email..">
                                    @if($errors->has('Email'))
                                    <span style="color: red">
                                    {{$errors->first('Email')}}
                                 @endif
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Địa chỉ</label>
                                    <input type="text" class="form-control" name="DiaChi" value="{{$val->DiaChi}}" placeholder="Nhập địa chỉ..">
                                     @if($errors->has('DiaChi'))
                                    <span style="color: red">
                                    {{$errors->first('DiaChi')}}
                                 @endif
                                </div>
                                                        
                                <button type="submit" name="add_class" class="btn btn-info">Cập nhật</button>
                            </form>
                            @endforeach
                            </div>

                        </div>
                    </section>
            </div>        
</div>
@endsection