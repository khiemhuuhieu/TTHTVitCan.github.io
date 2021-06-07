@extends('admin_layout')
@section('admin_content')
<div class="row">
            <div class="col-lg-12">
                    <section class="panel">
                        <header class="panel-heading">
                           Sửa lịch thi
                        </header>
                        <div class="panel-body">
                            <div class="position-center">
                              @foreach($edit_exam as $key=>$value)
                                <form role="form" action="{{URL::to('cap-nhat-lich-thi/'.$value->id)}}" method="POST" enctype="multipart/form-data">
                                    @csrf()
                                <div class="form-group">
                                    <label for="exampleInputBrand">Tên lớp học</label>
                                    <input type="text" class="form-control" name="TenLop" id="exampleInputCategory" value="{{$value->TenLop}}" readonly>
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputDesc">Mã lớp</label>
                                     <input type="text" class="form-control" name="MaLop" id="exampleInputCategory" value="{{$value->MaLop}}" readonly>
                                  
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputDesc">Ngày thi</label>
                                   <input type="date" class="form-control" name="NgayThi" id="exampleInputCategory" value="{{$value->NgayThi}}">
                                      @if($errors->has('NgayThi'))
                                    <span style="color: red">
                                    {{$errors->first('NgayThi')}}
                                    @endif
                                </div>
                                 <div class="form-group">
                                    <label for="exampleInputDesc">Giờ thi</label>
                                  <input type="time" class="form-control" name="GioThi" value="{{$value->GioThi}}">
                                     @if($errors->has('GioThi'))
                                    <span style="color: red">
                                    {{$errors->first('GioThi')}}
                                    @endif
                                </div>
                                 <div class="form-group">
                                    <label for="exampleInputDesc">Phòng thi</label>
                                  <input type="text" class="form-control" name="PhongThi" value="{{$value->PhongThi}}">
                                     @if($errors->has('PhongThi'))
                                    <span style="color: red">
                                    {{$errors->first('PhongThi')}}
                                    @endif
                                </div>
                                 <div class="form-group">
                                    <label for="exampleInputDesc">Giám thị</label>
                                <select name="GiamThi" class="form-control input-sm m-bot15">
                                      @foreach($nhanvien as $key=>$vl)
                                       <option value="{{$vl->MaNhanVien}}">{{$vl->MaNhanVien}}- {{$vl->TenNhanVien}}</option>
                                       @endforeach
                                   </select>
                                </div>
                                <button type="submit" name="luu-them-lop" class="btn btn-info">Cập nhật</button>
                            </form>
                            @endforeach
                            </div>
                        </div>
                    </section>
            </div>        
</div>
@endsection