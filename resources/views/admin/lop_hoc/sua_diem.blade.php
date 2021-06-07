@extends('admin_layout')
@section('admin_content')
<div class="row">
            <div class="col-lg-12">
                    <section class="panel">
                        <header class="panel-heading">
                           Sửa điểm học viên
                        </header>
                        <div class="panel-body">
                            <div class="position-center">
                                @foreach($sua_diem as $key=>$val)
                                <form role="form" action="{{URL::to('cap-nhat-diem/'.$val->id)}}" method="POST" enctype="multipart/form-data">
                                    @csrf()
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Tên học viên</label>
                                  <input type="text" class="form-control" name="TenHocVien" value="{{$val->TenHocVien}}">
                                </div>
                                  <div class="form-group">
                                    <label for="exampleInputEmail1">Mã học viên</label>
                                  <input type="text" class="form-control" name="MaHocVien" value="{{$val->MaHocVien}}">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Mã lớp</label>
                                  <input type="text" class="form-control" name="MaLop" value="{{$val->MaLop}}">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Điểm giữa kì</label>
                                    <input type="text" class="form-control" name="GK" value="{{$val->GK}}">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Điểm thực hành</label>
                                    <input type="text" class="form-control" name="TH" placeholder="Nhập điểm" value="{{$val->TH}}">
                                </div>
                                 <div class="form-group">
                                    <label for="exampleInputEmail1">Điểm cuối kì</label>
                                    <input type="text" class="form-control" name="CK" value="{{$val->CK}}">
                                </div>
                                <button type="submit" name="luu_nhap_diem" class="btn btn-info">Cập nhật</button>
                            </form>
                            @endforeach
                            </div>

                        </div>
                    </section>
            </div>        
</div>
@endsection