@extends('admin_layout')
@section('admin_content')
<div class="row">
            <div class="col-lg-12">
                    <section class="panel">
                        <header class="panel-heading">
                           Thêm ca học
                        </header>
                        <div class="panel-body">
                            <div class="position-center">
                                <form role="form" action="{{URL::to('luu-ca-hoc')}}" method="POST" enctype="multipart/form-data">
                                    @csrf()
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Mã ca học</label>
                                    <input type="text" class="form-control" name="MaCaHoc" id="exampleInputEmail1" placeholder="Nhập ngày tháng">
                                     @if($errors->has('MaCaHoc'))
                                    <span style="color: red">
                                    {{$errors->first('MaCaHoc')}}
                                    @endif
                                </div>
                                 <div class="form-group">
                                    <label for="exampleInputOption">Mã lớp</label>
                                   <select name="MaLop" class="form-control input-sm m-bot15">
                                    @foreach($lop_hoc as $key=>$val)
                                  <option value="{{$val->MaLop}}"> {{$val->MaLop}}-{{$val->TenLop}}</option>
                                   @endforeach
                                   </select>
                                </div>
                                 <div class="form-group">
                                    <label for="exampleInputOption">Mã giáo viên</label>
                                   <select name="MaGV" class="form-control input-sm m-bot15">
                                    @foreach($lop_hoc as $key=>$val)
                                  <option value="{{$val->MaGV}}"> {{$val->MaGV}}</option>
                                   @endforeach
                                   </select>
                                </div>
                                   <div class="form-group">
                                    <label for="exampleInputEmail1">Ngày học</label>
                                    <input type="date" class="form-control" name="Ngay" id="exampleInputEmail1" placeholder="Nhập ngày tháng">
                                     @if($errors->has('Ngay'))
                                    <span style="color: red">
                                    {{$errors->first('Ngay')}}
                                    @endif
                                </div>
                                   <div class="form-group">
                                    <label for="exampleInputEmail1">Giờ học</label>
                                    <input type="time" class="form-control" name="Gio" id="exampleInputEmail1" placeholder="Nhập giờ học">
                                     @if($errors->has('Gio'))
                                    <span style="color: red">
                                    {{$errors->first('Gio')}}
                                    @endif
                                </div>
                                  <div class="form-group">
                                    <label for="exampleInputEmail1">Phòng học</label>
                                    <input type="text" class="form-control" name="PhongHoc" placeholder="Nhập phòng học">
                                     @if($errors->has('PhongHoc'))
                                    <span style="color: red">
                                    {{$errors->first('PhongHoc')}}
                                    @endif
                                </div>
                                <button type="submit" name="tao_ca_hoc" class="btn btn-info">Tạo</button>
                            </form>
                            </div>

                        </div>
                    </section>
            </div>        
</div>
@endsection