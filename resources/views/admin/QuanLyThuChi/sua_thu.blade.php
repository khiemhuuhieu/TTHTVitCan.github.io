@extends('admin_layout')
@section('admin_content')
<div class="row">
            <div class="col-lg-12">
                    <section class="panel">
                        <header class="panel-heading">
                             Sửa khoản thu chi
                        </header>
                        <div class="panel-body">
                            <div class="position-center">
                                @foreach($edit_thuchi as $key=>$value)
                                <form role="form" action="{{URL::to('cap-nhat-khoan-thu-chi')}}" method="POST" enctype="multipart/form-data">
                                    @csrf()
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Ngày tháng</label>
                                    <input type="date" class="form-control" name="NgayThang" id="exampleInputEmail1" placeholder="Nhập ngày tháng" value="{{$value->NgayThang}}">
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
                                   <input type="text" class="form-control" name="Loai" id="exampleInputEmail1" placeholder="Nhập nội dung.." value="{{$value->Loai}}" readonly="">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputOption">Người thu</label>
                                    <input type="text" class="form-control" name="Nguoithu" id="exampleInputEmail1" placeholder="Nhập nội dung.." value="{{$value->NguoiThu}}" readonly="">
                                </div>
                               
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Nội dung</label>
                                    <input type="text" class="form-control" name="NoiDung" id="exampleInputEmail1" placeholder="Nhập nội dung.." value="{{$value->NoiDung}}">
                                     @if($errors->has('NoiDung'))
                                    <span style="color: red">
                                    {{$errors->first('NoiDung')}}
                                     @endif
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputEmail1">Số tiền thu</label>
                                    <input type="number" class="form-control" name="SoTienThu" id="exampleInputEmail1" placeholder="Nhập tiền thu.." value="{{$value->SoTienThu}}">
                                     @if($errors->has('SoTienThu'))
                                    <span style="color: red">
                                    {{$errors->first('SoTienThu')}}
                                     @endif
                                </div>
    
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Số tiền chi</label>
                                    <input type="number" class="form-control" name="SoTienChi" id="exampleInputEmail1" placeholder="Nhập tiền thu.." value="{{$value->SoTienChi}}">
                                     @if($errors->has('SoTienChi'))
                                    <span style="color: red">
                                    {{$errors->first('SoTienChi')}}
                                     @endif
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Ghi chú</label>
                                    <input type="text" class="form-control" name="GhiChu" id="exampleInputEmail1" placeholder="Nhập ghi chú" value="{{$value->GhiChu}}">
                                </div>
                                 
                                <button type="submit" name="tao_thu" class="btn btn-info">Tạo</button>
                            </form>
                            @endforeach
                            </div>

                        </div>
                    </section>
            </div>        
</div>
@endsection