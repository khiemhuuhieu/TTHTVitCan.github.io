@extends('welcome')
@section('slider')
@include('pages.include.slider')
@endsection
@section('content')
 <div class="features_items">
                        <h2 class="title text-center">Khóa học mới nhất</h2>
                        @foreach($all_class as $key => $val_class)
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
                                             <input  type="button" class="btn btn-default add-to-cart" name="add-to-cart" data-id_class="{{$val_class->class_id}}" value="Đăng kí học">
                                        </div>
                                </div>
                            </div>
                        </div>
                        @endforeach                                             
</div>
<div class="col-sm-12">
   <ul style="margin-left: 600px" class="pagination pagination-sm m-t-none m-b-none ">
      {!!$all_class->render()!!}
  </ul>
</div>
@section('teacher')
@include('pages.include.teacher')
@endsection
@section('thanhtua')
@include('pages.include.thanhtua')
@endsection
@endsection