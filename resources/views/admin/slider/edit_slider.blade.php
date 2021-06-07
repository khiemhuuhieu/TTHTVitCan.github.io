@extends('admin_layout')
@section('admin_content')
 <div class="row">
            <div class="col-lg-12">
                    <section class="panel">
                        <header class="panel-heading">
                            Sửa banner
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
                              @foreach($edit_slider as $key =>$slider)
                                <form role="form" action="{{URL::to('/update_slider/'.$slider->slider_id)}}" method="post" enctype="multipart/form-data">
                                    {{ csrf_field() }}
                                <div class="form-group">
                                    <label for="exampleInputCategory">Tên banner</label>
                                    <input type="text" class="form-control" name="slider_name" id="exampleInputCategory" value="{{($slider->slider_name)}}">
                                </div>
                                 <div class="form-group">
                                    <label for="exampleInputCategory">Hình ảnh sản phẩm</label>
                                    <input type="file" class="form-control" name="slider_image" id="exampleInputCategory">
                                    <img src="{{URL::to('public/uploads/slider/'.$slider->slider_image)}}" width="100" height="100">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputDesc">Nội dung sản phẩm</label>
                                   <textarea class="form-control" style="resize: none;" rows="5" id="exampleInputDesc" name="slider_desc">{{($slider->slider_desc)}}</textarea>
                                </div>
                                <button type="submit" class="btn btn-info" name="update_slider">Cập nhật banner</button>
                            </form>
                            @endforeach
                            </div>

                        </div>
                    </section>

            </div>
            </div>  
@endsection                        