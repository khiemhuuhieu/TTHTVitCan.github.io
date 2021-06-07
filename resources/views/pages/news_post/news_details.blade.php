@extends('welcome')
@section('content')
<div class="features_items">
      <h2 style="margin: 0;position: inherit;" class="title text-center">{!!$meta_title!!}</h2>
                            <div class="product-image-wrapper">
                            	@foreach($news_post as $key=>$p)
                                 <div class="single-products" style="margin: 10px">
                                        {!!$p->news_post_content!!}
                                </div>
                                <div class="clearfix"></div>
                                 @endforeach  
                            </div>                                                  
</div>
     <h2 style="margin: 0;" class="title text-center">Bài viết liên quan</h2>
     <style type="text/css">
         ul .post_relate{
            list-style: disc;
            font-size: 16px;
            padding: 6px;
         }
     </style>
     <ul class="post_relate">
        @foreach($releted as $key=>$rel)
         <li><a href="{{URL::to('/bai-viet/'.$rel->news_post_slug)}}">{{$rel->news_post_title}}</a></li>
        @endforeach
     </ul>
@endsection