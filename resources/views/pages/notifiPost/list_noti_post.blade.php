@extends('welcome')
@section('content')
<style>
.text-center p{
    text-align:left;
    font-size:1.2em;
  
}
.text-center a{
    color:black;
}
.none{
    border-top: 1px solid #D8D8D8;
}

.text-center:hover h3{
color:#585858;
}
</style>
<div class="features_items">
      <h2 class="title text-center" style="font-size:1.8em;">{{$meta_title}}</h2>
                            <div class="product-image-wrapper">
                                @foreach($noti_post as $key=>$val)
                                 <div class="single-products" style="margin: 10px">
                                        <div class="text-center none">
                                         <a href="{{url('/bai-viet-thong-bao/'.$val->noti_post_slug)}}">
                                        <h4 style=" margin-right: 300px ;text-align:left; ">{{$val->noti_post_title}}</h4>
                                        </a> 
                                            <p>{!!$val->noti_post_desc!!}</p>
                                           
                                        <div class="text-right">
                                       <a href="{{URL::to('/bai-viet-thong-bao/'.$val->noti_post_slug)}}" class="btn btn-warning btn-sm">Xem tiếp</a>
                                        </div>
                                        </div>
                                </div>
                                <div class="clearfix"></div>
                                 @endforeach  
                            </div>                                                  
</div>
@endsection