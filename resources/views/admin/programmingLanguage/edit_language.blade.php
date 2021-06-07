@extends('admin_layout')
@section('admin_content')
<div class="row">
            <div class="col-lg-12">
                    <section class="panel">
                        <header class="panel-heading">
                            Sửa ngôn ngữ lập trình hoặc phần mềm
                        </header>
                         <?php
                            $message=Session::get('message');
                             if($message){
                              echo '<span style="color:red;width:100%;text-align: center;font-size:16px">'.$message.'</span>';
                              Session::get('message',null);
                        }
                        ?>
                        <div class="panel-body">
                            <div class="position-center">
                               @foreach($edit_language as $key => $language)
                                <form role="form" action="{{URL::to('update_language/'.$language->language_id)}}" method="POST">
                                    @csrf()
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Tên ngôn ngữ lập trình hoặc phần mềm</label>
                                    <input type="text" class="form-control" value="{{$language->language_name}}" name="language_name" id="exampleInputEmail1" placeholder="Nhập ngôn ngữ lập trình hoặc phần mềm..">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Mô tả ngôn ngữ lập trình hoặc phần mềm</label>
                                    <textarea style="resize: none;" rows="6"  class="form-control" name="language_desc" id="exampleInputEmail1">{{$language->language_desc}}</textarea>
                                </div>
                                 <div class="form-group">
                                    <label for="exampleInputPassword1">Từ khóa</label>
                                    <textarea style="resize: none;" rows="6"  class="form-control" name="language_keywords" id="exampleInputEmail1">{{$language->language_keywords}}</textarea>
                                </div>
                                <button type="submit" name="update_language" class="btn btn-info">Cập nhật ngôn ngữ hoặc phần mềm</button>
                            </form>
                            @endforeach
                            </div>

                        </div>
                    </section>
            </div>        
</div>
@endsection