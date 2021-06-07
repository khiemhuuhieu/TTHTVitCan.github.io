@extends('welcome')
@section('content')
<div class="features_items">
      <h2 style="margin: 0;position: inherit;" class="title text-center">{!!$meta_title!!}</h2>
                            <div class="product-image-wrapper">
                            	@foreach($noti_post as $key=>$p)
                                 <div class="single-products" style="margin: 10px">
                                        {!!$p->noti_post_desc!!}
                                        <a target="_blank" href="{{URL::to('public/uploads/document/'.$p->noti_post_document)}}">Tải về xem</a>
                                </div>
                                <div class="clearfix"></div>
                                 @endforeach  
                            </div>                                                  
</div>
     <h2 style="margin: 0;" class="title text-center">Thông báo liên quan</h2>
     <style type="text/css">
         ul .post_relate{
            list-style: disc;
            font-size: 16px;
            padding: 6px;
         }
     </style>
     <ul class="post_relate">
        @foreach($releted as $key=>$rel)
         <li><a href="{{URL::to('/bai-viet-thong-bao/'.$rel->noti_post_slug)}}">{{$rel->noti_post_title}}</a></li>
        @endforeach
     </ul>
@endsection