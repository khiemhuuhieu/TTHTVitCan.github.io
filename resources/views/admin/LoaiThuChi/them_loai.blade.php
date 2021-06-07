@extends('admin_layout')
@section('admin_content')
<div class="row">
            <div class="col-lg-12">
                    <section class="panel">
                        <header class="panel-heading">
                            Thêm loại thu chi
                        </header>
                        <div class="panel-body">
                            <div class="position-center">
                                <form role="form" action="{{URL::to('luu_loai_thu_chi')}}" method="POST" enctype="multipart/form-data">
                                    @csrf()
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Loại</label>
                                    <input type="text" class="form-control" name="Loai" id="exampleInputEmail1" placeholder="Nhập loại">
                                      @if($errors->has('Loai'))
                                    <span style="color: red">
                                    {{$errors->first('Loai')}}
                                     @endif
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Nhập tên loại</label>
                                    <input type="text" class="form-control" name="TenLoai" id="exampleInputEmail1" placeholder="Nhập tên loại..">
                                        @if($errors->has('TenLoai'))
                                    <span style="color: red">
                                    {{$errors->first('TenLoai')}}
                                     @endif
                                </div>
                                <button type="submit" name="add_LoaiThuChi" class="btn btn-info">Thêm</button>
                            </form>
                            </div>

                        </div>
                    </section>
            </div>        
</div>
@endsection