<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//Auth phan quyen user

Route::get('/users','App\Http\Controllers\UsersController@index');
Route::post('/assign_roles','App\Http\Controllers\UsersController@assign_roles')->middleware('auth.roles');
Route::get('/add_user','App\Http\Controllers\UsersController@add_user')->middleware('auth.roles');
Route::post('/store-users','App\Http\Controllers\UsersController@store_users');
Route::get('/delete_user/{admin_id}','App\Http\Controllers\UsersController@delete_user')->middleware('auth.roles');
Route::get('/inpersonate/{admin_id}','App\Http\Controllers\UsersController@inpersonate');
Route::get('/inpersonate-destroy','App\Http\Controllers\UsersController@inpersonate_destroy');

//thống kê


//Home

Route::get('/','App\Http\Controllers\HomeController@index');
Route::get('/Home','App\Http\Controllers\HomeController@index');
Route::post('/tim_kiem','App\Http\Controllers\HomeController@search');

//Admin

Route::get('/admin','App\Http\Controllers\AdminController@index');
Route::get('/dashboard','App\Http\Controllers\AdminController@show_dashboard');
Route::post('/admin-dashboard','App\Http\Controllers\AdminController@dashboard');
Route::get('/logout','App\Http\Controllers\AdminController@logout');
Route::get('/quen-mat-khau','App\Http\Controllers\AdminController@quen_mat_khau');

// kế hoạch

Route::get('/ke-hoach','App\Http\Controllers\AdminController@ke_hoach');
Route::get('/len-ke-hoach','App\Http\Controllers\AdminController@len_ke_hoach')->middleware('director.roles');
Route::post('/luu-them-ke-hoach','App\Http\Controllers\AdminController@luu_them_ke_hoach')->middleware('director.roles');
Route::get('/sua-ke-hoach/{id}','App\Http\Controllers\AdminController@sua_ke_hoach')->middleware('director.roles');
Route::post('/dele-document-ks','App\Http\Controllers\AdminController@dele_document_ks')->middleware('director.roles');
Route::post('/cap-nhat-sua-ks/{id}','App\Http\Controllers\AdminController@cap_nhat_sua_ks')->middleware('director.roles');
Route::get('/xoa-ke-hoach/{id}','App\Http\Controllers\AdminController@xoa_ke_hoach')->middleware('director.roles');

//login fb

Route::get('/login-facebook','App\Http\Controllers\AdminController@login_facebook');
Route::get('/admin/callback','App\Http\Controllers\AdminController@callback_facebook');

//login gg

Route::get('/login-google','App\Http\Controllers\AdminController@login_google');
Route::get('/google/callback','App\Http\Controllers\AdminController@callback_google');

//Thematic

Route::get('/add_thematic','App\Http\Controllers\ThematicController@add_thematic')->middleware('add.roles');
Route::get('/all_thematic','App\Http\Controllers\ThematicController@all_thematic');
Route::post('/save_thematic','App\Http\Controllers\ThematicController@save_thematic')->middleware('add.roles');
Route::get('/unactive_thematic/{thematic_id}','App\Http\Controllers\ThematicController@unactive_thematic')->middleware('add.roles');
Route::get('/active_thematic/{thematic_id}','App\Http\Controllers\ThematicController@active_thematic')->middleware('add.roles');
Route::get('/edit_thematic/{thematic_id}','App\Http\Controllers\ThematicController@edit_thematic')->middleware('add.roles');
Route::post('/update_thematic/{thematic_id}','App\Http\Controllers\ThematicController@update_thematic')->middleware('add.roles');
Route::get('/delete_thematic/{thematic_id}','App\Http\Controllers\ThematicController@delete_thematic')->middleware('add.roles');

//Programming language

Route::get('/add_language','App\Http\Controllers\ProgrammingLanguageController@add_language')->middleware('add.roles');
Route::post('/save_language','App\Http\Controllers\ProgrammingLanguageController@save_language')->middleware('add.roles');
Route::get('/all_language','App\Http\Controllers\ProgrammingLanguageController@all_language');
Route::get('/unactive_language/{language_id}','App\Http\Controllers\ProgrammingLanguageController@unactive_language')->middleware('add.roles');
Route::get('/active_language/{language_id}','App\Http\Controllers\ProgrammingLanguageController@active_language')->middleware('add.roles');
Route::get('/edit_language/{language_id}','App\Http\Controllers\ProgrammingLanguageController@edit_language')->middleware('add.roles');
Route::post('/update_language/{language_id}','App\Http\Controllers\ProgrammingLanguageController@update_language')->middleware('add.roles');
Route::get('/delete_language/{language_id}','App\Http\Controllers\ProgrammingLanguageController@delete_language')->middleware('add.roles');

//Class

Route::get('/add_class','App\Http\Controllers\ClassController@add_class')->middleware('add.roles');
Route::post('/save_class','App\Http\Controllers\ClassController@save_class')->middleware('add.roles');

Route::get('/unactive_class/{class_id}','App\Http\Controllers\ClassController@unactive_class')->middleware('add.roles');
Route::get('/active_class/{class_id}','App\Http\Controllers\ClassController@active_class')->middleware('add.roles');

Route::get('/edit_class/{class_id}','App\Http\Controllers\ClassController@edit_class')->middleware('add.roles');
Route::post('/update_class/{class_id}','App\Http\Controllers\ClassController@update_class')->middleware('add.roles');

Route::get('/delete_class/{class_id}','App\Http\Controllers\ClassController@delete_class')->middleware('add.roles');

Route::get('/all_class','App\Http\Controllers\ClassController@all_class');

//comment
Route::post('/load-comment','App\Http\Controllers\ClassController@load_comment');
Route::post('/send-comment','App\Http\Controllers\ClassController@send_comment');

//quản lý bình luận admin
Route::get('/comment','App\Http\Controllers\ClassController@list_comment');
Route::post('/allow-comment','App\Http\Controllers\ClassController@allow_comment');
Route::post('/reply-comment','App\Http\Controllers\ClassController@reply_comment');


//view class details
Route::get('/view_class/{class_id}','App\Http\Controllers\ClassController@view_class_details');

//Home pages
Route::get('/chi-tiet-khoa-hoc/{class_id}','App\Http\Controllers\ClassController@details_class');
Route::get('/danh-muc-chuyen-de/{thematic_id}','App\Http\Controllers\ThematicController@show_thematic');
Route::get('/danh-muc-ngon-ngu/{language_id}','App\Http\Controllers\ProgrammingLanguageController@show_language');

//Cart

Route::post('/save_class_cart','App\Http\Controllers\CartController@save_class_cart');
Route::get('/show_class','App\Http\Controllers\CartController@show_class');
Route::get('/del_to_cart/{rowId}','App\Http\Controllers\CartController@del_to_cart');
Route::post('/update_cart_quantity','App\Http\Controllers\CartController@update_quantity');

//checkout

Route::get('/login_checkout','App\Http\Controllers\CheckoutController@login_checkout');
Route::post('/add_customer','App\Http\Controllers\CheckoutController@add_customer');
Route::get('/checkout','App\Http\Controllers\CheckoutController@checkout');
Route::post('/login_customer','App\Http\Controllers\CheckoutController@login_customer');
Route::get('/logout_checkout','App\Http\Controllers\CheckoutController@logout_checkout');
Route::post('/save_student','App\Http\Controllers\CheckoutController@save_student');
Route::get('/payment','App\Http\Controllers\CheckoutController@payment');

//Order
Route::post('/order_place','App\Http\Controllers\CheckoutController@order_place');
Route::post('/update_student_number','App\Http\Controllers\OrderController@update_student_number');
Route::post('/update_student_qty','App\Http\Controllers\OrderController@update_student_qty');



//add to ajax
Route::post('/add_cart_ajax','App\Http\Controllers\CartController@add_cart_ajax');
Route::get('/gio-hang','App\Http\Controllers\CartController@gio_hang');
Route::post('/update_cart','App\Http\Controllers\CartController@update_cart');
Route::get('/delete_class_home/{session_id}','App\Http\Controllers\CartController@delete_class_home');
Route::get('/del_all_cart','App\Http\Controllers\CartController@del_all_cart');

//coupon
Route::get('/insert_coupon','App\Http\Controllers\CouponController@insert_coupon')->middleware('add.roles');
Route::get('/all_coupon','App\Http\Controllers\CouponController@all_coupon');
Route::post('/insert_coupon_code','App\Http\Controllers\CouponController@insert_coupon_code');
Route::get('/delete_coupon/{coupon_id}','App\Http\Controllers\CouponController@delete_coupon')->middleware('add.roles');
Route::post('/check_coupon','App\Http\Controllers\CartController@check_coupon');
Route::get('/unset_coupon','App\Http\Controllers\CartController@unset_coupon');

//thanh toán
Route::post('/confirm_order','App\Http\Controllers\CheckoutController@confirm_order');

//manager order
Route::get('/view_order/{order_code}','App\Http\Controllers\OrderController@view_order');
Route::get('/manager_order','App\Http\Controllers\OrderController@manager_order');

//print order

Route::get('/print_order/{order_code}','App\Http\Controllers\OrderController@print_order');

//Manager Slider
Route::get('/insert_banner','App\Http\Controllers\SliderController@insert_banner')->middleware('add.roles');
Route::post('/insert_slider','App\Http\Controllers\SliderController@insert_slider')->middleware('add.roles');
Route::get('/all_banner','App\Http\Controllers\SliderController@manager_banner');
Route::get('/unactive_slider/{slider_id}','App\Http\Controllers\SliderController@unactive_slider')->middleware('add.roles');
Route::get('/active_slider/{slider_id}','App\Http\Controllers\SliderController@active_slider')->middleware('add.roles');
Route::get('/delete_slider/{slider_id}','App\Http\Controllers\SliderController@delete_slider')->middleware('add.roles');
Route::get('/edit_slider/{slider_id}','App\Http\Controllers\SliderController@edit_slider')->middleware('add.roles');
Route::post('/update_slider/{slider_id}','App\Http\Controllers\SliderController@update_slider')->middleware('add.roles');

// manager student

Route::get('/all_student','App\Http\Controllers\StudentController@all_student');
Route::get('/add_student','App\Http\Controllers\StudentController@add_student')->middleware('add.roles');
Route::post('/save_students','App\Http\Controllers\StudentController@save_students')->middleware('add.roles');
Route::get('/edit_student/{MaHocVien}','App\Http\Controllers\StudentController@edit_student')->middleware('add.roles');
Route::post('/save_edit_students/{id}','App\Http\Controllers\StudentController@save_edit_students')->middleware('add.roles');
Route::get('/delete_students/{id}','App\Http\Controllers\StudentController@delete_students')->middleware('add.roles');

//Manager Position
Route::get('/all_position','App\Http\Controllers\PositionController@all_position');
Route::get('/add_position','App\Http\Controllers\PositionController@add_position');
Route::post('/save_position','App\Http\Controllers\PositionController@save_position');
Route::get('/edit_position/{position_id}','App\Http\Controllers\PositionController@edit_position');
Route::post('/update_position/{position_id}','App\Http\Controllers\PositionController@update_position');
Route::get('/delete_position/{position_id}','App\Http\Controllers\PositionController@delete_position');

//Manager Employee
Route::get('/all_employee','App\Http\Controllers\EmployeeController@all_employee');
Route::get('/add_employee','App\Http\Controllers\EmployeeController@add_employee')->middleware('add.roles');
Route::post('/save_employee','App\Http\Controllers\EmployeeController@save_employee')->middleware('add.roles');
Route::get('/sua-thong-tin-nhan-vien/{id}','App\Http\Controllers\EmployeeController@edit_employee')->middleware('add.roles');
Route::post('/cap-nhat-nhan-vien/{id}','App\Http\Controllers\EmployeeController@update_employee')->middleware('add.roles');
Route::get('/xoa-nhan-vien/{id}','App\Http\Controllers\EmployeeController@del_employee')->middleware('add.roles');
Route::get('/thong-tin-ca-nhan','App\Http\Controllers\EmployeeController@thong_tin_ca_nhan');

//Contact
Route::get('/contact','App\Http\Controllers\ContactController@contact');
Route::get('/information','App\Http\Controllers\ContactController@information');
Route::get('/gioi-thieu','App\Http\Controllers\ContactController@gioi_thieu');
Route::get('/doi-ngu-giang-vien','App\Http\Controllers\ContactController@doi_ngu_giang_vien');


//import & export exel
Route::post('/export-csv','App\Http\Controllers\StudentController@export_csv');
Route::post('/import-csv','App\Http\Controllers\StudentController@import_csv');

//login Auth
Route::get('/register_auth','App\Http\Controllers\AuthController@register_auth');
Route::post('/register','App\Http\Controllers\AuthController@register');
Route::get('/login_auth','App\Http\Controllers\AuthController@login_auth');
Route::post('/login','App\Http\Controllers\AuthController@login');
Route::get('/logout_auth','App\Http\Controllers\AuthController@logout_auth');

//Danh mục tin tức (admin)
Route::get('/add-news-cate','App\Http\Controllers\NewsCate@add_news_cate')->middleware('add.roles');
Route::post('/save-news-cate','App\Http\Controllers\NewsCate@save_news_cate')->middleware('add.roles');
Route::get('/all-news-cate','App\Http\Controllers\NewsCate@all_news_cate');
Route::get('/edit-news-cate/{news_cate_id}','App\Http\Controllers\NewsCate@edit_news_cate');
Route::post('/update-news-cate/{news_cate_id}','App\Http\Controllers\NewsCate@update_news_cate')->middleware('add.roles');
Route::get('/delete-news-cate/{news_cate_id}','App\Http\Controllers\NewsCate@delete_news_cate')->middleware('add.roles');

// Viết bài tin tức (Admin)
Route::get('/add-news-post','App\Http\Controllers\NewsPostController@add_news_post');
Route::post('/save-news-post','App\Http\Controllers\NewsPostController@save_news_post');
Route::get('/all-news-post','App\Http\Controllers\NewsPostController@all_news_post');
Route::get('/sua-tin-tuc/{news_post_id}','App\Http\Controllers\NewsPostController@edit_news_post');
Route::post('/cap-nhat-tin-tuc/{news_post_id}','App\Http\Controllers\NewsPostController@update_news_post');

Route::get('/delete-news-post/{news_post_id}','App\Http\Controllers\NewsPostController@delete_news_post');

//Xuất tin tức ra Home
Route::get('/danh-muc-tin-tuc/{news_cate_slug}','App\Http\Controllers\NewsPostController@danh_muc_tin_tuc');
Route::get('/bai-viet/{news_post_slug}','App\Http\Controllers\NewsPostController@bai_viet');

//danh mục thông báo
Route::get('/all-cate-noti','App\Http\Controllers\NotiCateController@all_cate_noti');
Route::get('/add-noti-cate','App\Http\Controllers\NotiCateController@add_noti_cate')->middleware('add.roles');
Route::post('/save-noti-cate','App\Http\Controllers\NotiCateController@save_noti_cate')->middleware('add.roles');
Route::get('/delete-noti-cate/{noti_cate_id}','App\Http\Controllers\NotiCateController@delete_noti_cate')->middleware('add.roles');
Route::get('/edit-noti-cate/{noti_cate_id}','App\Http\Controllers\NotiCateController@edit_noti_cate')->middleware('add.roles');
Route::post('/update-noti-cate/{noti_cate_id}','App\Http\Controllers\NotiCateController@update_noti_cate')->middleware('add.roles');

//viết bài thông báo
Route::get('/danh-sach-thong-bao','App\Http\Controllers\PostNotification@all_notification_post');
Route::get('/viet-thong-bao','App\Http\Controllers\PostNotification@add_notification_post');
Route::post('/save-noti-post','App\Http\Controllers\PostNotification@save_noti_post');
Route::get('/kich-hoat-hien/{noti_post_id}','App\Http\Controllers\PostNotification@kich_hoat_hien')->middleware('add.roles');
Route::get('/kich-hoat-an/{noti_post_id}','App\Http\Controllers\PostNotification@kich_hoat_an')->middleware('add.roles');
Route::get('/chinh-sua-thong-bao/{noti_post_id}','App\Http\Controllers\PostNotification@edit_noti');
Route::post('/dele_document','App\Http\Controllers\PostNotification@dele_document');
Route::post('/cap-nhat-thong-bao/{noti_post_id}','App\Http\Controllers\PostNotification@update_noti_post');
Route::get('/xoa-thong-bao/{noti_post_id}','App\Http\Controllers\PostNotification@del_noti_post');

//Xuất thông báo ra Home

Route::get('/danh-muc-thong-bao/{noti_cate_slug}','App\Http\Controllers\PostNotification@danh_muc_thong_bao');
Route::get('/bai-viet-thong-bao/{noti_post_slug}','App\Http\Controllers\PostNotification@bai_viet_thong_bao');


//biểu đô

Route::post('/filter-by-date','App\Http\Controllers\AdminController@filter_by_date');
Route::post('/dashboard-filter','App\Http\Controllers\AdminController@dashboard_filter');
Route::get('/thong-ke','App\Http\Controllers\AdminController@thong_ke');

// kế toán
Route::get('/danh-sach-loai-thu-chi','App\Http\Controllers\ThuChiController@all_loaiThuChi');
Route::get('/them-loai-thu-chi','App\Http\Controllers\ThuChiController@add_loaiThuchi');
Route::post('/luu_loai_thu_chi','App\Http\Controllers\ThuChiController@save_loaiThuchi');
Route::get('/sua-loai-thu-chi/{Loai_id}','App\Http\Controllers\ThuChiController@edit_loaiThuchi');
Route::post('/cap-nhat-loai-thu-chi/{Loai_id}','App\Http\Controllers\ThuChiController@update_loaiThuchi');
Route::get('/xoa-loai-thu-chi/{Loai_id}','App\Http\Controllers\ThuChiController@del_loaiThuchi');

Route::get('/quan-ly-thu-chi','App\Http\Controllers\ThuChiController@all_thu_chi');
//
Route::get('/tao-khoan-thu','App\Http\Controllers\ThuChiController@tao_khoan_thu');
Route::post('/luu-khoan-thu','App\Http\Controllers\ThuChiController@luu_khoan_thu');
Route::get('/tao-khoan-chi','App\Http\Controllers\ThuChiController@tao_khoan_chi');
Route::post('/luu-khoan-chi','App\Http\Controllers\ThuChiController@luu_khoan_chi');

//quản lý lớp học
Route::get('/quan-ly-lop-hoc','App\Http\Controllers\LopHocController@quan_ly_lop_hoc');
Route::get('/them-lop-hoc','App\Http\Controllers\LopHocController@them_lop_hoc');
Route::post('/luu-tao-lop','App\Http\Controllers\LopHocController@luu_tao_lop');
Route::get('/danh-sach-lop','App\Http\Controllers\LopHocController@danh_sach_lop');
Route::get('/danh-sach-hoc-vien/{MaLop}','App\Http\Controllers\LopHocController@danh_sach_hoc_vien');
Route::get('/nhap-diem/{MaHocVien}','App\Http\Controllers\LopHocController@nhap_diem');
Route::post('/luu-nhap-diem','App\Http\Controllers\LopHocController@luu_nhap_diem');
Route::get('/sua-diem/{id}','App\Http\Controllers\LopHocController@sua_diem');
Route::post('/cap-nhat-diem/{id}','App\Http\Controllers\LopHocController@cap_nhat_diem');


Route::get('/sua-lop/{id}','App\Http\Controllers\LopHocController@sua_lop');
Route::post('/cap-nhap-lop-hoc/{id}','App\Http\Controllers\LopHocController@cap_nhap_lop_hoc');
Route::get('/xoa-lop/{id}','App\Http\Controllers\LopHocController@xoa_lop');
//Long quanr ly sau thi
Route::get('danh-sach-thi-lai','App\Http\Controllers\LopHocController@danh_sach_thi_lai');
Route::get('ds-hv-thi-lai/{MaLop}','App\Http\Controllers\LopHocController@ds_hv_thi_lai');
Route::get('/in-danh-sach-thi-lai','App\Http\Controllers\LopHocController@in_danh_sach_thi_lai');
Route::get('/danh-sach-lop-cap-chung-chi','App\Http\Controllers\LopHocController@danh_sach_lop_cap_chung_chi');
Route::get('danh-sach-hoc-vien-cap-chung-chi/{MaLop}','App\Http\Controllers\LopHocController@ds_cap_cc');
Route::get('danh-sach-phuc-khao','App\Http\Controllers\LopHocController@ds_pk');
Route::get('phuc-khao/{MaLop}','App\Http\Controllers\LopHocController@phuc_khao');

// tính lương

Route::get('/danh-sach-luong','App\Http\Controllers\ThuChiController@danh_sach_luong');
Route::get('/tinh-luong','App\Http\Controllers\ThuChiController@tinh_luong');
Route::post('/luu-tinh-luong','App\Http\Controllers\ThuChiController@luu_tinh_luong');
Route::post('/in-tien-luong','App\Http\Controllers\ThuChiController@in_tien_luong');
Route::get('/xem-luong-ca-nhan','App\Http\Controllers\ThuChiController@xem_luong_ca_nhan');

//quản lý ca học
Route::get('/quan-ly-ca-hoc','App\Http\Controllers\LopHocController@danh_sach_ca_hoc');
Route::get('/them-ca-hoc','App\Http\Controllers\LopHocController@them_ca_hoc');
Route::post('/luu-ca-hoc','App\Http\Controllers\LopHocController@luu_ca_hoc');
Route::get('/sua-ca-hoc/{id}','App\Http\Controllers\LopHocController@sua_ca_hoc');
Route::post('/cap-nhat-ca-hoc/{id}','App\Http\Controllers\LopHocController@cap_nhat_ca_hoc');

Route::get('/lich-day','App\Http\Controllers\LopHocController@lich_day');
Route::get('/diem-danh-hoc-vien/{MaLop}','App\Http\Controllers\LopHocController@diem_danh_hoc_vien');

//chương trình đào tạo
Route::get('/chuong-trinh-dao-tao','App\Http\Controllers\CTDTController@list_daotao');
Route::get('/them-bai-viet-dao-tao','App\Http\Controllers\CTDTController@add_daotao');
Route::post('/luu-bai-viet-chuong-trinh-dao-tao','App\Http\Controllers\CTDTController@save_daotao');
Route::get('/danh-muc-dao-tao/{id}','App\Http\Controllers\CTDTController@write_daotao');
Route::get('sua-bai-viet-dao-tao/{id}','App\Http\Controllers\CTDTController@edit_daotao');
Route::get('xoa-bai-viet-dao-tao/{id}','App\Http\Controllers\CTDTController@del_daotao');
Route::post('cap-nhat-bai-viet-chuong-trinh-dao-tao/{id}','App\Http\Controllers\CTDTController@update_daotao');

//quản lý lịch thi
Route::get('/quan-ly-lich-thi','App\Http\Controllers\LichThiController@all_exam');
Route::get('/them-lich-thi','App\Http\Controllers\LichThiController@add_exam');
Route::post('/luu-them-lich-thi','App\Http\Controllers\LichThiController@save_exam');
Route::get('/sua-lich-thi/{id}','App\Http\Controllers\LichThiController@edit_exam');
Route::post('/cap-nhat-lich-thi/{id}','App\Http\Controllers\LichThiController@update_exam');
Route::get('/xoa-lich-thi/{id}','App\Http\Controllers\LichThiController@del_exam');
//lịch thi giáo viên
Route::get('/lich-thi','App\Http\Controllers\LichThiController@teacher_exam');
//tìm kiếm nhân viên, học viên
Route::post('tim-kiem-nhan-vien','App\Http\Controllers\EmployeeController@search_employee');
Route::post('tim-kiem-hoc-vien','App\Http\Controllers\StudentController@search_student');
//xuất phiếu chi 
Route::get('/xuat-phieu-chi','App\Http\Controllers\ThuChiController@export_chi');
Route::get('/xuat-phieu-thu','App\Http\Controllers\ThuChiController@export_phieu');
Route::get('/sua-thu-chi/{id}','App\Http\Controllers\ThuChiController@edit_thuchi');
