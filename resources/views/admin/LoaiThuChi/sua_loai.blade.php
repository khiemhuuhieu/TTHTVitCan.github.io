@extends('admin_layout')
@section('admin_content')
<div class="row">
            <div class="col-lg-12">
                    <section class="panel">
                        <header class="panel-heading">
                            Sửa loại thu chi
                        </header>
                        <div class="panel-body">
                            <div class="position-center">
                              @foreach($edit_loaiThuchi as $key=>$value)
                                <form role="form" action="{{URL::to('cap-nhat-loai-thu-chi/'.$value->Loai_id)}}" method="POST" enctype="multipart/form-data">
                                    @csrf()
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Loại</label>
                                    <input type="text" class="form-control" name="Loai"placeholder="Nhập loại" value="{{$value->Loai}}">
                                      @if($errors->has('Loai'))
                                    <span style="color: red">
                                    {{$errors->first('Loai')}}
                                     @endif
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Nhập tên loại</label>
                                    <input type="text" class="form-control" name="TenLoai" id="exampleInputEmail1" placeholder="Nhập tên loại.." value="{{$value->TenLoai}}">
                                        @if($errors->has('TenLoai'))
                                    <span style="color: red">
                                    {{$errors->first('TenLoai')}}
                                     @endif
                                </div>
                                <button type="submit" name="add_LoaiThuChi" class="btn btn-info">Cập nhật</button>
                            </form>
                            @endforeach
                            </div>

                        </div>
                    </section>
            </div>        
</div>
@endsection