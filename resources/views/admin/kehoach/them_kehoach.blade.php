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
                                <form role="form" action="{{URL::to('luu-them-ke-hoach')}}" method="POST" enctype="multipart/form-data">
                                    @csrf()
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Tên kế hoạch</label>
                                    <input type="text" class="form-control" name="TenKeHoach" id="slug" onkeyup="ChangeToSlug();" placeholder="Nhập tên kế hoạch..">
                                      @if($errors->has('TenKeHoach'))
                                   <span style="color: red">
                                    {{$errors->first('TenKeHoach')}}
                                   @endif
                                </div>
                                 <div class="form-group">
                                    <label for="exampleInputCategory">Slug</label>
                                    <input type="text" class="form-control" name="Slug" id="convert_slug" placeholder="Slug">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">File đính kèm</label>
                                    <input type="file" class="form-control" name="File" id="exampleInputEmail1" placeholder="Chọn file đính kèm..">
                                       @if($errors->has('File'))
                                   <span style="color: red">
                                    {{$errors->first('File')}}
                                   @endif
                                </div>                
                            <button type="submit" name="add_class" class="btn btn-info">Tạo</button>
                            </form>
                            </div>

                        </div>
                    </section>
            </div>        
</div>
@endsection