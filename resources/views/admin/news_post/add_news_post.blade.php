@extends('admin_layout')
@section('admin_content')
<div class="row">
            <div class="col-lg-12">
                    <section class="panel">
                        <header class="panel-heading">
                             viết tin tức
                        </header>
                        <div class="panel-body">
                            <div class="position-center">
                                <form role="form" action="{{URL::to('save-news-post')}}" method="POST" enctype="multipart/form-data">
                                    @csrf()
                                <div class="form-group">
                                    <label for="post_title">Tiêu đề bài viết</label>
                            <input type="text" class="form-control" name="news_post_name" id="slug" onkeyup="ChangeToSlug();" placeholder="Nhập tiêu đề bài viêt..">
                                    @if($errors->has('news_post_name'))
                                     <span style="color: red">
                                    {{$errors->first('news_post_name')}}
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Slug</label>
                                    <input type="text" class="form-control" name="news_post_slug" id="convert_slug" placeholder="Slug">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Mô tả ngắn</label>
                                    <textarea style="resize: none;" rows="6" class="form-control" name="news_post_desc" id="ckeditor1" placeholder="Mô tả ngắn"></textarea>
                                     @if($errors->has('news_post_desc'))
                                     <span style="color: red">
                                    {{$errors->first('news_post_desc')}}
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Nội dung bài viết</label>
                                    <textarea style="resize: none;" rows="6" class="form-control" name="news_post_content" id="ckeditor2" placeholder="Nội dung bài viết"></textarea>
                                     @if($errors->has('news_post_content'))
                                     <span style="color: red">
                                    {{$errors->first('news_post_content')}}
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Meta SEO nội dung</label>
                                    <textarea style="resize: none;" rows="2" class="form-control" name="news_post_meta" id="exampleInputEmail1" placeholder="Meta nội dung"></textarea>
                                     @if($errors->has('news_post_meta'))
                                     <span style="color: red">
                                    {{$errors->first('news_post_meta')}}
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Meta SEO từ khóa</label>
                                    <textarea style="resize: none;" rows="2" class="form-control" name="news_post_keyword" id="exampleInputEmail1" placeholder="Meta từ khóa"></textarea>
                                     @if($errors->has('news_post_keyword'))
                                     <span style="color: red">
                                    {{$errors->first('news_post_keyword')}}
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Hình đại diện</label>
                                   <input type="file" class="form-control" name="news_post_image" placeholder="Chọn file ảnh">
                                    @if($errors->has('news_post_image'))
                                     <span style="color: red">
                                    {{$errors->first('news_post_image')}}
                                    @endif
                                </div>
                                 <div class="form-group">
                                    <label for="exampleInputOption">Danh mục bài viết</label>
                                   <select name="news_cate_id" class="form-control input-sm m-bot15">
                                    @foreach($news_cate as $key=>$val)
                                       <option value="{{$val->news_cate_id}}">{{$val->news_cate_name}}</option>
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
                                <button type="submit" name="add_news_post" class="btn btn-info">Thêm</button>
                            </form>
                            </div>

                        </div>
                    </section>
            </div>        
</div>
@endsection