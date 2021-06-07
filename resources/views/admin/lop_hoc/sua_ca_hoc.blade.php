@extends('admin_layout')
@section('admin_content')
<div class="row">
            <div class="col-lg-12">
                    <section class="panel">
                        <header class="panel-heading">
                           Sửa ca học
                        </header>
                        <div class="panel-body">
                            <div class="position-center">
                              @foreach($ca_hoc as $key=>$val)
                                <form role="form" action="{{URL::to('cap-nhat-ca-hoc/'.$val->id)}}" method="POST" enctype="multipart/form-data">
                                    @csrf()
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Mã ca học</label>
                                    <input type="text" class="form-control" name="MaCaHoc" placeholder="Nhập ngày tháng" value="{{$val->MaCaHoc}}">
                                      @if($errors->has('MaCaHoc'))
                                    <span style="color: red">
                                    {{$errors->first('MaCaHoc')}}
                                    @endif
                                </div>
                                 <div class="form-group">
                                    <label for="exampleInputOption">Mã lớp</label>
                                     <input type="text" class="form-control" name="MaLop" placeholder="Nhập ngày tháng" value="{{$val->MaLop}}" readonly>
                                </div>
                                 <div class="form-group">
                                    <label for="exampleInputOption">Mã giáo viên</label>
                                   <input type="text" class="form-control" name="MaGV" placeholder="Nhập mã giáo viên" value="{{$val->MaGV}}" readonly>
                                </div>
                                   <div class="form-group">
                                    <label for="exampleInputEmail1">Ngày học</label>
                                    <input type="date" class="form-control" name="Ngay" id="exampleInputEmail1" placeholder="Nhập ngày tháng" value="{{$val->Ngay}}">
                                       @if($errors->has('Ngay'))
                                    <span style="color: red">
                                    {{$errors->first('Ngay')}}
                                    @endif
                                </div>
                                   <div class="form-group">
                                    <label for="exampleInputEmail1">Giờ học</label>
                                    <input type="time" class="form-control" name="Gio" id="exampleInputEmail1" placeholder="Nhập ngày tháng" value="{{$val->Gio}}">
                                     @if($errors->has('Gio'))
                                    <span style="color: red">
                                    {{$errors->first('Gio')}}
                                    @endif
                                </div>
                                  <div class="form-group">
                                    <label for="exampleInputEmail1">Phòng học</label>
                                    <input type="text" class="form-control" name="PhongHoc" placeholder="Nhập phòng học" value="{{$val->PhongHoc}}">
                                     @if($errors->has('PhongHoc'))
                                    <span style="color: red">
                                    {{$errors->first('PhongHoc')}}
                                    @endif
                                </div>
                                <button type="submit" name="tao_ca_hoc" class="btn btn-info">Cập nhật</button>
                            </form>
                            @endforeach
                            </div>

                        </div>
                    </section>
            </div>        
</div>
@endsection