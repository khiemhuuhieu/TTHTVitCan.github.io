@extends('welcome')
@section('content')
<style>
img {
padding: 15px;
transform: scale(1);
transition: all 0.5s;
}
img:hover {
transform: scale(1.06);
}
.text-center h4{
    border-top: 1px solid #E6E6E6;
}
.text-center:hover h4{
    color:#0000;
}
</style>
<div class="features_items">
      <h2 class="title text-center" style="font-size:1.8em;">{{$meta_title}}</h2>
                            <div class="product-image-wrapper">
                              @foreach($news_post as $key=>$val)
                                 <div class="single-products" style="margin: 10px">
                                        <div class="text-center">
                                         <a href="{{url('/bai-viet/'.$val->news_post_slug)}}">  
                                        <img style="float: left;width: 30%;padding-top:35px;" src="{{URL::to('public/uploads/post/'.$val->news_post_image)}}" alt="{{$val->news_post_slug}}" />
                                        <h4 style="color: #1C1C1C;padding:5px;text-align:left; padding-top:30px;">{{$val->news_post_title}}</h4>
                                            <h5 style="text-align:left;">{!!$val->news_post_desc!!}</h5>
                                        </a>
                                        <div class="text-right">
                                       <a href="{{URL::to('/bai-viet/'.$val->news_post_slug)}}" class="btn btn-warning btn-sm">Xem tiếp</a>
                                        </div>
                                        </div>
                                </div>
                                <div class="clearfix"></div>
                                 @endforeach  
                            </div>                                                  
</div>
<div class="col-sm-12">
   <ul class="pagination pagination-sm m-t-none m-b-none ">
      {!!$news_post->render()!!}
  </ul>
</div>
@endsection