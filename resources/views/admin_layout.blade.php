<!DOCTYPE html>
<head>
<title>Admin</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Visitors Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- bootstrap-css -->
<link rel="stylesheet" href="{{asset('public/backend/css/bootstrap.min.css')}}" >
<!-- //bootstrap-css -->
<meta name="csrf-token" content="{{csrf_token()}}">
<!-- Custom CSS -->
<link href="{{asset('public/backend/css/style.css')}}" rel='stylesheet' type='text/css' />
<link href="{{asset('public/backend/css/style-responsive.css')}}" rel="stylesheet"/>
<!-- font CSS -->
<link href='//fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
<!-- font-awesome icons -->
<link rel="stylesheet" href="{{asset('public/backend/css/font.css')}}" type="text/css"/>
<link href="{{asset('public/backend/css/font-awesome.css')}}" rel="stylesheet"> 
<link rel="stylesheet" href="{{asset('public/backend/css/morris.css')}}" type="text/css"/>
<!-- calendar -->
<link rel="stylesheet" href="{{asset('public/backend/css/monthly.css')}}">
<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.css">
<link rel="stylesheet" href="{{asset('public/backend/css/formValidation.min.css')}}" type="text/css"/>
<!-- //calendar -->
<!-- //font-awesome icons -->
<script src="{{asset('public/backend/js/jquery2.0.3.min.js')}}"></script>
<script src="{{asset('public/backend/js/raphael-min.js')}}"></script>
<script src="{{asset('public/backend/js/morris.js')}}"></script>


</head>
<body>
<section id="container">
<!--header start-->
<header class="header fixed-top clearfix">
<!--logo start-->
<div class="brand">
    <a href="{{URL::to('/dashboard')}}" class="logo">
        Admin
    </a>
    <div class="sidebar-toggle-box">
        <div class="fa fa-bars"></div>
    </div>
</div>
<!--logo end-->
<div class="top-nav clearfix">
    <!--search & user info start-->
    <ul class="nav pull-right top-menu">
        <li>
            <input type="text" class="form-control search" placeholder=" Search">
        </li>
        <!-- user login dropdown start-->
        <li class="dropdown">
            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                <img alt="" src="{{('public/fontend/image/logovc.png')}}">
                <span class="username">
                	 <?php
					if(Session::get('login_normal')){
                        $name = Session::get('admin_name');
                    }else{
                        $name = Auth::user()->admin_name;
                    }
                    if($name){
                        echo $name;
                    }
					?>
                </span>
                <b class="caret"></b>
            </a>
            <ul class="dropdown-menu extended logout">
                <li><a href="{{URL::to('/logout_auth')}}"><i class="fa fa-key"></i>Đăng xuất</a></li>
            </ul>
        </li>
        <!-- user login dropdown end -->
       
    </ul>
    <!--search & user info end-->
</div>
</header>
<!--header end-->
<!--sidebar start-->
<aside>
    <div id="sidebar" class="nav-collapse">
        <!-- sidebar menu start-->
        <div class="leftside-navigation">
            <ul class="sidebar-menu" id="nav-accordion">
                @hasAnyRoles(['accountant','director','admin'])
                <li>
                    <a class="active" href="{{URL::to('/thong-ke')}}">
                        <i class="fa fa-dashboard"></i>
                        <span>Thống kê</span>
                    </a>
                </li>
                @endhasAnyRoles
                @hasAnyRoles(['admin','director'])
                 <li class="sub-menu">
                    <a href="javascript:;">
                        <i class="fa  fa-user-md"></i>
                        <span>Quản lý Hệ Thống</span>
                    </a>
                    <ul class="sub">
                        <li><a href="{{URL::to('/users')}}">Tài khoản</a></li>
                        <li><a href="{{URL::to('/all_position')}}">Chức vụ</a></li>
                    </ul>
                </li>
                @endhasAnyRoles
                 @hasAnyRoles(['admin','director','employee']) 
                 <li class="sub-menu">
                    <a href="javascript:;">
                        <i class="fa  fa-users"></i>
                        <span>Quản lý thông tin</span>
                    </a>
                    <ul class="sub">
                        <li><a href="{{URL::to('/all_employee')}}">Giáo viên/Nhân viên</a></li>
                        <li><a href="{{URL::to('/all_student')}}">Học viên</a></li>
                    </ul>
                </li>
                 @endhasAnyRoles
                  @hasAnyRoles(['admin','director','employee'])  
                 <li class="sub-menu">
                    <a href="javascript:;">
                        <i class="fa fa-book"></i>
                        <span>Quản lý lớp học</span>
                    </a>
                    <ul class="sub">
                        <li><a href="{{URL::to('/quan-ly-lop-hoc')}}">Quản lý lớp học</a></li>
                        <li><a href="{{URL::to('/quan-ly-ca-hoc')}}">Quản lý ca học</a></li>
                        <li><a href="{{URL::to('/quan-ly-lich-thi')}}">Quản lý lịch thi</a></li>
                    </ul>
                </li>
                @endhasAnyRoles
                
                 @hasAnyRoles(['admin','director','employee','teacher'])   
                <li>
                    <a  href="{{URL::to('/comment')}}">
                        <i class="fa  fa-comments-o"></i>
                        <span>Quản lý bình luận</span>
                    </a>
                </li> 
                @endhasAnyRoles
                @hasAnyRoles(['admin','director','employee'])  
                 <li class="sub-menu">
                    <a href="javascript:;">
                        <i class="fa  fa-upload"></i>
                        <span>Quản lý sau thi</span>
                    </a>
                     <ul class="sub">
                        <li><a href="{{URL::to('danh-sach-thi-lai')}}">Quản lý thi lại</a></li>
                        <li><a href="{{URL::to('danh-sach-phuc-khao')}}">Quản lý phúc khảo</a></li>
                        <li><a href="{{URL::to('danh-sach-lop-cap-chung-chi')}}">Quản lý cấp chứng chỉ</a></li>
                    </ul>
                </li> 
                @endhasAnyRoles
                @hasAnyRoles(['director','accountant']) 
                 <li class="sub-menu">
                    <a href="javascript:;">
                        <i class="fa  fa-dollar"></i>
                        <span>Kế toán</span>
                    </a>
                    <ul class="sub">
                        <li><a href="{{URL::to('/manager_order')}}">Thanh toán học phí</a></li>
                        <li><a href="{{URL::to('/quan-ly-thu-chi')}}">Quản lý thu chi</a></li>
                        <li><a href="{{URL::to('/danh-sach-loai-thu-chi')}}">Loại thu chi</a></li>
                        <li><a href="{{URL::to('/danh-sach-luong')}}">Tính lương</a></li>
                    </ul>
                </li>
                @endhasAnyRoles
                @hasAnyRoles(['director','employee','teacher','accountant']) 
                <li class="sub-menu">
                    <a href="{{URL::to('/ke-hoach')}}">
                        <i class="fa  fa-file-text-o"></i>
                        <span>Xem kế hoạch</span>
                    </a>
                </li> 
                @endhasAnyRoles
               
                @hasAnyRoles(['teacher']) 
                <li class="sub-menu">
                    <a href="javascript:;">
                        <i class="fa  fa-upload"></i>
                        <span>Quản lý lớp học</span>
                    </a>
                     <ul class="sub">
                        <li><a href="{{URL::to('danh-sach-lop')}}">Danh sách lớp dạy</a></li>
                        <li><a href="{{URL::to('lich-day')}}">Lịch dạy và điểm danh</a></li>
                         <li><a href="{{URL::to('lich-thi')}}">Lịch thi</a></li>
                    </ul>
                </li> 
               @endhasAnyRoles 
               @hasAnyRoles(['admin','director','employee','teacher','accountant']) 
                 <li>
                    <a href="">
                        <i class="fa fa-book"></i>
                        <span>Cá nhân</span>
                    </a>
                    <ul class="sub">
                        <li><a href="{{URL::to('xem-luong-ca-nhan')}}">Bảng lương</a></li>
                        <li><a href="{{URL::to('thong-tin-ca-nhan')}}">Thông tin cá nhân</a></li>
                    </ul>
                    </a>
                </li>
                @endhasAnyRoles  
               @hasAnyRoles(['admin','director','employee','teacher']) 
                 <li class="sub-menu">
                    <a href="javascript:;">
                        <i class="fa  fa-folder-o"></i>
                        <span>Quản lý Website</span>
                    </a>
                    <ul class="sub">
                        <li><a href="{{URL::to('/danh-sach-thong-bao')}}">Viết bài thông báo</a></li>
                        <li><a href="{{URL::to('/all-news-post')}}">Viết bài tin tức</a></li>
                        @hasAnyRoles(['admin','director','employee'])
                         <li><a href="{{URL::to('/add_class')}}">Đăng kí lớp</a></li>
                        <li><a href="{{URL::to('/all_class')}}">Danh sách các lớp đã mở</a></li> 
                         <li><a href="{{URL::to('/all-cate-noti')}}">Danh mục thông báo</a></li>
                         <li><a href="{{URL::to('/all-news-cate')}}">Danh mục tin tức</a></li>
                         <li><a href="{{URL::to('/all_thematic')}}">Danh sách chuyên đề</a></li>
                         <li><a href="{{URL::to('/all_language')}}">Danh sách ngôn ngữ & phần mềm</a></li>
                         <li><a href="{{URL::to('/all_coupon')}}">Danh sách mã giảm giá</a></li>
                         <li><a href="{{URL::to('/all_banner')}}">Danh sách Banner</a></li>
                        <li><a href="{{URL::to('/information')}}">Thông tin website</a></li>
                        @endhasAnyRoles 
                    </ul>
                </li>
                @endhasAnyRoles 
                   @hasAnyRoles(['admin','director','employee']) 
                 <li>
                    <a  href="{{URL::to('chuong-trinh-dao-tao')}}">
                        <i class="fa  fa-folder-o"></i>
                        <span>Chương trình đào tạo</span>
                    </a>
                </li> 
                @endhasAnyRoles 
                @inpersonate
                <li>
                        <span><a href="{{URL::to('/inpersonate-destroy')}}">Stop chuyển quyền</a></span>
                </li>
                @endinpersonate
            </ul>            
        </div>
        <!-- sidebar menu end-->
    </div>
</aside>
<!--sidebar end-->
<!--main content start-->
<section id="main-content">

	<section class="wrapper">
	  @yield('admin_content')
    </section>
 <!-- footer -->
		  <div class="footer">
			<div class="wthree-copyright">
			  <p>TRUNG TÂM TIN HỌC VỊT CẠN</p>
			</div>
		  </div>
  <!-- / footer -->
</section>
<!--main content end-->
</section>
<script src="{{asset('public/backend/js/bootstrap.js')}}"></script>
<script src="{{asset('public/backend/js/jquery.dcjqaccordion.2.7.js')}}"></script>
<script src="{{asset('public/backend/js/scripts.js')}}"></script>
<script src="{{asset('public/backend/js/jque ry.slimscroll.js')}}"></script>
<script src="{{asset('public/backend/js/jquery.nicescroll.js')}}"></script>
<!--[if lte IE 8]><script language="javascript" type="text/javascript" src="js/flot-chart/excanvas.min.js"></script><![endif]-->
<script src="{{asset('public/backend/js/jquery.scrollTo.js')}}"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<!-- morris JavaScript -->	
<script src="{{asset('public/backend/ckeditor/ckeditor.js')}}"></script>
<script src="{{asset('public/backend/js/jquery.table2excel.min.js')}}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/formvalidation/0.6.2-dev/js/formValidation.min.js"></script>
<script type="text/javascript">
        $('.delete-document-ks').click(function(){
            var id = $(this).data('document_id');
            var _token =$('input[name="_token"]').val();
    
            $.ajax({
                url:"{{url('/dele-document-ks')}}",
                 method:"POST",
    
                data:{id:id,_token:_token},
                success:function(data){
                    alert('xóa file thanh cong');
                    location.reload();
                }
            });
        });
    </script>
<script type="text/javascript">
        $('.delete-document').click(function(){
            var id = $(this).data('document_id');
            var _token =$('input[name="_token"]').val();
        
            $.ajax({
                url:"{{url('/dele_document')}}",
                 method:"POST",
    
                data:{id:id,_token:_token},
                success:function(data){
                    alert('xóa file thanh cong');
                    location.reload();
                }
            });
        });
    </script>
<script type="text/javascript">

    $.validate({

    });

</script>
<script>
 $(".xuat").click(function(){
 $("#table2excel").table2excel({
 name: "Worksheet Name",
 filename: "FileExcel",
 fileext: ".xls"
 }) 
 });
 </script>
 <script>
 $(".xuat_chi").click(function(){
 $("#xuat_phieu_chi").table2excel({
 name: "Worksheet Name",
 filename: "danh_sach_chi",
 fileext: ".xls"
 }) 
 });
 </script>
 <script>
 $(".xuat_thu").click(function(){
 $("#xuat_phieu_thu").table2excel({
 name: "Worksheet Name",
 filename: "danh_sach_thu",
 fileext: ".xls"
 }) 
 });
 </script>
<script type="text/javascript">
    $(document).ready(function(){
       var chart = new Morris.Bar({
            element: 'myfirstchart',
            lineColors:['#819C79','#fc8710','#FF6541','#A4ADD3','#766B56'],
            pointFillColors:['#ffffff'],
            pointStrokerColor:['black'],
            fillOpacity:0.6,
            hideHover:'auto',
            parseTime:false,
            xkey: 'peroid',

            ykeys: ['order','sales','profit','quantity'],
            behaveLikeLine:true,

            labels: ['Số học viên đăng kí','Doanh thu','Lợi nhuận','Số học viên hiện tại'],
  });
       // function chart30dayorder(){
       //  var _token = $('input[name="_token"]').val();

       //   $.ajax({
       //          url:'{{url("/day-order")}}',
       //          method:"POST",
       //          dataType:"JSON",
       //          data:{_token:_token},
       //          success:function(data){
       //           chart.setData(data);
       //          }
       //          });  
       // }

        $('.dashboard-filter').change(function(){
        var dashboard_value = $(this).val();
        var _token = $('input[name="_token"]').val();
         $.ajax({
                url:'{{url("/dashboard-filter")}}',
                method:"POST",
                dataType:"JSON",
                data:{_token:_token,dashboard_value:dashboard_value},
                success:function(data){
                 chart.setData(data);
                }
                });  
    });

    $('#btn-dashboard-filter').click(function(){
        var _token = $('input[name="_token"]').val();
        var form_date = $('#datepicker').val();
        var to_date = $('#datepicker2').val();
          $.ajax({
                url:'{{url("/filter-by-date")}}',
                method:"POST",
                dataType:"JSON",
                data:{_token:_token,form_date:form_date,to_date:to_date},
                success:function(data){
                 chart.setData(data);
                }
                });    
    });
   
});
</script> 
<script type="text/javascript">
     $( function() {
    $( "#datepicker" ).datepicker({
        prevText:"Tháng trước",
        nextText:"Tháng sau",
        dateFormat:"yy-mm-dd",
        dayNamesMin:["Thứ 2","Thứ 3","Thứ 4","Thứ 5","Thứ 6","Thứ 7","Chủ nhật"],
        duration:"slow"
    });
     $( "#datepicker2" ).datepicker({
        prevText:"Tháng trước",
        nextText:"Tháng sau",
        dateFormat:"yy-mm-dd",
        dayNamesMin:["Thứ 2","Thứ 3","Thứ 4","Thứ 5","Thứ 6","Thứ 7","Chủ nhật"],
        duration:"slow"
    });
   });
</script>
<script type="text/javascript">
 
    function ChangeToSlug()
        {
            var slug;
         
            //Lấy text từ thẻ input title 
            slug = document.getElementById("slug").value;
            slug = slug.toLowerCase();
            //Đổi ký tự có dấu thành không dấu
                slug = slug.replace(/á|à|ả|ạ|ã|ă|ắ|ằ|ẳ|ẵ|ặ|â|ấ|ầ|ẩ|ẫ|ậ/gi, 'a');
                slug = slug.replace(/é|è|ẻ|ẽ|ẹ|ê|ế|ề|ể|ễ|ệ/gi, 'e');
                slug = slug.replace(/i|í|ì|ỉ|ĩ|ị/gi, 'i');
                slug = slug.replace(/ó|ò|ỏ|õ|ọ|ô|ố|ồ|ổ|ỗ|ộ|ơ|ớ|ờ|ở|ỡ|ợ/gi, 'o');
                slug = slug.replace(/ú|ù|ủ|ũ|ụ|ư|ứ|ừ|ử|ữ|ự/gi, 'u');
                slug = slug.replace(/ý|ỳ|ỷ|ỹ|ỵ/gi, 'y');
                slug = slug.replace(/đ/gi, 'd');
                //Xóa các ký tự đặt biệt
                slug = slug.replace(/\`|\~|\!|\@|\#|\||\$|\%|\^|\&|\*|\(|\)|\+|\=|\,|\.|\/|\?|\>|\<|\'|\"|\:|\;|_/gi, '');
                //Đổi khoảng trắng thành ký tự gạch ngang
                slug = slug.replace(/ /gi, "-");
                //Đổi nhiều ký tự gạch ngang liên tiếp thành 1 ký tự gạch ngang
                //Phòng trường hợp người nhập vào quá nhiều ký tự trắng
                slug = slug.replace(/\-\-\-\-\-/gi, '-');
                slug = slug.replace(/\-\-\-\-/gi, '-');
                slug = slug.replace(/\-\-\-/gi, '-');
                slug = slug.replace(/\-\-/gi, '-');
                //Xóa các ký tự gạch ngang ở đầu và cuối
                slug = '@' + slug + '@';
                slug = slug.replace(/\@\-|\-\@|\@/gi, '');
                //In slug ra textbox có id “slug”
            document.getElementById('convert_slug').value = slug;
        }
         

   
   
</script>
<script type="text/javascript">
function createTextSnippet() {
    //example as before, replace YOUR_TEXTAREA_ID
    var html=CKEDITOR.instances.YOUR_TEXTAREA_ID.getSnapshot();
    var dom=document.createElement("DIV");
    dom.innerHTML=html;
    var plain_text=(dom.textContent || dom.innerText);

    //create and set a 128 char snippet to the hidden form field
    var snippet=plain_text.substr(0,127);
    document.getElementById("hidden_snippet").value=snippet;

    //return true, ok to submit the form
    return true;
}
</script>
<script type="text/javascript">
    CKEDITOR.replace('ckeditor');
    CKEDITOR.replace('ckeditor1');
    CKEDITOR.replace('ckeditor2');
    CKEDITOR.replace('ckeditor3');
</script>
<script>
	$(document).ready(function() {
		//BOX BUTTON SHOW AND CLOSE
	   jQuery('.small-graph-box').hover(function() {
		  jQuery(this).find('.box-button').fadeIn('fast');
	   }, function() {
		  jQuery(this).find('.box-button').fadeOut('fast');
	   });
	   jQuery('.small-graph-box .box-close').click(function() {
		  jQuery(this).closest('.small-graph-box').fadeOut(200);
		  return false;
	   });
	   
	    //CHARTS
	    function gd(year, day, month) {
			return new Date(year, month - 1, day).getTime();
		}
		
		graphArea2 = Morris.Area({
			element: 'hero-area',
			padding: 10,
        behaveLikeLine: true,
        gridEnabled: false,
        gridLineColor: '#dddddd',
        axes: true,
        resize: true,
        smooth:true,
        pointSize: 0,
        lineWidth: 0,
        fillOpacity:0.85,
			data: [
				{period: '2015 Q1', iphone: 2668, ipad: null, itouch: 2649},
				{period: '2015 Q2', iphone: 15780, ipad: 13799, itouch: 12051},
				{period: '2015 Q3', iphone: 12920, ipad: 10975, itouch: 9910},
				{period: '2015 Q4', iphone: 8770, ipad: 6600, itouch: 6695},
				{period: '2016 Q1', iphone: 10820, ipad: 10924, itouch: 12300},
				{period: '2016 Q2', iphone: 9680, ipad: 9010, itouch: 7891},
				{period: '2016 Q3', iphone: 4830, ipad: 3805, itouch: 1598},
				{period: '2016 Q4', iphone: 15083, ipad: 8977, itouch: 5185},
				{period: '2017 Q1', iphone: 10697, ipad: 4470, itouch: 2038},
			
			],
			lineColors:['#eb6f6f','#926383','#eb6f6f'],
			xkey: 'period',
            redraw: true,
            ykeys: ['iphone', 'ipad', 'itouch'],
            labels: ['All Visitors', 'Returning Visitors', 'Unique Visitors'],
			pointSize: 2,
			hideHover: 'auto',
			resize: true
		});
		
	   
	});
	</script>
<!-- calendar -->
 <script type="text/javascript" src="{{asset('public/backend/js/monthly.js')}}"></script>
	<script type="text/javascript">
		$(window).load( function() {

			$('#mycalendar').monthly({
				mode: 'event',
				
			});

			$('#mycalendar2').monthly({
				mode: 'picker',
				target: '#mytarget',
				setWidth: '250px',
				startHidden: true,
				showTrigger: '#mytarget',
				stylePast: true,
				disablePast: true
			});

		switch(window.location.protocol) {
		case 'http:':
		case 'https:':
		// running on a server, should be good.
		break;
		case 'file:':
		alert('Just a heads-up, events will not work when run locally.');
		}

		});
	</script>

    <script type="text/javascript">
        $(document).ready(function(){
            $('#myTable').DataTable();
        });
    </script>

    <script type="text/javascript">
        $('.binhluan_duyet_btn').click(function(){

            var comment_status = $(this).data('comment_status');
            var comment_id = $(this).data('comment_id');
            var comment_class_id = $(this).attr('id');

            if(comment_status==0){
                var alert= 'Duyet thành công';
            }else{
                var alert='khong duyet thanh cong';
            }

             $.ajax({
                url:'{{url("/allow-comment")}}',
                method:"POST",
                headers:{
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                data:{comment_status:comment_status,comment_id:comment_id,comment_class_id:comment_class_id},
                success:function(data){
                    location.reload();
                 $('#notifi_comment').html('<span class="text text-alert">'+alert+'</span>');
                }
                });    
           
        });
          $('.btn-reply-comment').click(function(){
            var comment_id = $(this).data('comment_id');
            var comment = $('.reply_comment_'+comment_id).val();      
            var comment_class_id = $(this).data('class_id');
             $.ajax({
                url:'{{url("/reply-comment")}}',
                method:"POST",
                headers:{
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                data:{comment:comment,comment_id:comment_id,comment_class_id:comment_class_id},
                success:function(data){
                    $('.reply_comment_'+comment_id).val('');
                 $('#notifi_comment').html('<span class="text text-alert">Trả lời bình luận thành công</span>');
                }
                });    
           
        });

    </script>
    <script type="text/javascript">
    $('.update_student_numberss').click(function(){

        var class_id = $(this).data('class_id');
        var student_number_limit = $('.student_number_limit_' + class_id).val(); 
        var order_code = $('.order_code').val();
        var _token=$('input[name="_token"]').val();

         $.ajax({
                url:'{{url('/update_student_qty')}}',
                method:'POST',
                data:{class_id:class_id,student_number_limit:student_number_limit,order_code:order_code,_token:_token},
                success:function(data){
                 alert("cap nhat so luong");
                }
                });    
        
        
    })
</script>
    <script type="text/javascript">
        $('.order_detail').change(function(){
            var order_status=$(this).val();
            var order_id=$(this).children(":selected").attr("id");
            var _token=$('input[name="_token"]').val();

          quantity = [];
          $('input[name="student_number_limit"]').each(function(){
            quantity.push($(this).val());
          }); 
           order_class_id = [];
          $('input[name="order_class_id"]').each(function(){
            order_class_id.push($(this).val());
          }); 
          j=0;
          for(i=0; i < order_class_id.length; i++){
            var order_number_qty= $('.student_number_limit_'+ order_class_id[i]).val();
            var order_student_qty_storage= $('.order_student_qty_storage_'+ order_class_id[i]).val();
            if(parseInt(order_number_qty)>parseInt(order_student_qty_storage)){
                j=j+1;
                if(j==1){
                    alert('So het cho de dat');
                }
                $('.color_qty_' + order_class_id[i]).css('background','#000');
            }
          
          }
          if(j==0){
          $.ajax({
                url:'{{url('/update_student_number')}}',
                method:'POST',
                data:{order_status:order_status,order_id:order_id,quantity:quantity,order_class_id:order_class_id,_token:_token},
                success:function(data){
                 alert("Thay đổi tình trạng thành công");
                }
                });
          }    
        });
    </script>
  
	<!-- //calendar -->
</body>
</html>