@extends('admin_layout')
@section('admin_content')
<div class="row">
            <div class="col-lg-12">
                    <section class="panel">
                        <header class="panel-heading">
                             Sửa tin tức
                        </header>
                        <div class="panel-body">
                            <div class="position-center">
                              @foreach($edit_news_post as $key=>$val)
                                <form role="form" action="{{URL::to('cap-nhat-tin-tuc/'.$val->news_post_id)}}" method="POST" enctype="multipart/form-data">
                                    @csrf()
                                <div class="form-group">
                                    <label for="post_title">Tiêu đề bài viết</label>
                            <input type="text" class="form-control" name="news_post_title" id="slug" onkeyup="ChangeToSlug();" value="{{$val->news_post_title}}" placeholder="Nhập tiêu đề bài viêt..">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Slug</label>
                                    <input type="text" class="form-control" name="news_post_slug" id="convert_slug" placeholder="Slug" value="{{$val->news_post_slug}}">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Mô tả ngắn</label>
                                    <textarea style="resize: none;" rows="6" class="form-control" name="news_post_desc" id="ckeditor1" placeholder="Mô tả ngắn">{{$val->news_post_desc}}</textarea>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Nội dung bài viết</label>
                                    <textarea style="resize: none;" rows="6" class="form-control" name="news_post_content" id="ckeditor2" placeholder="Nội dung bài viết">{{$val->news_post_content}}</textarea>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Meta SEO nội dung</label>
                                    <textarea style="resize: none;" rows="2" class="form-control" name="news_post_meta" id="exampleInputEmail1" placeholder="Meta nội dung">{{$val->news_post_meta}}</textarea>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Meta SEO từ khóa</label>
                                    <textarea style="resize: none;" rows="2" class="form-control" name="news_post_keyword" id="exampleInputEmail1" placeholder="Meta từ khóa">{{$val->news_post_keyword}}</textarea>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Hình đại diện</label>
                                   <input type="file" class="form-control" name="news_post_image" placeholder="Chọn file ảnh">
                                   <img src="{{URL::to('public/uploads/post/'.$val->news_post_image)}}" width="50px" height="50px">
                                </div>
                                 <div class="form-group">
                                    <label for="exampleInputOption">Danh mục bài viết</label>
                                   <select name="news_cate_id" class="form-control input-sm m-bot15">
                                    @foreach($cate_post as $key=>$value)
                                       <option value="{{$value->news_cate_id}}">{{$value->news_cate_name}}</option>
                                    @endforeach   
                                   </select>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputOption">Ẩn hiện</label>
                                   <select name="news_post_status" class="form-control input-sm m-bot15">
                                       <option value="0">Ẩn</option>
                                       <option value="1">Hiện</option>
                                   </select>
                                </div>
                                <button type="submit" name="add_news_post" class="btn btn-info">Cập nhật</button>
                            </form>
                            @endforeach
                            </div>

                        </div>
                    </section>
            </div>        
</div>
@endsection