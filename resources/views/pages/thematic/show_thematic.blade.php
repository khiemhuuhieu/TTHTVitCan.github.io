@extends('welcome')
@section('content')
 <div class="features_items">
                       @foreach($thematic_name as $key => $thematic_name)
                        <h2 class="title text-center">{{$thematic_name->thematic_name}}</h2>
                        @endforeach
                        @foreach($thematic_by_id as $key => $val_class)
                        <div class="col-sm-4">
                            <div class="product-image-wrapper">
                                <div class="single-products">
                                        <div class="productinfo text-left">    
                                        <form> 
                                        @csrf()
                                          <input type="hidden" value="{{$val_class->class_id}}" class="cart_class_id_{{$val_class->class_id}}">
                                                <input type="hidden" value="{{$val_class->class_name}}" class="cart_class_name_{{$val_class->class_id}}">
                                                <input type="hidden" value="{{$val_class->class_image}}" class="cart_class_image_{{$val_class->class_id}}">
                                                <input type="hidden" value="{{$val_class->student_number}}" class="cart_class_student_number_{{$val_class->class_id}}">
                                                <input type="hidden" value="{{$val_class->tuition}}" class="cart_tuition_{{$val_class->class_id}}">
                                                <input type="hidden" value="1" class="cart_student_qty_{{$val_class->class_id}}">
                                          <a href="{{URL::to('/chi-tiet-khoa-hoc/'.$val_class->class_id)}}">                                    
                                            <img src="{{URL::to('public/uploads/product/'.$val_class->class_image)}}" alt="" />
                                            <h4>{{$val_class->class_name}}</h4>
                                            <p>Khai giảng: {{$val_class->opending_day}}</p>
                                            <p>Thời gian: {{$val_class->schedule_day}}</p>
                                            <p>Thời lượng: {{$val_class->study_time}} tháng</p>
                                            <p>Học phí :{{number_format($val_class->tuition).' '.'đ'}}</p>
                                            <p>Địa điểm học: {{$val_class->address_class}}</p>
                                        </a>
                                            </form>
                                            <button  type="button" class="btn btn-default add-to-cart" name="add-to-cart" data-id_class="{{$val_class->class_id}}">Đăng kí học</button>
                                        
                                        </div>
                                </div>
                            </div>
                        </div>
                        @endforeach                                             
</div>
@endsection