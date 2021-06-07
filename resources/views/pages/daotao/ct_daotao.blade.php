@extends('welcome')
@section('content')
<div class="features_items">
      <h2 style="margin: 0;position: inherit;" class="title text-center">{!!$meta_title!!}</h2>
                            <div class="product-image-wrapper">
                            	@foreach($ct_daotao as $key=>$val)
                                 <div class="single-products" style="margin: 10px">
                                        <h3>{{$val->TieuDe}}</h3>
                                        <span>{!!$val->ChiTiet!!}</span>
                                </div>
                                <div class="clearfix"></div>
                                 @endforeach  
                            </div>                                                  
</div>
@endsection