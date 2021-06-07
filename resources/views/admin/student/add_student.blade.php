@extends('admin_layout')
@section('admin_content')
<div class="row">
            <div class="col-lg-12">
                    <section class="panel">
                        <header class="panel-heading">
                            Thêm học viên
                        </header>
                        <div class="panel-body">
                            <div class="position-center">
                                <form role="form" action="{{URL::to('save_students')}}" method="POST" enctype="multipart/form-data">
                                    @csrf()
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Mã học viên</label>
                                    <input type="text" class="form-control" name="ma_hocvien" placeholder="Nhập mã học viên..">
                                      @if($errors->has('ma_hocvien'))
                                    <span style="color: red">
                                    {{$errors->first('ma_hocvien')}}
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Tên học viên</label>
                                    <input type="text" class="form-control" name="ten_hocvien" placeholder="Nhập tên học viên..">
                                      @if($errors->has('ten_hocvien'))
                                    <span style="color: red">
                                    {{$errors->first('ma_hocvien')}}
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Ngày sinh</label>
                                    <input type="date" class="form-control" name="ngay_sinh" placeholder="Nhập ngày sinh..">
                                      @if($errors->has('ngay_sinh'))
                                    <span style="color: red">
                                    {{$errors->first('ngay_sinh')}}
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputOption">Lớp</label>
                                   <select name="lop" class="form-control input-sm m-bot15">
                                    @foreach($lop_hoc as $key=>$val)
                                       <option value="{{$val->MaLop}}">{{$val->TenLop}}</option>
                                    @endforeach   
                                   </select>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Địa chỉ</label>
                                    <input type="text" class="form-control" name="dia_chi" id="exampleInputEmail1" placeholder="Nhập địa chỉ..">
                                      @if($errors->has('dia_chi'))
                                    <span style="color: red">
                                    {{$errors->first('dia_chi')}}
                                    @endif
                                </div>
                                  <div class="form-group">
                                    <label for="exampleInputEmail1">Ghi chú</label>
                                    <input type="text" class="form-control" name="ghi_chu" id="exampleInputEmail1" placeholder="Nhập ghi chú">
                                </div>
                                  <div class="form-group">
                                    <label for="exampleInputOption">Tình trạng</label>
                                   <select name="tinh_trang" class="form-control input-sm m-bot15">
                                       <option value="1">Đi học</option>
                                       <option value="0">Nghỉ học</option>
                                   </select>
                                </div>
                                  <div class="form-group">
                                    <label for="exampleInputEmail1">Số điện thoại</label>
                                    <input type="text" class="form-control" name="so_dienthoai" placeholder="Nhập số điện thoại">
                                      @if($errors->has('so_dienthoai'))
                                    <span style="color: red">
                                    {{$errors->first('so_dienthoai')}}
                                    @endif
                                </div>
                                  <div class="form-group">
                                    <label for="exampleInputEmail1">Mã phụ huynh</label>
                                    <input type="text" class="form-control" name="ma_phuhuynh" id="exampleInputEmail1" placeholder="Nhập mã phụ huynh">
                                      @if($errors->has('ma_phuhuynh'))
                                    <span style="color: red">
                                    {{$errors->first('ma_phuhuynh')}}
                                    @endif
                                </div>

                                <button type="submit" name="add_student" class="btn btn-info">Thêm</button>
                            </form>
                            </div>

                        </div>
                    </section>
            </div>        
</div>
@endsection