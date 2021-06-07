@extends('admin_layout')
@section('admin_content')
<div class="row">
            <div class="col-lg-12">
                    <section class="panel">
                        <header class="panel-heading">
                           Nhập điểm học viên
                        </header>
                        <div class="panel-body">
                            <div class="position-center">
                                <form role="form" action="{{URL::to('luu-nhap-diem')}}" method="POST" enctype="multipart/form-data">
                                    @csrf()
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Tên học viên</label>
                                  <input type="text" class="form-control" name="TenHocVien" value="{{$hoc_vien->TenHocVien}}">
                                </div>
                                  <div class="form-group">
                                    <label for="exampleInputEmail1">Mã học viên</label>
                                  <input type="text" class="form-control" name="MaHocVien" value="{{$hoc_vien->MaHocVien}}">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Mã lớp</label>
                                  <input type="text" class="form-control" name="MaLop" value="{{$hoc_vien->Lop}}" >
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Điểm giữa kì</label>
                                    <input type="text" class="form-control" name="GK">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Điểm thực hành</label>
                                    <input type="text" class="form-control" name="TH" value="" placeholder="Nhập điểm">
                                </div>
                                 <div class="form-group">
                                    <label for="exampleInputEmail1">Điểm cuối kì</label>
                                    <input type="text" class="form-control" name="CK" value="">
                                </div>
                                <button type="submit" name="luu_nhap_diem" class="btn btn-info">Lưu</button>
                            </form>
                            </div>

                        </div>
                    </section>
            </div>        
</div>
@endsection