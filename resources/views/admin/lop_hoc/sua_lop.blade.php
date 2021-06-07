@extends('admin_layout')
@section('admin_content')
<div class="row">
            <div class="col-lg-12">
                    <section class="panel">
                        <header class="panel-heading">
                            Sửa lớp học
                        </header>
                        <div class="panel-body">
                            <div class="position-center">
                               @foreach($lop as $key => $val)
                                <form role="form" action="{{URL::to('/cap-nhap-lop-hoc/'.$val->id)}}" method="POST">
                                    @csrf()
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Mã lớp</label>
                                    <input type="text" class="form-control" value="{{$val->MaLop}}" name="MaLop">
                                      @if($errors->has('MaLop'))
                                      <span style="color: red">
                                      {{$errors->first('MaLop')}}
                                      @endif
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Tên lớp</label>
                                    <input type="text" class="form-control" value="{{$val->TenLop}}" name="TenLop">
                                      @if($errors->has('TenLop'))
                                <span style="color: red">
                                    {{$errors->first('TenLop')}}
                                @endif
                                </div>
                                  <div class="form-group">
                                    <label for="exampleInputOption">Giáo viên</label>
                                <select name="MaGV" class="form-control input-sm m-bot15">
                                       @foreach($giaovien as $key=>$val)
                                       <option value="{{$val->MaNhanVien}}">{{$val->TenNhanVien}}</option>
                                       @endforeach
                                   </select>
                                </div>
                                 <div class="form-group">
                                    <label for="exampleInputOption">Tình Trạng</label>
                                <select name="TinhTrang" class="form-control input-sm m-bot15">
                                       <option value="1">Dự kiến</option>
                                       <option value="0">Đang học</option>
                                   </select>
                                </div>
                                <button type="submit" name="cap_nhat_lop" class="btn btn-info">Cập nhật lớp</button>
                            </form>
                            @endforeach
                            </div>

                        </div>
                    </section>
            </div>        
</div>
@endsection