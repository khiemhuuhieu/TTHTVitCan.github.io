<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Vit Can | Trung Tam Tin Hoc </title>
    <link href="{{asset('public/fontend/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('public/fontend/css/font-awesome.min.css')}}" rel="stylesheet">
    <link href="{{asset('public/fontend/css/prettyPhoto.css')}}" rel="stylesheet">
    <link href="{{asset('public/fontend/css/price-range.css')}}" rel="stylesheet">
    <link href="{{asset('public/fontend/css/animate.css')}}" rel="stylesheet">
    <link href="{{asset('public/fontend/css/main.css')}}" rel="stylesheet">
    <link href="{{asset('public/fontend/css/responsive.css')}}" rel="stylesheet">
    <link href="{{asset('public/fontend/css/sweetalert.css')}}" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->       
    <link rel="shortcut icon" href="{{('public/fontend/image/logovc.png')}}">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">
   <!--  bootrap cua trang giam gia -->
 
</head><!--/head-->

<body>
    <header id="header"><!--header-->
      <div class="header_top"><!--header_top-->
            <div class="container">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="contactinfo">
                            <ul class="nav nav-pills">
                                <li><a href="#"><i class="fa fa-phone"></i> 0932023992</a></li>
                                <li><a href="#"><i class="fa fa-envelope"></i> trungtamtinhocvc.com</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="social-icons pull-right">
                            <ul class="nav navbar-nav">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div><!--/header_top-->
        
        <div class="header-middle"><!--header-middle-->
            <div class="container">
                <div class="row">
                    <div class="col-sm-2">
                        <div class="logo pull-left">
                            <a href="{{URL::to('/')}}"><img src="{{URL::to('public/fontend/image/logovc.png')}}" alt="" width="150" height="140px" /></a>
                        </div>
                    </div>
                    <div class="col-sm-10">
                        <div class="shop-menu pull-right">
                            <ul class="nav navbar-nav">
             
                               <?php

                                 $customer_id = Session::get('customer_id');

                                if($customer_id != NULL ){                                
                                ?>

                                <li><a href="{{URL::to('/checkout')}}"><i class="fa fa-crosshairs"></i> Thanh toán</a></li>
                                
                                <?php
                                }elseif($customer_id != NULL ){
                                ?>

                                <li><a href="{{URL::to('/payment')}}"><i class="fa fa-crosshairs"></i> Thanh toán</a></li>
                                
                                <?php
                                 }else{
                                ?>

                                <li><a href="{{URL::to('/login_checkout')}}"><i class="fa fa-crosshairs"></i> Thanh toán</a></li>
                                
                                <?php
                                }
                                ?> 

                                <li><a href="{{URL::to('/gio-hang')}}"><i class="fa fa-shopping-cart"></i>Đăng kí khóa học</a></li>

                                <?php
                                $customer_id = Session::get('customer_id');
                                  if($customer_id != NULL){
                                ?>

                                <li><a href="{{URL::to('/logout_checkout')}}"><i class="fa fa-lock"></i>Đăng xuất</a></li>
                
                                <?php                               
                               }else{
                               ?>

                               <li><a href="{{URL::to('/login_checkout')}}"><i class="fa fa-lock"></i>Đăng nhập</a></li>
                               
                               <?php
                                }
                                ?>
                            </ul>
                        </div>
                   <h1 style=" margin-top: 70px;font-size: 40px;font-family: monospace;margin-left:100px;color: #0a748a">TRUNG TÂM TIN HỌC VỊT CẠN</h1>

                    </div>
                </div>
            </div>
        </div><!--/header-middle-->
    
        <div class="header-bottom"><!--header-bottom-->
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                        </div>
                        <div class="mainmenu pull-left">
                            <ul class="nav navbar-nav collapse navbar-collapse">
                                <li><a href="{{URL::to('/Home')}}" class="active">Trang chủ</a></li>
                                <li><a href="{{URL::to('/gioi-thieu')}}">Giới thiệu</a></li>
                                 <li><a href="{{URL::to('/doi-ngu-giang-vien')}}">Đội ngũ giảng viên</a></li>
                                 
                                 <li class="dropdown"><a href="#">Chương trình đào tạo<i class="fa fa-angle-down"></i></a>
                                    <ul role="menu" class="sub-menu">
                                        @foreach($thematic as $key=>$val)
                                        <li><a href="{{URL::to('danh-muc-dao-tao/'.$val->thematic_id)}}">{{$val->thematic_name}}</a></li>
                                        @endforeach
                                    </ul>
                                </li>
                                <li class="dropdown"><a href="#">Tin tức<i class="fa fa-angle-down"></i></a>
                                    <ul role="menu" class="sub-menu">
                                        @foreach($news_cate as $key=>$news_cat)
                                        <li><a href="{{URL::to('/danh-muc-tin-tuc/'.$news_cat->news_cate_slug)}}">{{$news_cat->news_cate_name}}</a></li>
                                        @endforeach
                                    </ul>
                                </li>
                                 <li class="dropdown"><a href="#">Thông báo <i class="fa fa-angle-down"></i></a>
                                    <ul role="menu" class="sub-menu">
                                        @foreach($noti_cate as $key=>$noti_c)
                                        <li><a href="{{URL::to('/danh-muc-thong-bao/'.$noti_c->noti_cate_slug)}}">{{$noti_c->noti_cate_name}}</a></li>
                                        @endforeach
                                    </ul>
                                </li>  
                                <li><a href="{{URL::to('/contact')}}">Liên hệ</a></li>
                            </ul>
                        </div>
                    </div>
                <!--   <div class="col-sm-12">
                        <div class="search_box pull-right">
                            <form action="{{URL::to('/tim_kiem')}}" method="POST">
                                {{csrf_field()}}
                            <input type="text" name="keyword_submit" placeholder="Nhập từ khóa..."/>
                            <input type="submit" class="btn btn-primary" style="margin-top: 0; color: #333" value="Tìm kiếm">
                        </form>
                        </div>
                    </div> -->
                </div>
            </div>
        </div><!--/header-bottom-->
    </header><!--/header-->
    <!-------slider---------->
     @yield('slider') 
    <section>
        <div class="container">
            <div class="row">
                <div class="col-sm-3">
                    <div class="left-sidebar">
                        <h2>KHÓA HỌC CHUYÊN ĐỀ</h2>
                        <div class="panel-group category-products" id="accordian">
                         @foreach($thematic as $key =>$val_thematic)

                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title"><a href="{{URL::to('/danh-muc-chuyen-de/'.$val_thematic->thematic_id)}}">{{$val_thematic->thematic_name}}</a></h4>
                                </div>
                            </div>
                            @endforeach                                  
                        </div><!--/chuyên đề-->
                    
                        <div class="brands_products">
                            <h2>Ngôn ngữ lập trình và phần mềm</h2>
                            <div class="brands-name">
                                <ul class="nav nav-pills nav-stacked">
                                    @foreach($language as $key =>$val_language)
                                    <li><a href="{{URL::to('/danh-muc-ngon-ngu/'.$val_language->language_id)}}">{{$val_language->language_name}}</a></li>
                                    @endforeach
                                </ul>
                            </div>
                        </div><!--/brands_products-->
                        
                      
                        
                        <div class="shipping text-center"><!--shipping-->
                            <img src="{{URL::to('public/fontend/image/qc.jpg')}}" alt="" />
                        </div><!--/shipping-->
                    
                    </div>
                </div>
                
                <div class="col-sm-9 padding-right">
                    @yield('content')                                                         
                </div>
            </div>
        </div>
    </section>
    <section style="background: #ededed;text-align: center;">
         @yield('teacher')
    </section>
    <section style="margin-top:50px;">
         @yield('thanhtua')
    </section>
    <br>
    
    
    <footer id="footer"><!--Footer-->
        <div class="footer-top">
            <div class="container">
                <div class="row">
                    <div class="col-sm-2">
                        <div class="companyinfo">
                              <a href="{{URL::to('/')}}"><img src="{{URL::to('public/fontend/image/logovc.png')}}" alt="" width="180" /></a>
                        </div>
                    </div>
                    <div class="col-sm-10 text-center">
                            <p style="margin-top: 100px;font-weight:bold;font-size: 20px">Hãy để chúng tôi đồng hành cùng bạn trên hành trình chinh phục tri thức - vững vàng bước vào thế giới công nghệ 4.0.</p>
                        </div>
                </div>
            </div>
        </div>
        
        <div class="footer-widget">
            <div class="container">
                <div class="row">
                    <div class="col-sm-2">
                        <div class="single-widget">
                            <h2>Dịch vụ chúng tôi</h2>
                            <ul class="nav nav-pills nav-stacked">
                                <li><a href="#">Hướng dẫn đặt khóa học</a></li>
                                <li><a href="#">Hướng dẫn thanh toán</a></li>
                                <li><a href="#">Hướng dẫn hủy khóa học</a></li>
                                <li><a href="#">Điều khoản dịch vụ</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-2">
                        <div class="single-widget">
                            <h2>Thông tin chung</h2>
                            <ul class="nav nav-pills nav-stacked">
                                <li><a href="#">Địa chỉ 1: 12 Nguyễn Văn Bảo, Phường 4, Gò Vấp, Thành phố Hồ Chí Minh</a></li>
                                <li><a href="#">Địa chỉ 2:938, đường Quang Trung, TP. Quảng Ngãi, tỉnh Quảng Ngãi</a></li>
                                <li><a href="#">Số điện thoại: 028 3894 0390</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="single-widget">
                            <h2>Fanpage</h2>   
                            <div id="fb-root"></div>
                            <script async defer crossorigin="anonymous" src="https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v10.0&appId=273422747742833&autoLogAppEvents=1" nonce="zA7iUNqI"></script>                     
                             <div class="fb-page" data-href="https://www.facebook.com/GayLangThang/" data-tabs="timeline" data-width="10px" data-height="10px" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/GayLangThang/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/GayLangThang/">Cười Ít Thôi</a></blockquote>
                             </div>
                               
                        </div>
                    </div>
                    <div class="col-sm-3 col-sm-offset-1">
                        <div class="single-widget">
                            <h2>Đăng kí Email</h2>
                            <form action="#" class="searchform">
                                <input type="text" placeholder="Điền email của bạn" />
                                <button type="submit" class="btn btn-default"><i class="fa fa-arrow-circle-o-right"></i></button>
                                <p>Nếu có mở khóa học mới<br />chúng tôi sẽ gửi email cho bạn.</p>
                            </form>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
        
      <div class="footer-bottom">
            <div class="container">
                <div class="row">
                    <p class="pull-left">Copyright © 2021 TRUNG TÂM TIN HỌC VỊT CẠN.</p>
                    <p class="pull-right">Designed by <span>Nguyễn Đình Hữu</span></p>
                </div>
            </div>
        </div>
    </footer><!--/Footer-->
    

  
    <script src="{{asset('public/fontend/js/jquery.js')}}"></script>
    <script src="{{asset('public/fontend/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('public/fontend/js/jquery.scrollUp.min.js')}}"></script>
    <script src="{{asset('public/fontend/js/price-range.js')}}"></script>
    <script src="{{asset('public/fontend/js/jquery.prettyPhoto.js')}}"></script>
    <script src="{{asset('public/fontend/js/main.js')}}"></script>
    <script src="{{asset('public/fontend/js/sweetalert.min.js')}}"></script>
    <script src="https://www.paypalobjects.com/api/checkout.js"></script>

 <script>
  paypal.Button.render({
    // Configure environment
    env: 'sandbox',
    client: {
      sandbox: 'AZbmgzGMN9ouwGUNb3DA1jkQbanb4pnZFmHgjiQTkrBNbV2WoqLYBUTg9tsBj6StZnSjQOaryJyW2PPO',
      production: 'demo_production_client_id'
    },
    // Customize button (optional)
    locale: 'en_US',
    style: {
      size: 'small',
      color: 'gold',
      shape: 'pill',
    },

    // Enable Pay Now checkout flow (optional)
    commit: true,

    // Set up a payment
    payment: function(data, actions) {
      return actions.payment.create({
        transactions: [{
          amount: {
            total: '0.01',
            currency: 'USD'
          }
        }]
      });
    },
    // Execute the payment
    onAuthorize: function(data, actions) {
      return actions.payment.execute().then(function() {
        // Show a confirmation message to the buyer
        window.alert('Cảm ơn bạn đã đăng kí khóa học!');
      });
    }
  }, '#paypal-button');

</script>

    <script type="text/javascript">
        $(document).ready(function(){
            
            load_comment();

            function load_comment(){
                var class_id = $('.comment_class_id').val();
                var _token= $('input[name="_token"]').val();
              
               $.ajax({
                url:"{{url('/load-comment')}}",
                method:"POST",
                data:{class_id:class_id, _token:_token},

                success:function(data){
                 $('#comment_show').html(data);
                }
                });  
            }
            $('.send-comment').click(function(){

                var class_id = $('.comment_class_id').val();
                var comment_name = $('.comment_name').val();
                var comment_content =$('.comment_content').val();
                var _token= $('input[name="_token"]').val();

                $.ajax({
                url:"{{url('/send-comment')}}",
                method:"POST",
                data:{class_id:class_id,comment_name:comment_name,comment_content:comment_content,_token:_token},
                success:function(data){
                    $('#notifi_cmt').html('Bạn luận của bạn sẽ phản hồi sớm nhất');
                 load_comment();
                  $('#notifi_cmt').fadeOut(9000);
                 $('.comment_name').val('');
                 $('.comment_content').val('');
                }
                });  
            });
        });
    </script>
     
   <script type="text/javascript">

        $(document).ready(function(){
            $('.add-to-cart').click(function(){
                var id=$(this).data('id_class');
                var cart_class_id = $('.cart_class_id_' + id).val();
                var cart_class_name = $('.cart_class_name_' + id).val();
                var cart_class_image = $('.cart_class_image_' + id).val();
                var cart_class_student_number = $('.cart_class_student_number_' + id).val();
                var cart_tuition = $('.cart_tuition_' + id).val();
                var cart_student_qty = $('.cart_student_qty_' + id).val();
                var _token= $('input[name="_token"]').val();
                if(parseInt(cart_student_qty)>parseInt(cart_class_student_number)){
                    alert('Số lượng học viên vượt quá mức quy định' + cart_student_qty);

                }else{

                    $.ajax({
                        url:"{{url('/add_cart_ajax')}}",
                        method:'POST',
                        data:{cart_class_id:cart_class_id,cart_class_name:cart_class_name,cart_class_image:cart_class_image,cart_tuition:cart_tuition,cart_student_qty:cart_student_qty,cart_class_student_number:cart_class_student_number,_token:_token},

                        success:function(data){
                                swal({
                                        title: "Đã thêm khóa học vào giỏ hàng",
                                        text: "Bạn có thể xem tiếp hoặc tới trang thanh toán",
                                        showCancelButton: true,
                                        cancelButtonText: "Xem tiếp",
                                        confirmButtonClass: "btn-success",
                                        confirmButtonText: "Đi đến thanh toán khóa học",
                                        closeOnConfirm: false
                                    },
                                    function() {
                                        window.location.href = "{{url('/gio-hang')}}";
                                    });
                        }
                    });
                }
            });
        });
    </script>
   <script type="text/javascript">
         $(document).ready(function(){
            $('.send_class').click(function(){

                swal({
                title: "Xác nhận đăng kí lớp học?",
                text: "Khóa học không được hủy, bạn có chắc muốn đăng kí không?",
                type: "warning",
                  showCancelButton: true,
                  confirmButtonClass: "btn-danger",
                  confirmButtonText: "Cảm ơn bạn, đăng kí khóa học",
                  cancelButtonText: "Chưa đăng kí",
                  closeOnConfirm: false,
                  closeOnCancel:false
                },
                function(isConfirm){
                    if(isConfirm){
                        var order_coupon = $('.order_coupon').val();
                        var _token = $('input[name="_token"]').val();

               $.ajax({
                url:'{{url('/confirm_order')}}',
                method:'POST',
                data:{order_coupon:order_coupon, _token:_token},
                success:function(){
                 swal("Khóa học", "Bạn đã đăng kí thành công khóa học.", "success");
                }
                });
               window.setTimeout(function(){
                location.reload();
               } ,3000);
                         
                    }else{
                         swal("Đóng", "Thông tin khóa học chưa điền đủ, làm ơn điền đầy đủ thông tin", "error");
                         }
                });
            });
        });
    </script>
</body>
</html>