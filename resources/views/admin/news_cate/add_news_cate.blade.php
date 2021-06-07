@extends('admin_layout')
@section('admin_content')
<div class="row">
            <div class="col-lg-12">
                    <section class="panel">
                        <header class="panel-heading">
                            Thêm danh mục tin tức
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
                                <form role="form" action="{{URL::to('save-news-cate')}}" method="POST">
                                    @csrf()
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Tên danh mục</label>
                            <input type="text" class="form-control" name="news_cate_name" id="slug" onkeyup="ChangeToSlug();" placeholder="Nhập danh mục..">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Slug</label>
                                    <input type="text" class="form-control" name="news_cate_slug" id="convert_slug" placeholder="Slug">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Mô tả chuyên đề</label>
                                    <textarea style="resize: none;" rows="6" class="form-control" name="news_cate_desc" id="exampleInputEmail1" placeholder="Mô tả chuyên đề"></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputOption">Ẩn hiện</label>
                                   <select name="news_cate_status" class="form-control input-sm m-bot15">
                                       <option value="0">Ẩn</option>
                                       <option value="1">Hiện</option>
                                   </select>
                                </div>
                                <button type="submit" name="add_news_cate" class="btn btn-info">Thêm</button>
                            </form>
                            </div>

                        </div>
                    </section>
            </div>        
</div>
@endsection