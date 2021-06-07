@extends('admin_layout')
@section('admin_content')
<div class="row">
            <div class="col-lg-12">
                    <section class="panel">
                        <header class="panel-heading">
                            Viết thông báo
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
                            	@foreach($edit_noti as $key=>$val)
                              <form role="form" action="{{URL::to('cap-nhat-thong-bao/'.$val->noti_post_id)}}" method="POST" enctype="multipart/form-data">
                                    @csrf()
                                <div class="form-group">
                                    <label for="post_title">Tiêu đề thông báo</label>
                            <input type="text" class="form-control" name="noti_post_title" value="{{$val->noti_post_title}}" id="slug" onkeyup="ChangeToSlug();" placeholder="Nhập tiêu đề thông báo..">
                              @if($errors->has('noti_post_title'))
                                    <span style="color: red">
                                    {{$errors->first('noti_post_title')}}
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Slug</label>
                                    <input type="text" class="form-control" value="{{$val->noti_post_slug}}" name="noti_post_slug" id="convert_slug" placeholder="Slug">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Mô tả ngắn</label>
                                    <textarea style="resize: none;" rows="6" class="form-control" name="noti_post_desc" id="ckeditor1" placeholder="Mô tả ngắn">{{$val->noti_post_desc}}</textarea>
                                     @if($errors->has('noti_post_desc'))
                                    <span style="color: red">
                                    {{$errors->first('noti_post_desc')}}
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Chọn file</label>
                                   <input type="file" class="form-control" name="noti_post_document" placeholder="Chọn file">
                                      @if($val->noti_post_document)
                                   <p>
                                     <a href="{{URL::to('public/uploads/document/'.$val->noti_post_document)}}">{{$val->noti_post_document}}</a>
                                     <button type="button" data-document_id="{{$val->noti_post_id}}" class="btn btn-sm btn-danger delete-document"><i class="fa fa-times"></i></button>
                                   </p>
                                   @else
                                   <p>Không có file</p>
                                   @endif
                                </div>
                                 <div class="form-group">
                                    <label for="exampleInputOption">Danh mục thông báo</label>
                                   <select name="noti_cate_id" class="form-control input-sm m-bot15">
                                    @foreach($noti_cate as $key=>$val)
                                       <option value="{{$val->noti_cate_id}}">{{$val->noti_cate_name}}</option>
                                    @endforeach   
                                   </select>
                                </div>
                                <button type="submit" name="cap_nhat_thong_bao" class="btn btn-info">Cập nhật</button>
                            </form>
                            @endforeach
                            </div>

                        </div>
                    </section>
            </div>        
</div>
@endsection