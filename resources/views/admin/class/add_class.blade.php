@extends('admin_layout')
@section('admin_content')
<div class="row">
            <div class="col-lg-12">
                    <section class="panel">
                        <header class="panel-heading">
                            Đăng kí mở lớp mới
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
                                <form role="form" action="{{URL::to('save_class')}}" method="POST" enctype="multipart/form-data">
                                    @csrf()
                                <div class="form-group">
                                    <label for="exampleInputOption">Lớp học</label>
                                   <select name="class_name" class="form-control input-sm m-bot15">
                                        @foreach($lop_hoc as $key => $lp)
                                         <option value="{{$lp->TenLop}}">{{$lp->TenLop}}</option>
                                       @endforeach 
                                   </select>
                                </div>
                                 <div class="form-group">
                                    <label for="exampleInputOption">Mã lớp</label>
                                   <select name="class_code" class="form-control input-sm m-bot15">
                                        @foreach($lop_hoc as $key => $lp)
                                         <option value="{{$lp->MaLop}}">{{$lp->MaLop}}-{{$lp->TenLop}}</option>
                                       @endforeach 
                                   </select>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputOption">Chuyên đề</label>
                                   <select name="class_thematic" class="form-control input-sm m-bot15">
                                    @foreach($thematic as $key=>$val)
                                       <option value="{{$val->thematic_id}}">{{$val->thematic_name}}</option>
                                    @endforeach   
                                   </select>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputOption">Ngôn ngữ và phần mềm</label>
                                   <select name="class_language" class="form-control input-sm m-bot15">
                                        @foreach($language as $key => $language_val)
                                         <option value="{{$language_val->language_id}}">{{$language_val->language_name}}</option>
                                       @endforeach 
                                   </select>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Ngày khai giảng</label>
                                    <input type="date" class="form-control" name="opending_day" id="exampleInputEmail1" placeholder="Nhập ngày khai giảng..">
                                    @if($errors->has('opending_day'))
                                     <span style="color: red">
                                    {{$errors->first('opending_day')}}
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Thời khóa biểu</label>
                                    <input type="text" class="form-control" name="schedule_day" id="exampleInputEmail1" placeholder="Nhập thời khóa biểu..">
                                      @if($errors->has('schedule_day'))
                                     <span style="color: red">
                                    {{$errors->first('schedule_day')}}
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Thời lượng học</label>
                                    <input type="float" class="form-control" name="study_time" id="exampleInputEmail1" placeholder="Nhập thời lượng học..">
                                      @if($errors->has('study_time'))
                                     <span style="color: red">
                                    {{$errors->first('study_time')}}
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Học phí</label>
                                    <input type="text" class="form-control" name="tuition" id="exampleInputEmail1" placeholder="Nhập học phí..">
                                      @if($errors->has('tuition'))
                                     <span style="color: red">
                                    {{$errors->first('tuition')}}
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Địa điểm học</label>
                                    <input type="text" class="form-control" name="address_class" id="exampleInputEmail1" placeholder="Nhập địa điểm học">
                                      @if($errors->has('address_class'))
                                     <span style="color: red">
                                    {{$errors->first('address_class')}}
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Số lượng học viên</label>
                                    <input type="number" class="form-control" name="student_number" id="exampleInputEmail1" placeholder="Nhập số lượng học viên">
                                      @if($errors->has('student_number'))
                                     <span style="color: red">
                                    {{$errors->first('student_number')}}
                                    @endif
                                </div>
                                 <div class="form-group">
                                    <label for="exampleInputPassword1">Sỉ số hiện tại</label>
                                    <input type="text" class="form-control" name="student_sold" id="exampleInputEmail1" placeholder="Sỉ số hiện tại">
                                      @if($errors->has('student_sold'))
                                     <span style="color: red">
                                    {{$errors->first('student_sold')}}
                                    @endif
                                </div>
                                 <div class="form-group">
                                    <label for="exampleInputOption">Tình Trạng</label>
                                   <select name="TinhTrang" class="form-control input-sm m-bot15">
                                       <option value="0">Dự kiến</option>
                                        <option value="1">Đang học</option>
                                   </select>
                                </div>
                                 <div class="form-group">
                                    <label for="exampleInputCategory">Ảnh đại diện lớp học</label>
                                    <input type="file" class="form-control" name="class_image" id="exampleInputCategory">
                                      @if($errors->has('class_image'))
                                     <span style="color: red">
                                    {{$errors->first('class_image')}}
                                    @endif
                                </div>
                                  <div class="form-group">
                                    <label for="exampleInputPassword1">Mô tả chi tiết</label>
                                     <textarea style="resize: none;" rows="6" class="form-control" id="ckeditor" name="class_desc" id="exampleInputEmail1"></textarea>
                                       @if($errors->has('class_desc'))
                                     <span style="color: red">
                                    {{$errors->first('class_desc')}}
                                    @endif
                                </div>
                                
                              <button type="submit" name="add_class" class="btn btn-info">Mở lớp</button>
                            </form>
                            </div>

                        </div>
                    </section>
            </div>        
</div>
@endsection