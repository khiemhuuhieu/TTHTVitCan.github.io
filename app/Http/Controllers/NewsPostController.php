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
session_start();

class NewsPostController extends Controller
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
    public function add_news_post(){
        $this->AuthLogin();

        $news_cate = DB::table('tbl_news_category')->orderby('news_cate_id','desc')->get();
        return view('admin.news_post.add_news_post')->with(compact('news_cate'));
    }
      public function save_news_post(Request $Request){
        $this->AuthLogin();
        $this->validation($Request);
        $data = $Request->all();
        $news_post = new NewsPost();
         
        $news_post->news_post_title = $data['news_post_name'];
        $news_post->news_post_slug = $data['news_post_slug']; 
        $news_post->news_post_desc = $data['news_post_desc']; 
        $news_post->news_post_content = $data['news_post_content']; 
        $news_post->news_post_meta = $data['news_post_meta']; 
        $news_post->news_post_keyword = $data['news_post_keyword']; 
        $news_post->news_post_status = $data['news_post_status'];
        $news_post->news_cate_id = $data['news_cate_id'];

        $get_image=$Request->file('news_post_image');

        if($get_image)
        {
            $get_name_image=$get_image->getClientOriginalName();
            $name_image=current(explode('.',$get_name_image));
            $new_image=$name_image.rand(0,99).'.'.$get_image->getClientOriginalExtension();
            $get_image->move('public/uploads/post',$new_image);

            $news_post->news_post_image =$new_image;
            $news_post->save();
          
            Session::put('message',"Thêm bài viết thành công");
            return Redirect::to('/all-news-post');
        }else{

            Session::put('message',"Làm ơn thêm ảnh");
            return Redirect()->back();
        }
    
     }
      public function validation(Request $request){
         return $this->validate($request,[
            'news_post_name'=>'required|min:10|max:200',
            'news_post_desc'=>'required|max:1000',
            'news_post_content'=>'required',
            'news_post_meta'=>'required|max:100',
            'news_post_keyword'=>'required',
            'news_post_image'=>'required|mimes:jpg,bmp,png',
        ],[
            'news_post_name.required'=>'Tiêu đề không được bỏ trống',
            'news_post_desc.required'=>'Mô tả ngắn không được bỏ trống',
            'news_post_content.required'=>'Nội dung bài viết không được bỏ trống',
            'news_post_meta.required'=>'Không được bỏ trống',
            'news_post_keyword.required'=>'Từ khóa không được bỏ trống',
            'news_post_image.required'=>'Hình ảnh không được bỏ trống',
        ]);
    }
     public function all_news_post(){
        $this->AuthLogin();

    	$all_news_post = DB::table('tbl_news_post')->join('tbl_news_category','tbl_news_category.news_cate_id','=','tbl_news_post.news_cate_id')->orderby('tbl_news_post.news_post_id','desc')->paginate(4);

        $manager_news_post = view('admin.news_post.all_news_post')->with('all_news_post',$all_news_post);
        return view('admin_layout')->with('admin.news_post.all_news_post', $manager_news_post);
    }
    public function edit_news_post($news_post_id){
        $this->AuthLogin();
        $edit_news_post = NewsPost::where('news_post_id',$news_post_id)->get();
        $cate_post = NewsCategory::orderby('news_cate_id','DESC')->get(); 
        return view('admin.news_post.edit_news_post')->with(compact('edit_news_post','cate_post'));
    }
    public function update_news_post(Request $Request, $news_post_id){
        $this->AuthLogin();
         $data=array();
        $data['news_post_title'] = $Request->news_post_title;
        $data['news_post_slug'] = $Request->news_post_slug;
        $data['news_post_desc'] = $Request->news_post_desc;
        $data['news_post_content'] = $Request->news_post_content;
        $data['news_post_meta'] = $Request->news_post_meta;       
        $data['news_post_keyword'] = $Request->news_post_keyword;
        $data['news_cate_id'] = $Request->news_cate_id;
        $data['news_post_status'] = $Request->news_post_status;

        $get_image=$Request->file('news_post_image');
        if($get_image)
        {
            $get_name_image=$get_image->getClientOriginalName();
            $name_image=current(explode('.',$get_name_image));
            $new_image=$name_image.rand(0,99).'.'.$get_image->getClientOriginalExtension();
            $get_image->move('public/uploads/post',$new_image);
            $data['news_post_image']=$new_image;
            DB::table('tbl_news_post')->where('news_post_id',$news_post_id)->update($data);
            Session::put('message',"Cập nhật bài viết tin tức thành công");
            return Redirect::to('all-news-post');
        }
        DB::table('tbl_news_post')->where('news_post_id',$news_post_id)->update($data);
        Session::put('message',"Cập nhập bài viết tin tức thành công");
        return Redirect::to('all-news-post');

    }
    public function delete_news_post($news_post_id){
        $this->AuthLogin();
        $news_post = NewsPost::find($news_post_id);
        $news_post_image = $news_post->news_post_image;
    
        if($news_post_image){
        	$path ='public/uploads/post/'.$news_post_image; 
            unlink($path); 
        } 
        $news_post->delete(); 

    	Session::put('message','Xóa thành công bài viết');
    	
    	return Redirect()->back();
    }
    public function danh_muc_tin_tuc(Request $request ,$news_cate_slug){
        $noti_cate = NotiCate::orderby('noti_cate_id','DESC')->get();
        $news_cate = NewsCategory::orderby('news_cate_id','DESC')->get();
        $slider = Slider::orderby('slider_id','DESC')->where('slider_status','1')->take(4)->get();
        $thematic = DB::table('tbl_thematic')->where('thematic_status','1')->orderby('thematic_id')->get();
        $language = DB::table('tbl_programminglanguage')->where('language_status','1')->orderby('language_id')->get();
        $all_class = DB::table('tbl_class')->where('class_status','1')->orderby('class_id','desc')->limit(8)->get();
        $newscate = NewsCategory::where('news_cate_slug',$news_cate_slug)->take(1)->get();

        foreach($newscate as $key =>$cate){
            $meta_title= $cate->news_cate_name;
            $cate_id = $cate->news_cate_id;
        }
        $news_post = NewsPost::with('news_cate')->where('news_post_status','1')->where('news_cate_id',$cate_id)->orderby('news_post_id','DESC')->paginate(6);
        return view('pages.news_post.list_news_post')->with(compact('thematic','language','all_class','slider','news_cate','news_post','meta_title','noti_cate'));
    }
    public function bai_viet(Request $request ,$news_post_slug){

        $noti_cate = NotiCate::orderby('noti_cate_id','DESC')->get();
        $news_cate = NewsCategory::orderby('news_cate_id','DESC')->get();
        $slider = Slider::orderby('slider_id','DESC')->where('slider_status','1')->take(4)->get();
        $thematic = DB::table('tbl_thematic')->where('thematic_status','1')->orderby('thematic_id')->get();
        $language = DB::table('tbl_programminglanguage')->where('language_status','1')->orderby('language_id')->get();
        $all_class = DB::table('tbl_class')->where('class_status','1')->orderby('class_id','desc')->limit(8)->get();
        $news_post = NewsPost::with('news_cate')->where('news_post_status','1')->where('news_post_slug',$news_post_slug)->take(1)->get();
        foreach($news_post as $key =>$p){
            $meta_title= $p->news_post_title;
            $content = $p->news_post_content;
            $cate_id = $p->news_cate_id;
            $news_cate_id = $p->news_cate_id;
        }
        $releted = NewsPost::with('news_cate')->where('news_post_status','1')->where('news_cate_id',$news_cate_id)->WhereNotIn('news_post_slug',[$news_post_slug])->take(5)->get();
        return view('pages.news_post.news_details')->with(compact('thematic','language','all_class','slider','news_cate','news_post','meta_title','noti_cate','releted'));
    }

}
