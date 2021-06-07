@extends('admin_layout')
@section('admin_content')
<div class="row">
            <div class="col-lg-12">
                    <section class="panel">
                        <header class="panel-heading">
                            Sửa lớp học
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
                               @foreach($edit_class as $key => $class)
                                <form role="form" action="{{URL::to('update_class/'.$class->class_id)}}" method="POST" enctype="multipart/form-data">
                                    @csrf()
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Tên lớp</label>
                                    <input type="text" class="form-control" value="{{$class->class_name}}" name="class_name" id="exampleInputEmail1" readonly>
                                </div>
                                 <div class="form-group">
                                    <label for="exampleInputEmail1">Mã Lớp</label>
                                    <input type="text" class="form-control" value="{{$class->class_code}}" name="class_code" id="exampleInputEmail1" readonly>
                                </div>
                                  <div class="form-group">
                                   <label for="exampleInputOption">Chuyên đề</label>
                                   <select name="thematic_name" class="form-control input-sm m-bot15">
                                       @foreach($thematic as $key => $thematic_val)

                                       @if($thematic_val->thematic_id == $class->thematic_id)
                                          <option selected value="{{($thematic_val->thematic_id)}}">{{($thematic_val->thematic_name)}}</option>
                                       @else
                                       <option value="{{($thematic_val->thematic_id)}}">{{($thematic_val->thematic_name)}}</option>
                                       @endif

                                       @endforeach
                                   </select>
                                </div>
                                 <div class="form-group">
                                   <label for="exampleInputOption">Ngôn ngữ</label>
                                   <select name="language_name" class="form-control input-sm m-bot15">
                                       @foreach($language as $key => $language_val)

                                       @if($language_val->language_id == $class->language_id)
                                          <option selected value="{{($language_val->language_id)}}">{{($language_val->language_name)}}</option>
                                       @else
                                       <option value="{{($language_val->language_id)}}">{{($language_val->language_name)}}</option>
                                       @endif
                                       @endforeach
                                   </select>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Ngày khai giảng</label>
                                    <input type="date" class="form-control" value="{{$class->opending_day}}" name="opending_day" id="exampleInputEmail1">
                                      @if($errors->has('opending_day'))
                                     <span style="color: red">
                                    {{$errors->first('opending_day')}}
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Thời khóa biểu</label>
                                    <input type="text" class="form-control" value="{{$class->schedule_day}}" name="schedule_day" id="exampleInputEmail1">
                                      @if($errors->has('schedule_day'))
                                     <span style="color: red">
                                    {{$errors->first('schedule_day')}}
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Thời lượng học</label>
                                    <input type="text" class="form-control" value="{{$class->study_time}}" name="study_time" id="exampleInputEmail1">
                                      @if($errors->has('study_time'))
                                     <span style="color: red">
                                    {{$errors->first('study_time')}}
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Học phí</label>
                                    <input type="text" class="form-control" value="{{$class->tuition}}" name="tuition" id="exampleInputEmail1">
                                      @if($errors->has('tuition'))
                                     <span style="color: red">
                                    {{$errors->first('tuition')}}
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Địa điểm học</label>
                                    <input type="text" class="form-control" value="{{$class->address_class}}" name="address_class" id="exampleInputEmail1">
                                      @if($errors->has('address_class'))
                                     <span style="color: red">
                                    {{$errors->first('address_class')}}
                                    @endif
                                </div>
                                 <div class="form-group">
                                    <label for="exampleInputEmail1">Số lượng học viên</label>
                                    <input type="number" class="form-control" value="{{$class->student_number}}" name="student_number" id="exampleInputEmail1">
                                      @if($errors->has('student_number'))
                                     <span style="color: red">
                                    {{$errors->first('student_number')}}
                                    @endif
                                </div>
                                 <div class="form-group">
                                    <label for="exampleInputEmail1">Hình ảnh</label>
                                    <input type="file" class="form-control" name="class_image" id="exampleInputCategory">
                                    <img src="{{URL::to('public/uploads/product/'.$class->class_image)}}" width="100" height="100">
                                </div>
                                 <div class="form-group">
                                    <label for="exampleInputPassword1">Mô tả chi tiết khóa học</label>
                                    <textarea style="resize: none;" rows="6"   class="form-control" name="class_desc" id="ckeditor1" id="exampleInputEmail1">{{$class->class_desc}}</textarea>
              
                                </div>
                                <button type="submit" name="update_class" class="btn btn-info">Cập nhật lớp</button>
                            </form>
                            @endforeach
                            </div>

                        </div>
                    </section>
            </div>        
</div>
@endsection