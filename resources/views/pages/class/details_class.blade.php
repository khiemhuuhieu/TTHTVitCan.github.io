@extends('welcome')
@section('content')
@foreach($detail_class as $key =>$vales)
<div class="product-details"><!--product-details-->
						<div class="col-sm-5">
							<div class="view-product">
								<img src="{{URL::to('public/uploads/product/'.$vales->class_image)}}" alt="" />
							
							</div>
						</div>
						<div class="col-sm-7">
							<div class="product-information"><!--/product-information-->
								<img src="{{URL::to('public/fontend/image/new.jpg')}}" class="newarrival" alt="" />
								<h2>{{($vales->class_name)}}</h2>
								<img src="{{URL::to('public/fontend/image/rating.png')}}" alt="" />
								<form action="{{URL::to('/save_class_cart')}}" method="POST">
									{{csrf_field()}}
									 <input type="hidden" value="{{$vales->class_id}}" class="cart_class_id_{{$vales->class_id}}">
                                     <input type="hidden" value="{{$vales->class_name}}" class="cart_class_name_{{$vales->class_id}}">
                                     <input type="hidden" value="{{$vales->class_image}}" class="cart_class_image_{{$vales->class_id}}">
                                     <input type="hidden" value="{{$vales->student_number}}" class="cart_class_student_number_{{$vales->class_id}}">
                                     <input type="hidden" value="{{$vales->tuition}}" class="cart_tuition_{{$vales->class_id}}">
                                     <input type="hidden" value="1" class="cart_student_qty_{{$vales->class_id}}">
								<span>
									<span>{{number_format($vales->tuition).'.'.'VNĐ'}}</span>
									<input type="hidden" type="number" name="qty" value="1" min="1" />
									<input type="hidden" name="class_id_hidden" min="1" value="{{($vales->class_id)}}">
									<button  type="button" class="btn btn-default add-to-cart" name="add-to-cart" data-id_class="{{$vales->class_id}}">Đăng kí học</button>				
								</span>

							</form>
								<p><b>Chuyên đề:</b>{{$vales->thematic_name}}</p>
								<p><b>Ngôn ngữ:</b>{{($vales->language_name)}}</p>
								<a href=""><img src="{{URL::to('public/fontend/image/share.png')}}" class="share img-responsive"  alt="" /></a>
							
							</div><!--/product-information-->

						</div>

					</div><!--/product-details-->
		@endforeach
					<div class="category-tab shop-details-tab"><!--category-tab-->
						<div class="col-sm-12">
							<ul class="nav nav-tabs">
								<li ><a href="#details" data-toggle="tab">Mô tả khóa học</a></li>
								
								<li class="active"><a href="#reviews" data-toggle="tab">Bình luận</a></li>
							</ul>
						</div>
						<div class="tab-content">
							<div class="tab-pane" id="details" >
								
							<p>{!!($vales->class_desc)!!}</p>
						
							</div>
							
							<div class="tab-pane fade active in" id="reviews" >
								<div class="col-sm-12">
									
									<style type="text/css">
										.style_comment{
											border: 1px solid #ddd;
											border-radius: 10px;
											background: #f0f0e9;
										}
									</style>
									<form>
										@csrf
										<div id="comment_show"></div>
				                         <input type="hidden" name="comment_class_id" class="comment_class_id" value="{{$vales->class_id}}">
							
									</form>
									<p><b>Viết câu hỏi</b></p>
									
									<form action="#">
										@csrf()
										<span>
											<input style="width: 100%;margin-left: 0" type="text" class="comment_name" placeholder="Tên bạn"/>
										</span>
										<textarea name="comment" class="comment_content" placeholder="Nội dung"></textarea>
										<div id="notifi_cmt"></div>
										<button type="button" class="btn btn-default pull-right send-comment">
											Bình Luận
										</button>
									</form>
								</div>
							</div>
							
						</div>
					</div><!--/category-tab-->
					<div class="recommended_items"><!--recommended_items-->
						<h2 class="title text-center">Khóa học liên quan</h2>
						
						<div id="recommended-item-carousel" class="carousel slide" data-ride="carousel">
							<div class="carousel-inner">
								<div class="item active">
								@foreach($related_class as $key =>$rela)	
									<div class="col-sm-4">
										<div class="product-image-wrapper">
											<div class="single-products">
												<div class="productinfo text-center">
													<img src="{{URL::to('public/uploads/product/'.$rela->class_image)}}" height="200px" alt="" />
													<h2>{{number_format($rela->tuition).'.'.'VNĐ'}}</h2>
													<p>{{($rela->class_name)}}</p>
													<button type="button" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Đăng kí học</button>
												</div>
											</div>
										</div>
									</div>
								@endforeach	
								</div>
							</div>
							 <a class="left recommended-item-control" href="#recommended-item-carousel" data-slide="prev">
								<i class="fa fa-angle-left"></i>
							  </a>
							  <a class="right recommended-item-control" href="#recommended-item-carousel" data-slide="next">
								<i class="fa fa-angle-right"></i>
							  </a>			
						</div>
					</div><!--/recommended_items-->
@endsection