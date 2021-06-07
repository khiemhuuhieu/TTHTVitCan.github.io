@extends('admin_layout')
@section('admin_content')
<div class="row">
            <div class="col-lg-12">
                    <section class="panel">
                        <header class="panel-heading">
                             Tính lương nhân viên
                        </header>
                        <div class="panel-body">
                            <div class="position-center">
                                <form role="form" action="{{URL::to('luu-tinh-luong')}}" method="POST" enctype="multipart/form-data">
                                    @csrf()
                               <div class="form-group">
                                    <label for="exampleInputOption">Tên nhân viên</label>
                                   <select name="TenNhanVien" class="form-control input-sm m-bot15">
                                  @foreach($employee as $key=>$val)
                                       <option value="{{$val->TenNhanVien}}">{{$val->TenNhanVien}}</option>
                                   @endforeach    
                                   </select>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputOption">Mã nhân viên</label>
                                   <select name="MaNhanVien" class="form-control input-sm m-bot15">
                                    @foreach($employee as $key=>$val)
                                       <option value="{{$val->MaNhanVien}}">{{$val->MaNhanVien}}</option>
                                   @endforeach 
                                   </select>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputOption">Chức vụ</label>
                                   <select name="ChucVu" class="form-control input-sm m-bot15">
                                    @foreach($position as $key=>$val)
                                       <option value="{{$val->position_name}}">{{$val->position_name}}</option>
                                   @endforeach 
                      
                                   </select>
                                </div>
                                  <div class="form-group">
                                    <label for="exampleInputOption">Email</label>
                                   <select name="Email" class="form-control input-sm m-bot15">
                                  @foreach($employee as $key=>$val)
                                       <option value="{{$val->Email}}">{{$val->Email}}</option>
                                   @endforeach
                                   </select>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Lương cứng</label>
                                    <input type="text" class="form-control" name="LuongCung" id="exampleInputEmail1" placeholder="Nhập chuyên đề..">
                                      @if($errors->has('LuongCung'))
                                   <span style="color: red">
                                    {{$errors->first('LuongCung')}}
                                   @endif
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Số tiền trừ</label>
                                    <input type="text" class="form-control" name="Tru" id="exampleInputEmail1" placeholder="Nhập số tiền trừ..">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Tiền cộng  thêm</label>
                                   <input type="text" class="form-control" name="Cong" id="exampleInputEmail1" placeholder="Nhập số tiền cộng..">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Chi chú</label>
                                   <input type="text" class="form-control" name="GhiChu" placeholder="Ghi chú">
                                </div>
                                <button type="submit" name="add_money" class="btn btn-info">Tạo</button>
                            </form>
                            </div>

                        </div>
                    </section>
            </div>        
</div>
@endsection