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

                                <li><a href="{{URL::to('/checkout')}}"><i class="fa fa-crosshairs"></i> Thanh to??n</a></li>
                                
                                <?php
                                }elseif($customer_id != NULL ){
                                ?>

                                <li><a href="{{URL::to('/payment')}}"><i class="fa fa-crosshairs"></i> Thanh to??n</a></li>
                                
                                <?php
                                 }else{
                                ?>

                                <li><a href="{{URL::to('/login_checkout')}}"><i class="fa fa-crosshairs"></i> Thanh to??n</a></li>
                                
                                <?php
                                }
                                ?> 

                                <li><a href="{{URL::to('/gio-hang')}}"><i class="fa fa-shopping-cart"></i>????ng k?? kh??a h???c</a></li>

                                <?php
                                $customer_id = Session::get('customer_id');
                                  if($customer_id != NULL){
                                ?>

                                <li><a href="{{URL::to('/logout_checkout')}}"><i class="fa fa-lock"></i>????ng xu???t</a></li>
                
                                <?php                               
                               }else{
                               ?>

                               <li><a href="{{URL::to('/login_checkout')}}"><i class="fa fa-lock"></i>????ng nh???p</a></li>
                               
                               <?php
                                }
                                ?>
                            </ul>
                        </div>
                   <h1 style=" margin-top: 70px;font-size: 40px;font-family: monospace;margin-left:100px;color: #0a748a">TRUNG T??M TIN H???C V???T C???N</h1>

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
                                <li><a href="{{URL::to('/Home')}}" class="active">Trang ch???</a></li>
                                <li><a href="{{URL::to('/gioi-thieu')}}">Gi???i thi???u</a></li>
                                 <li><a href="{{URL::to('/doi-ngu-giang-vien')}}">?????i ng?? gi???ng vi??n</a></li>
                                 
                                 <li class="dropdown"><a href="#">Ch????ng tr??nh ????o t???o<i class="fa fa-angle-down"></i></a>
                                    <ul role="menu" class="sub-menu">
                                        @foreach($thematic as $key=>$val)
                                        <li><a href="{{URL::to('danh-muc-dao-tao/'.$val->thematic_id)}}">{{$val->thematic_name}}</a></li>
                                        @endforeach
                                    </ul>
                                </li>
                                <li class="dropdown"><a href="#">Tin t???c<i class="fa fa-angle-down"></i></a>
                                    <ul role="menu" class="sub-menu">
                                        @foreach($news_cate as $key=>$news_cat)
                                        <li><a href="{{URL::to('/danh-muc-tin-tuc/'.$news_cat->news_cate_slug)}}">{{$news_cat->news_cate_name}}</a></li>
                                        @endforeach
                                    </ul>
                                </li>
                                 <li class="dropdown"><a href="#">Th??ng b??o <i class="fa fa-angle-down"></i></a>
                                    <ul role="menu" class="sub-menu">
                                        @foreach($noti_cate as $key=>$noti_c)
                                        <li><a href="{{URL::to('/danh-muc-thong-bao/'.$noti_c->noti_cate_slug)}}">{{$noti_c->noti_cate_name}}</a></li>
                                        @endforeach
                                    </ul>
                                </li>  
                                <li><a href="{{URL::to('/contact')}}">Li??n h???</a></li>
                            </ul>
                        </div>
                    </div>
                <!--   <div class="col-sm-12">
                        <div class="search_box pull-right">
                            <form action="{{URL::to('/tim_kiem')}}" method="POST">
                                {{csrf_field()}}
                            <input type="text" name="keyword_submit" placeholder="Nh???p t??? kh??a..."/>
                            <input type="submit" class="btn btn-primary" style="margin-top: 0; color: #333" value="T??m ki???m">
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
                        <h2>KH??A H???C CHUY??N ?????</h2>
                        <div class="panel-group category-products" id="accordian">
                         @foreach($thematic as $key =>$val_thematic)

                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title"><a href="{{URL::to('/danh-muc-chuyen-de/'.$val_thematic->thematic_id)}}">{{$val_thematic->thematic_name}}</a></h4>
                                </div>
                            </div>
                            @endforeach                                  
                        </div><!--/chuy??n ?????-->
                    
                        <div class="brands_products">
                            <h2>Ng??n ng??? l???p tr??nh v?? ph???n m???m</h2>
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
                            <p style="margin-top: 100px;font-weight:bold;font-size: 20px">H??y ????? ch??ng t??i ?????ng h??nh c??ng b???n tr??n h??nh tr??nh chinh ph???c tri th???c - v???ng v??ng b?????c v??o th??? gi???i c??ng ngh??? 4.0.</p>
                        </div>
                </div>
            </div>
        </div>
        
        <div class="footer-widget">
            <div class="container">
                <div class="row">
                    <div class="col-sm-2">
                        <div class="single-widget">
                            <h2>D???ch v??? ch??ng t??i</h2>
                            <ul class="nav nav-pills nav-stacked">
                                <li><a href="#">H?????ng d???n ?????t kh??a h???c</a></li>
                                <li><a href="#">H?????ng d???n thanh to??n</a></li>
                                <li><a href="#">H?????ng d???n h???y kh??a h???c</a></li>
                                <li><a href="#">??i???u kho???n d???ch v???</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-2">
                        <div class="single-widget">
                            <h2>Th??ng tin chung</h2>
                            <ul class="nav nav-pills nav-stacked">
                                <li><a href="#">?????a ch??? 1: 12 Nguy???n V??n B???o, Ph?????ng 4, G?? V???p, Th??nh ph??? H??? Ch?? Minh</a></li>
                                <li><a href="#">?????a ch??? 2:938, ???????ng Quang Trung, TP. Qu???ng Ng??i, t???nh Qu???ng Ng??i</a></li>
                                <li><a href="#">S??? ??i???n tho???i: 028 3894 0390</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="single-widget">
                            <h2>Fanpage</h2>   
                            <div id="fb-root"></div>
                            <script async defer crossorigin="anonymous" src="https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v10.0&appId=273422747742833&autoLogAppEvents=1" nonce="zA7iUNqI"></script>                     
                             <div class="fb-page" data-href="https://www.facebook.com/GayLangThang/" data-tabs="timeline" data-width="10px" data-height="10px" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/GayLangThang/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/GayLangThang/">C?????i ??t Th??i</a></blockquote>
                             </div>
                               
                        </div>
                    </div>
                    <div class="col-sm-3 col-sm-offset-1">
                        <div class="single-widget">
                            <h2>????ng k?? Email</h2>
                            <form action="#" class="searchform">
                                <input type="text" placeholder="??i???n email c???a b???n" />
                                <button type="submit" class="btn btn-default"><i class="fa fa-arrow-circle-o-right"></i></button>
                                <p>N???u c?? m??? kh??a h???c m???i<br />ch??ng t??i s??? g???i email cho b???n.</p>
                            </form>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
        
      <div class="footer-bottom">
            <div class="container">
                <div class="row">
                    <p class="pull-left">Copyright ?? 2021 TRUNG T??M TIN H???C V???T C???N.</p>
                    <p class="pull-right">Designed by <span>Nguy???n ????nh H???u</span></p>
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
        window.alert('C???m ??n b???n ???? ????ng k?? kh??a h???c!');
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
                    $('#notifi_cmt').html('B???n lu???n c???a b???n s??? ph???n h???i s???m nh???t');
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
                    alert('S??? l?????ng h???c vi??n v?????t qu?? m???c quy ?????nh' + cart_student_qty);

                }else{

                    $.ajax({
                        url:"{{url('/add_cart_ajax')}}",
                        method:'POST',
                        data:{cart_class_id:cart_class_id,cart_class_name:cart_class_name,cart_class_image:cart_class_image,cart_tuition:cart_tuition,cart_student_qty:cart_student_qty,cart_class_student_number:cart_class_student_number,_token:_token},

                        success:function(data){
                                swal({
                                        title: "???? th??m kh??a h???c v??o gi??? h??ng",
                                        text: "B???n c?? th??? xem ti???p ho???c t???i trang thanh to??n",
                                        showCancelButton: true,
                                        cancelButtonText: "Xem ti???p",
                                        confirmButtonClass: "btn-success",
                                        confirmButtonText: "??i ?????n thanh to??n kh??a h???c",
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
                title: "X??c nh???n ????ng k?? l???p h???c?",
                text: "Kh??a h???c kh??ng ???????c h???y, b???n c?? ch???c mu???n ????ng k?? kh??ng?",
                type: "warning",
                  showCancelButton: true,
                  confirmButtonClass: "btn-danger",
                  confirmButtonText: "C???m ??n b???n, ????ng k?? kh??a h???c",
                  cancelButtonText: "Ch??a ????ng k??",
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
                 swal("Kh??a h???c", "B???n ???? ????ng k?? th??nh c??ng kh??a h???c.", "success");
                }
                });
               window.setTimeout(function(){
                location.reload();
               } ,3000);
                         
                    }else{
                         swal("????ng", "Th??ng tin kh??a h???c ch??a ??i???n ?????, l??m ??n ??i???n ?????y ????? th??ng tin", "error");
                         }
                });
            });
        });
    </script>
</body>
</html>