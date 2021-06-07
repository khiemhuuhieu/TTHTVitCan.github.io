@extends('admin_layout')
@section('admin_content')
<div class="row">
            <div class="col-lg-12">
                    <section class="panel">
                        <header class="panel-heading">
                            Chỉnh sửa danh mục tin tức
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
                                @foreach($edit_news_cate as $key=>$val)
                                <form role="form" action="{{URL::to('update-news-cate/'.$val->news_cate_id)}}" method="POST">
                                    @csrf()
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Tên danh mục</label>
                            <input type="text" class="form-control" value="{{$val->news_cate_name}}" name="news_cate_name" id="slug" onkeyup="ChangeToSlug();">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Slug</label>
                                    <input type="text" class="form-control" value="{{$val->news_cate_slug}}" name="news_cate_slug" id="convert_slug">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Mô tả chuyên đề</label>
                                    <textarea style="resize: none;" rows="6" class="form-control" name="news_cate_desc" id="exampleInputEmail1" >{{$val->news_cate_desc}}</textarea>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputOption">Ẩn hiện</label>
                                   <select name="news_cate_status" class="form-control input-sm m-bot15">
                                    @if($val->news_cate_status==0)
                                       <option selected value="0">Ẩn</option>
                                       <option value="1">Hiện</option>
                                    @else
                                       <option value="0">Ẩn</option>
                                       <option selected value="1">Hiện</option>
                                    @endif
                                   </select>
                                </div>
                                <button type="submit" name="update_news_cate" class="btn btn-info">Sửa</button>
                            </form>
                            @endforeach
                            </div>

                        </div>
                    </section>
            </div>        
</div>
@endsection