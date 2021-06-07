@extends('admin_layout')
@section('admin_content')
<div class="row">
            <div class="col-lg-12">
                    <section class="panel">
                        <header class="panel-heading">
                            Lên kế hoạch 
                        </header>
                        <div class="panel-body">
                            <div class="position-center">
                              @foreach($sua as $key=>$val)
                                <form role="form" action="{{URL::to('cap-nhat-sua-ks/'.$val->id)}}" method="POST" enctype="multipart/form-data">
                                    @csrf()
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Tên kế hoạch</label>
                                    <input type="text" class="form-control" name="TenKeHoach" id="slug" onkeyup="ChangeToSlug();" value="{{$val->TenKeHoach}}" placeholder="Nhập tên kế hoạch..">
                                      @if($errors->has('TenKeHoach'))
                                   <span style="color: red">
                                    {{$errors->first('TenKeHoach')}}
                                   @endif
                                </div>
                                 <div class="form-group">
                                    <label for="exampleInputCategory">Slug</label>
                                    <input type="text" class="form-control" value="{{$val->Slug}}" name="Slug" id="convert_slug" placeholder="Slug">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">File đính kèm</label>
                                    <input type="file" class="form-control" name="File" id="exampleInputEmail1" placeholder="Chọn file đính kèm..">
                                     @if($val->File)
                                   <p>
                                     <a href="{{URL::to('public/uploads/document/'.$val->File)}}">{{$val->File}}</a>
                                     <button type="button" data-document_id="{{$val->id}}" class="btn btn-sm btn-danger delete-document-ks"><i class="fa fa-times"></i></button>
                                   </p>
                                   @else
                                   <p>Không có file</p>
                                   @endif

                                    @if($errors->has('File'))
                                   <span style="color: red">
                                    {{$errors->first('File')}}
                                   @endif
                                </div>                 
                            <button type="submit" name="add_class" class="btn btn-info">Cập nhật</button>
                            </form>
                            @endforeach
                            </div>

                        </div>
                    </section>
            </div>        
</div>
@endsection