@extends('admin_layout')
@section('admin_content')
<div class="row">
            <div class="col-lg-12">
                    <section class="panel">
                        <header class="panel-heading">
                            Thêm ngôn ngữ lập trình và phần mềm
                        </header>
                        <div class="panel-body">
                            <div class="position-center">
                                <form role="form" action="{{URL::to('save_language')}}" method="POST">
                                    @csrf()
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Tên ngôn ngữ hoặc phầm mềm</label>
                                    <input type="text" class="form-control" name="language_name" placeholder="Nhập ngôn ngữ hoặc phần mềm..">
                                      @if($errors->has('language_name'))
                                    <span style="color: red">
                                    {{$errors->first('language_name')}}
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Mô tả ngôn ngữ lập trình hoặc phần mềm</label>
                                    <textarea style="resize: none;" rows="6" class="form-control" name="language_desc"  placeholder="Mô tả ngôn ngữ lập trình hoặc phần mềm"></textarea>
                                      @if($errors->has('language_desc'))
                                    <span style="color: red">
                                    {{$errors->first('language_desc')}}
                                    @endif
                                </div>
                                 <div class="form-group">
                                    <label for="exampleInputPassword1">Từ khóa ngôn ngữ lập trình hoặc phần mềm</label>
                                    <textarea style="resize: none;" rows="5" class="form-control" name="language_keywords" placeholder="Từ khóa ngôn ngữ lập trình hoặc phần mềm"></textarea>
                                      @if($errors->has('language_keywords'))
                                    <span style="color: red">
                                    {{$errors->first('language_keywords')}}
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputOption">Ẩn hiện</label>
                                   <select name="language_status" class="form-control input-sm m-bot15">
                                       <option value="0">Ẩn</option>
                                       <option value="1">Hiện</option>
                                   </select>
                                </div>
                                <button type="submit" name="add_language" class="btn btn-info">Thêm</button>
                            </form>
                            </div>

                        </div>
                    </section>
            </div>        
</div>
@endsection