@extends('admin_layout')
@section('admin_content')
<div class="row">
            <div class="col-lg-12">
                    <section class="panel">
                        <header class="panel-heading">
                           Thêm lớp học
                        </header>
                        <div class="panel-body">
                            <div class="position-center">
                                <form role="form" action="{{URL::to('luu-tao-lop')}}" method="POST" enctype="multipart/form-data">
                                    @csrf()
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Mã lớp</label>
                                    <input type="text" class="form-control" name="MaLop" id="exampleInputEmail1" placeholder="Nhập ngày tháng">
                                       @if($errors->has('MaLop'))
                                      <span style="color: red">
                                      {{$errors->first('MaLop')}}
                                      @endif
                                </div>
                                
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Tên lớp</label>
                                    <input type="text" class="form-control" name="TenLop" id="exampleInputEmail1" placeholder="Nhập nội dung..">
                                      @if($errors->has('TenLop'))
                                <span style="color: red">
                                    {{$errors->first('TenLop')}}
                                @endif
                                </div>
                                 <div class="form-group">
                                    <label for="exampleInputOption">Giáo viên</label>
                                   <select name="MaGV" class="form-control input-sm m-bot15">
                                    @foreach($employee as $key=>$val)
                                  <option value="{{$val->MaNhanVien}}">{{$val->MaNhanVien}}-{{$val->TenNhanVien}}</option>
                              @endforeach
                                   </select>
                                </div>
                                 <div class="form-group">
                                    <label for="exampleInputOption">Tình Trạng</label>
                                   <select name="TinhTrang" class="form-control input-sm m-bot15">
                                    <option>------Chọn------</option>
                                  <option value="0">Đang học</option>
                                  <option value="1">Dự kiến</option>
                                   </select>
                                </div>
                                 
                                <button type="submit" name="tao_lop_hoc" class="btn btn-info">Tạo</button>
                            </form>
                            </div>

                        </div>
                    </section>
            </div>        
</div>
@endsection