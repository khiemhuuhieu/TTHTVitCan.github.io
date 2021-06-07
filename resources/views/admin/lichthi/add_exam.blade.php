@extends('admin_layout')
@section('admin_content')
<div class="row">
            <div class="col-lg-12">
                    <section class="panel">
                        <header class="panel-heading">
                           Thêm lịch thi
                        </header>
                        <div class="panel-body">
                            <div class="position-center">
                                <form role="form" action="{{URL::to('luu-them-lich-thi')}}" method="POST" enctype="multipart/form-data">
                                    @csrf()
                                <div class="form-group">
                                    <label for="exampleInputBrand">Tên lớp học</label>
                                      <select name="TenLop" class="form-control input-sm m-bot15">
                                      @foreach($lop_hoc as $key=>$val)
                                       <option value="{{$val->TenLop}}">{{$val->TenLop}}</option>
                                       @endforeach
                                   </select>
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputDesc">Mã lớp</label>
                                    <select name="MaLop" class="form-control input-sm m-bot15">
                                      @foreach($lop_hoc as $key=>$val)
                                       <option value="{{$val->MaLop}}">{{$val->MaLop}}- {{$val->TenLop}}</option>
                                       @endforeach
                                   </select>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputDesc">Ngày thi</label>
                                   <input type="date" class="form-control" name="NgayThi" id="exampleInputCategory">
                                      @if($errors->has('NgayThi'))
                                    <span style="color: red">
                                    {{$errors->first('NgayThi')}}
                                    @endif
                                </div>
                                 <div class="form-group">
                                    <label for="exampleInputDesc">Giờ thi</label>
                                  <input type="time" class="form-control" name="GioThi">
                                     @if($errors->has('GioThi'))
                                    <span style="color: red">
                                    {{$errors->first('GioThi')}}
                                    @endif
                                </div>
                                 <div class="form-group">
                                    <label for="exampleInputDesc">Phòng thi</label>
                                  <input type="text" class="form-control" name="PhongThi">
                                     @if($errors->has('PhongThi'))
                                    <span style="color: red">
                                    {{$errors->first('PhongThi')}}
                                    @endif
                                </div>
                                 <div class="form-group">
                                    <label for="exampleInputDesc">Giám thị</label>
                                <select name="GiamThi" class="form-control input-sm m-bot15">
                                      @foreach($nhanvien as $key=>$value)
                                       <option value="{{$value->MaNhanVien}}">{{$value->MaNhanVien}}- {{$value->TenNhanVien}}</option>
                                       @endforeach
                                   </select>
                                </div>
                                <button type="submit" name="luu-them-lop" class="btn btn-info">Thêm lịch thi</button>
                            </form>
                            </div>
                        </div>
                    </section>
            </div>        
</div>
@endsection