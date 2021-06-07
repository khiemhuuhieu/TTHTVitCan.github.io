<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\Http\Requests;
use App\Models\Slider;
use Session;
use DB;
use Auth;
use App\Models\NewsCategory;
use App\Models\NotiCate;
use App\Models\NewsPost;
use App\Models\NotificationPost;
use Illuminate\Support\Facades\Validator;

session_start();

class PostNotification extends Controller
{
    	public function AuthLogin(){
        if(Session::get('login_normal')){
            $admin_id =Session::get('admin_id');
        }else{
            $admin_id=Auth::id();
        }
         if($admin_id){
            return Redirect::to('/dashboard');
         }else{
            return Redirect::to('admin')->send();
       }
    }
    public function all_notification_post(){
        $this->AuthLogin();
       $all_noti_post = DB::table('tbl_noti_post')->join('tbl_notifi_cate','tbl_noti_post.noti_cate_id','=','tbl_notifi_cate.noti_cate_id')->orderby('tbl_noti_post.noti_post_id','desc')->paginate(6);

        $manager_noti_post = view('admin.notificationpost.all_notification_post')->with('all_noti_post',$all_noti_post);
        return view('admin_layout')->with('admin.notificationpost.all_notification_post', $manager_noti_post);
    }
    public function add_notification_post(){
    	 $this->AuthLogin();
    	$notifi_cate = DB::table('tbl_notifi_cate')->orderby('noti_cate_id','desc')->get();
        return view('admin.notificationpost.add_notification_post')->with(compact('notifi_cate'));
    }
    public function save_noti_post(Request $request){
    	 $this->AuthLogin();
         $this->validation($request);
        $data = $request->all();
        $notifi_post = new NotificationPost();
         
        $notifi_post->noti_post_title = $data['noti_post_title'];
        $notifi_post->noti_post_slug = $data['noti_post_slug']; 
        $notifi_post->noti_post_desc = $data['noti_post_desc']; 
        $notifi_post->noti_post_status = $data['noti_post_status'];
        $notifi_post->noti_cate_id = $data['noti_cate_id'];

        $get_document = $request->file('noti_post_document');

        if($get_document)
        {
            $get_name_document = $get_document->getClientOriginalName();
            $name_document = current(explode('.',$get_name_document));
            $new_document = $name_document.rand(0,99).'.'.$get_document->getClientOriginalExtension();
            $get_document->move('public/uploads/product',$new_document);

            $notifi_post->noti_post_document = $new_document;
            $notifi_post->save();
          
            Session::put('message',"Thêm bài viết thông báo thành công");
            return Redirect::to('/danh-sach-thong-bao');
        }
    }
    public function validation(Request $request){
         return $this->validate($request,[
            'noti_post_title'=>'required|max:255',
            'noti_post_desc'=>'required|min:10|max:200',
            'noti_post_document'=>'required|mimes:pdf,xlsx|max:1000',

        ],[
            'noti_post_title.required'=>'Tiêu đề không được bỏ trống',
            'noti_post_desc.required'=>'Mô tả không được bỏ trống',
            'noti_post_document.required'=>'Làm ơn chọn file ',
        ]);
    }

    public function kich_hoat_hien($noti_post_id){
        $this->AuthLogin();

        DB::table('tbl_noti_post')->where('noti_post_id',$noti_post_id)->update(['noti_post_status'=>1]);

        Session::put('message','Kích hoạt hiện thành công');
        return Redirect::to('danh-sach-thong-bao');
    }
    public function kich_hoat_an($noti_post_id){
        $this->AuthLogin();

        DB::table('tbl_noti_post')->where('noti_post_id',$noti_post_id)->update(['noti_post_status'=>0]);

        Session::put('message','Kích hoạt ẩn thành công');
        return Redirect::to('danh-sach-thong-bao');
    }
    public function edit_noti($noti_post_id){
        $this->AuthLogin();
        $noti_cate = NotiCate::orderby('noti_cate_id','DESC')->get();
        $edit_noti = NotificationPost::where('noti_post_id',$noti_post_id)->get();
        return view('admin.notificationpost.edit_notification')->with(compact('noti_cate','edit_noti'));
    }
    public function update_noti_post(Request $request, $noti_post_id){
        $this->AuthLogin();
        $this->validations($request);
        $path_d = 'public/uploads/document/';
        $data =array();
        $data['noti_post_title'] = $request->noti_post_title;
        $data['noti_post_slug'] = $request->noti_post_slug;
        $data['noti_post_desc'] = $request->noti_post_desc;
        $data['noti_cate_id'] = $request->noti_cate_id;
   

         $get_document = $request->file('noti_post_document');

        if($get_document)
        {
            $get_name_document = $get_document->getClientOriginalName();
            $name_document = current(explode('.',$get_name_document));
            $new_document = $name_document.rand(0,99).'.'.$get_document->getClientOriginalExtension();
            $get_document->move('public/uploads/document',$new_document);
            $data['noti_post_document'] =$new_document;

          $noti = NotificationPost::find($noti_post_id);
          if($noti->noti_post_document){
            unlink($path_d.$noti->noti_post_document);
          }
        }
        DB::table('tbl_noti_post')->where('noti_post_id',$noti_post_id)->update($data);
        return Redirect::to('danh-sach-thong-bao');

        }
         public function validations(Request $request){
         return $this->validate($request,[
            'noti_post_title'=>'required|max:255',
            'noti_post_desc'=>'required|min:10|max:200',

        ],[
            'noti_post_title.required'=>'Tiêu đề không được bỏ trống',
            'noti_post_desc.required'=>'Mô tả không được bỏ trống',
        ]);
    }

    public function dele_document(Request $request){
        $this->AuthLogin();
        $path_d = 'public/uploads/document/';
        $noti = NotificationPost::find($request->id);
        unlink($path_d.$noti->noti_post_document);
        $noti->noti_post_document= '';
        $noti->save();
    }
    public function del_noti_post($noti_post_id){
        $this->AuthLogin();
        DB::table('tbl_noti_post')->where('noti_post_id',$noti_post_id)->delete();
        Session::put('message','Xóa thành công bài viết thông báo');
        return Redirect()->back();
    }
    //home
    public function danh_muc_thong_bao(Request $request ,$noti_cate_slug){

        $noti_cate = NotiCate::orderby('noti_cate_id','DESC')->get();
        $news_cate = NewsCategory::orderby('news_cate_id','DESC')->get();

        $slider = Slider::orderby('slider_id','DESC')->where('slider_status','1')->take(4)->get();

        $thematic = DB::table('tbl_thematic')->where('thematic_status','1')->orderby('thematic_id')->get();
        $language = DB::table('tbl_programminglanguage')->where('language_status','1')->orderby('language_id')->get();
        $noticate = NotiCate::where('noti_cate_slug',$noti_cate_slug)->take(1)->get();

        foreach($noticate as $key =>$n_cate){
            $meta_title= $n_cate->noti_cate_name;
            $noti_id = $n_cate->noti_cate_id;
        }
        $noti_post = NotificationPost::with('notifi_post')->where('noti_post_status','1')->where('noti_cate_id',$noti_id)->paginate(10);
        return view('pages.notifiPost.list_noti_post')->with(compact('thematic','language','slider','news_cate','noti_post','meta_title','noti_cate'));
    }
    public function bai_viet_thong_bao(Request $request ,$noti_post_slug){

        $noti_cate = NotiCate::orderby('noti_cate_id','DESC')->get();
        $news_cate = NewsCategory::orderby('news_cate_id','DESC')->get();

        $slider = Slider::orderby('slider_id','DESC')->where('slider_status','1')->take(4)->get();
        $thematic = DB::table('tbl_thematic')->where('thematic_status','1')->orderby('thematic_id')->get();
        $language = DB::table('tbl_programminglanguage')->where('language_status','1')->orderby('language_id')->get();
        $noti_post = NotificationPost::with('notifi_post')->where('noti_post_status','1')->where('noti_post_slug',$noti_post_slug)->take(1)->get();
        foreach($noti_post as $key =>$p){
            $meta_title= $p->noti_post_title;
            $noti_id = $p->noti_cate_id;
            $noti_cate_id = $p->noti_cate_id;
        }
        $releted = NotificationPost::with('notifi_post')->where('noti_post_status','1')->where('noti_cate_id',$noti_cate_id)->WhereNotIn('noti_post_slug',[$noti_post_slug])->take(5)->get();
        return view('pages.notifiPost.notifi_details')->with(compact('thematic','language','slider','news_cate','noti_post','meta_title','noti_cate','releted'));     
    }

}
