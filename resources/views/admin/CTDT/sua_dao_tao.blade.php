@extends('admin_layout')
@section('admin_content')
<div class="row">
            <div class="col-lg-12">
                    <section class="panel">
                        <header class="panel-heading">
                            Sửa bài viết về chương trình đào tạo
                        </header>
                        <div class="panel-body">
                            <div class="position-center">
                              @foreach($dao_tao as $key=>$val)
                                <form role="form" action="{{URL::to('cap-nhat-bai-viet-chuong-trinh-dao-tao/'.$val->id)}}" method="POST">
                                    @csrf()
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Tên bài viết</label>
                                    <input type="text"  class="form-control" id="slug" onkeyup="ChangeToSlug();" name="TenTieuDe"  placeholder="Nhập tên bài viết.." value="{{$val->TieuDe}}">
                                      @if($errors->has('TenTieuDe'))
                                    <span style="color: red">
                                    {{$errors->first('TenTieuDe')}}
                                    @endif
                                </div>
                                 <div class="form-group">
                                    <label for="exampleInputEmail1">Slug</label>
                                    <input type="text"  class="form-control" id="convert_slug"  name="Slug"  placeholder="Slug.." value="{{$val->Slug}}">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Mô tả chi tiết</label>
                                    <textarea style="resize: none;" rows="6" id="ckeditor3" class="form-control" name="ChiTiet" >{{$val->ChiTiet}}</textarea>
                                      @if($errors->has('ChiTiet'))
                                    <span style="color: red">
                                    {{$errors->first('ChiTiet')}}
                                    @endif
                                </div>
                                 <div class="form-group">
                                    <label for="exampleInputOption">Danh mục</label>
                                   <select name="danhmuc_id" class="form-control input-sm m-bot15">
                                    @foreach($thematic as $key=>$val)
                                       <option value="{{$val->thematic_id}}">{{$val->thematic_name}}</option>
                                    @endforeach
                                   </select>
                                </div>
                                <button type="submit" name="add_thematic" class="btn btn-info">Cập nhật</button>
                            </form>
                            @endforeach
                            </div>

                        </div>
                    </section>
            </div>        
</div>
@endsection