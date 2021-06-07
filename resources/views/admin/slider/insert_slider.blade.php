@extends('admin_layout')
@section('admin_content')
 <div class="row">
            <div class="col-lg-12">
                    <section class="panel">
                        <header class="panel-heading">
                            Thêm banner khóa học
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
                                <form role="form" action="{{URL::to('/insert_slider')}}" method="post" enctype="multipart/form-data">
                                    {{ csrf_field() }}
                                <div class="form-group">
                                    <label for="exampleInputBrand">Tên banner</label>
                                    <input type="text" class="form-control" name="slider_name" id="exampleInputCategory" placeholder="Điền tên banner..">
                                </div>
                               <div class="form-group">
                                    <label for="exampleInputCategory">Hình ảnh banner</label>
                                    <input type="file" class="form-control" name="slider_image" id="exampleInputCategory">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputDesc">Mô tả</label>
                                   <textarea class="form-control" id="exampleInputDesc" name="slider_desc"></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputOption">Ẩn hiện</label>
                                   <select name="slider_status" class="form-control input-sm m-bot15">
                                       <option value="0">Ẩn</option>
                                       <option value="1">Hiện</option>
                                   </select>
                                </div>
                                <button type="submit" class="btn btn-info" name="add-slider">Thêm banner</button>
                            </form>
                            </div>

                        </div>
                    </section>

            </div>
            </div>  
@endsection                        