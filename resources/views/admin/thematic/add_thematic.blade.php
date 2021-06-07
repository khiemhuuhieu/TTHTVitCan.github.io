@extends('admin_layout')
@section('admin_content')
<div class="row">
            <div class="col-lg-12">
                    <section class="panel">
                        <header class="panel-heading">
                            Thêm chuyên đề
                        </header>
                        <div class="panel-body">
                            <div class="position-center">
                                <form role="form" action="{{URL::to('save_thematic')}}" method="POST">
                                    @csrf()
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Tên chuyên đề</label>
                                    <input type="text"  class="form-control" name="thematic_name" id="exampleInputEmail1" placeholder="Nhập chuyên đề..">
                                     @if($errors->has('thematic_name'))
                                    <span style="color: red">
                                    {{$errors->first('thematic_name')}}
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Mô tả chuyên đề</label>
                                    <textarea style="resize: none;" rows="6" class="form-control" name="thematic_desc" id="exampleInputEmail1" placeholder="Mô tả chuyên đề"></textarea>
                                     @if($errors->has('thematic_desc'))
                                    <span style="color: red">
                                    {{$errors->first('thematic_desc')}}
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputOption">Ẩn hiện</label>
                                   <select name="thematic_status" class="form-control input-sm m-bot15">
                                       <option value="0">Ẩn</option>
                                       <option value="1">Hiện</option>
                                   </select>
                                </div>
                                <button type="submit" name="add_thematic" class="btn btn-info">Thêm chuyên đề</button>
                            </form>
                            </div>

                        </div>
                    </section>
            </div>        
</div>
@endsection