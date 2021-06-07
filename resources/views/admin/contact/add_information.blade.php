@extends('admin_layout')
@section('admin_content')
<div class="row">
            <div class="col-lg-12">
                    <section class="panel">
                        <header class="panel-heading">
                            Thông tin liên hệ
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
                                <form role="form" action="{{URL::to('save_information')}}" method="POST">
                                    @csrf()
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Thông tin liên hệ</label>
                                   <textarea style="resize: none;" rows="6" class="form-control" name="info_contact" id="ckeditor" ></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Bản đồ</label>
                                    <textarea style="resize: none;" rows="6" class="form-control" name="info_map" id="exampleInputEmail1" ></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Fanpage</label>
                                    <textarea style="resize: none;" rows="6" class="form-control" name="info_fanpage" id="exampleInputEmail1" placeholder="Mô tả chuyên đề"></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Hình ảnh</label>
                                    <input type="file" name="info_image"  class="form-control" id="exampleInputEmail1">
                                </div>
                                <button type="submit" name="add_information" class="btn btn-info">Thêm</button>
                            </form>
                            </div>

                        </div>
                    </section>
            </div>        
</div>
@endsection