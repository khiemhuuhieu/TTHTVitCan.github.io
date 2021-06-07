@extends('admin_layout')
@section('admin_content')
<div class="row">
            <div class="col-lg-12">
                    <section class="panel">
                        <header class="panel-heading">
                            Thêm chức vụ
                        </header>
                        <div class="panel-body">
                            <div class="position-center">
                                <form role="form" action="{{URL::to('save_position')}}" method="POST" enctype="multipart/form-data">
                                    @csrf()
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Nhập tên chức vụ</label>
                                    <input type="text" class="form-control" name="position_name" id="exampleInputEmail1" placeholder="Nhập chức danh..">
                                    @if($errors->has('position_name'))
                                    <span style="color: red">
                                    {{$errors->first('position_name')}}
                                     @endif
                                </div>
                                <button type="submit" name="add_position" class="btn btn-info">Thêm</button>
                            </form>
                            </div>

                        </div>
                    </section>
            </div>        
</div>
@endsection