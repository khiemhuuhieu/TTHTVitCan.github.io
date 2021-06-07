@extends('admin_layout')
@section('admin_content')
<div class="row">
            <div class="col-lg-12">
                    <section class="panel">
                        <header class="panel-heading">
                            Tạo khoản thu
                        </header>
                         <?php
                            $message=Session::get('message');
                             if($message){
                              echo '<span style="color:red;width:100%;text-align: center;font-size:16px">'.$message.'</span>';
                              Session::get('message',null);
                        }
                        ?>
                        <div class="panel-body">
                            <div class="position-center">
                                <form role="form" action="{{URL::to('luu-khoan-thu')}}" method="POST" enctype="multipart/form-data">
                                    @csrf()
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Ngày tháng</label>
                                    <input type="date" class="form-control" name="NgayThang" id="exampleInputEmail1" placeholder="Nhập ngày tháng">
                                       @if($errors->has('NgayThang'))
                                    <span style="color: red">
                                    {{$errors->first('NgayThang')}}
                                     @endif
                                </div>
                                 <div class="form-group">
                                    <label for="exampleInputOption">Tên học viên</label>
                                   <select name="TenHocVien" class="form-control input-sm m-bot15">
                                        @foreach($student as $key => $val)
                                         <option value="{{$val->MaHocVien}}">{{$val->MaHocVien}} - {{$val->TenHocVien}}</option>
                                       @endforeach 
                                   </select>
                                </div>
                                 <div class="form-group">
                                    <label for="exampleInputOption">Loại thu</label>
                                   <select name="loaithu" class="form-control input-sm m-bot15">
                                        @foreach($loaiThuChi as $key => $value)
                                         <option>{{$value->TenLoai}}</option>
                                       @endforeach 
                                   </select>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputOption">Người thu</label>
                                   <select name="NguoiThu" class="form-control input-sm m-bot15">    
                                        @foreach($employee as $key => $values)
                                        @if($values->MaNhanVien == 'KT01')
                                         <option value="{{$values->MaNhanVien}}">{{$values->TenNhanVien}}</option>
                                         @endif
                                       @endforeach 
                                   </select>
                                </div>
                               
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Nội dung</label>
                                    <input type="text" class="form-control" name="NoiDung" id="exampleInputEmail1" placeholder="Nhập nội dung..">
                                     @if($errors->has('NoiDung'))
                                    <span style="color: red">
                                    {{$errors->first('NoiDung')}}
                                     @endif
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Số tiền thu</label>
                                    <input type="number" class="form-control" name="SoTienThu" id="exampleInputEmail1" placeholder="Nhập tiền thu..">
                                     @if($errors->has('SoTienThu'))
                                    <span style="color: red">
                                    {{$errors->first('SoTienThu')}}
                                     @endif
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Ghi chú</label>
                                    <input type="text" class="form-control" name="GhiChu" id="exampleInputEmail1" placeholder="Nhập ghi chú">
                                </div>
                                 
                                <button type="submit" name="tao_thu" class="btn btn-info">Tạo</button>
                            </form>
                            </div>

                        </div>
                    </section>
            </div>        
</div>
@endsection