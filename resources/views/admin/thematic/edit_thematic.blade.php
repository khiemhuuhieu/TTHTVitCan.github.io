@extends('admin_layout')
@section('admin_content')
<div class="row">
            <div class="col-lg-12">
                    <section class="panel">
                        <header class="panel-heading">
                            Sửa chuyên đề
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
                               @foreach($edit_thematic as $key => $thematic)
                                <form role="form" action="{{URL::to('update_thematic/'.$thematic->thematic_id)}}" method="POST">
                                    @csrf()
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Tên chuyên đề</label>
                                    <input type="text" class="form-control" value="{{$thematic->thematic_name}}" name="thematic_name" id="exampleInputEmail1" placeholder="Nhập chuyên đề..">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Mô tả chuyên đề</label>
                                    <textarea style="resize: none;" rows="6"  class="form-control" name="thematic_desc" id="exampleInputEmail1" placeholder="Mô tả chuyên đề">{{$thematic->thematic_desc}}</textarea>
                                </div>
                                <button type="submit" name="update_thematic" class="btn btn-info">Cập nhật chuyên đề</button>
                            </form>
                            @endforeach
                            </div>

                        </div>
                    </section>
            </div>        
</div>
@endsection