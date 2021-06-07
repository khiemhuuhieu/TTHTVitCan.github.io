<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\Models\ProgrammingLanguage;
use App\Models\OpenClass;
use App\Models\Thematic;
use App\Models\Employee;
use App\Models\LopHoc;
use App\Http\Requests;
use App\Models\Slider;
use App\Models\NewsCategory;
use App\Models\NotiCate;
use App\Models\Comment;
use Session;
use DB;
use Auth;
session_start();

class ClassController extends Controller
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
    public function load_comment(Request $request){
        $class_id = $request->class_id;

        $comments = Comment::where('comment_class_id',$class_id)->where('comment_parent_comment','=',0)->where('comment_status','0')->get();
        $comment_rep = Comment::with('class')->where('comment_parent_comment','>',0)->get();
        $output ='';
        foreach ($comments as $key => $value) {
            $output .= '

                <div class="row style_comment">
                     <div class="col-md-2">
                        <img src="'.url('/public/fontend/image/avuser.png').'" class="img img-responsive img-thumbnail" width="80%"/>
                     </div>
                     <div class="col-md-10">
                          <p style="color:green;">@'.$value->comment_name.'</p>
                          <p style="color:#000;">'.$value->comment_date.'</p>
                          <p>'.$value->comment.'</p>
                    </div>
                </div><p></p>
                ';
                foreach($comment_rep as $key =>$rep_comment){
                    if($rep_comment->comment_parent_comment == $value->comment_id){
                $output .=' <div class="row style_comment" style="margin:5px 40px;">
                      
                      <div class="col-md-2">
                        <img src="'.url('/public/fontend/image/avadmin.jpg').'" class="img img-responsive img-thumbnail" width="60%"/>
                     </div>
                     <div class="col-md-10">
                          <p style="color:blue;">@Admin</p>
                          <p style="color:#000;">'.$rep_comment->comment.'</p>
                          <p></p>
                    </div>
                </div><p></p> ';
            }
        }
        }
        echo $output;
    }
    public function send_comment(Request $request){
        $class_id = $request->class_id;
        $comment_name = $request->comment_name;
        $comment_content = $request->comment_content;
        $comment = new Comment();
        $comment->comment = $comment_content;
        $comment->comment_name = $comment_name;
        $comment->comment_class_id = $class_id;
        $comment->comment_status = 1;
        $comment->comment_parent_comment = 0;
        $comment->save();  
    }
    public function list_comment(){
        $this->AuthLogin();
        $comment = Comment::with('class')->where('comment_parent_comment','=',0)->orderby('comment_id','DESC')->get();
        $comment_rep = Comment::with('class')->where('comment_parent_comment','>',0)->get();
        return view('admin.comment.list_comment')->with(compact('comment','comment_rep'));
    }
    public function allow_comment(Request $request){
        $data = $request->all();
        $comment = Comment::find($data['comment_id']);
        $comment->comment_status = $data['comment_status'];
        $comment->save(); 
    }
    public function reply_comment(Request $request){
        $this->AuthLogin();
        $data = $request->all();
        $comment = new Comment();
        $comment->comment = $data['comment'];
        $comment->comment_class_id = $data['comment_class_id'];
        $comment->comment_parent_comment = $data['comment_id'];
        $comment->comment_status = 0;
        $comment->comment_name = 'Admin';
        $comment->save();
    }
     public function add_class(){
        $this->AuthLogin();
        $employee = Employee::where('ChucVu','2')->orderby('id')->get();
        $lop_hoc  = LopHoc::orderby('id','DESC')->get();
    	$thematic = DB::table('tbl_thematic')->orderby('thematic_id','desc')->get();
        $language = DB::table('tbl_programminglanguage')->orderby('language_id','desc')->get();
        return view('admin.class.add_class')->with(compact('thematic','language','lop_hoc','employee'));
    }
    public function all_class(){
        $this->AuthLogin();
    	$all_class=DB::table('tbl_class')->join('tbl_thematic','tbl_thematic.thematic_id','=','tbl_class.thematic_id')->join('tbl_programminglanguage','tbl_programminglanguage.language_id','=','tbl_class.language_id')->orderby('tbl_class.class_id','DESC')->paginate(6);
        $manager_class = view('admin.class.all_class')->with('all_class',$all_class);
        return view('admin_layout')->with('admin.class.all_class', $manager_class);
    }
     public function save_class(Request $Request){
        $this->AuthLogin();
        $this->validatetion($Request);
        $data=array();    
        $data['class_name'] = $Request->class_name;
        $data['class_code'] = $Request->class_code;
        $data['opending_day'] = $Request->opending_day;
        $data['schedule_day'] = $Request->schedule_day;
        $data['study_time'] = $Request->study_time;
        $data['tuition'] = $Request->tuition;       
        $data['address_class'] = $Request->address_class;
        $data['class_desc'] = $Request->class_desc;
        $data['student_number'] = $Request->student_number;
        $data['thematic_id'] = $Request->class_thematic;
        $data['language_id'] = $Request->class_language;
        $data['TinhTrang'] = $Request->TinhTrang;
        $data['class_status'] = 0;
        $data['student_sold'] = $Request->student_sold;
        
        $data['class_image']=$Request->class_image;
        $get_image=$Request->file('class_image');
        if($get_image)
        {
            $get_name_image=$get_image->getClientOriginalName();
            $name_image=current(explode('.',$get_name_image));
            $new_image=$name_image.rand(0,99).'.'.$get_image->getClientOriginalExtension();
            $get_image->move('public/uploads/product',$new_image);
            $data['class_image']=$new_image;
            DB::table('tbl_class')->INSERT($data);
            Session::put('message',"Thêm lớp học thành công");
            return Redirect::to('all_class');
        }else
        {
            $data['class_image']='';
            DB::table('tbl_class')->INSERT($data);
            Session::put('message',"Thêm lớp học thành công");
            return Redirect::to('all_class');
        }
     }
       public function unactive_class($class_id){
        $this->AuthLogin();
    	DB::table('tbl_class')->where('class_id',$class_id)->update(['class_status'=>1]);
    	Session::put('message','Kích hoạt hiện thành công');
    	return Redirect::to('all_class');
    }
    public function active_class($class_id){
        $this->AuthLogin();
    	DB::table('tbl_class')->where('class_id',$class_id)->update(['class_status'=>0]);
    	Session::put('message','Kích hoạt ẩn thành công');
    	return Redirect::to('all_class');
    }
    public function edit_class($class_id){
        $this->AuthLogin();
        $thematic = DB::table('tbl_thematic')->orderby('thematic_id','desc')->get();
        $language = DB::table('tbl_programminglanguage')->orderby('language_id','desc')->get();
        $edit_class = DB::table('tbl_class')->where('class_id',$class_id)->get();
        $manager_class = view('admin.class.edit_class')->with('edit_class',$edit_class)->with('thematic',$thematic)
        ->with('language',$language);
        return view('admin_layout')->with('admin.class.edit_class',$manager_class);
    }
    public function update_class(Request $Request, $class_id){
        // $this->validatetions($Request);
        $this->AuthLogin();
        $data=array();
        $data['class_name'] = $Request->class_name;
        $data['class_code'] = $Request->class_code;
        $data['opending_day'] = $Request->opending_day;
        $data['schedule_day'] = $Request->schedule_day;
        $data['study_time'] = $Request->study_time;
        $data['tuition'] = $Request->tuition;       
        $data['address_class'] = $Request->address_class;
        $data['class_desc'] = $Request->class_desc;
        $data['student_number'] = $Request->student_number;
        $data['thematic_id'] = $Request->thematic_name;
        $data['language_id'] = $Request->language_name;

        $get_image=$Request->file('class_image');
        if($get_image)
        {
            $get_name_image=$get_image->getClientOriginalName();
            $name_image=current(explode('.',$get_name_image));
            $new_image=$name_image.rand(0,99).'.'.$get_image->getClientOriginalExtension();
            $get_image->move('public/uploads/product',$new_image);
            $data['class_image']=$new_image;
            DB::table('tbl_class')->where('class_id',$class_id)->update($data);
            Session::put('message',"Cập nhật lớp học thành công");
            return Redirect::to('all_class');
        }
        DB::table('tbl_class')->where('class_id',$class_id)->update($data);
        Session::put('message',"Cập nhập lớp học thành công");
        return Redirect::to('all_class');
    }
    public function delete_class($class_id){
        $this->AuthLogin();
    	DB::table('tbl_class')->where('class_id',$class_id)->delete();
    	Session::put('message','Xóa thành công lớp học');
    	
    	return Redirect::to('all_class');
    }
    public function view_class_details($class_id){
        $this->AuthLogin();
        $order_detail = OpenClass::where('class_id',$class_id)->get();
        return view('admin.class.view_class_details')->with(compact('order_detail'));
    }
    //home
    public function details_class($class_id){
        $noti_cate = NotiCate::orderby('noti_cate_id','DESC')->get();
        $news_cate = NewsCategory::orderby('news_cate_id','DESC')->get();
        $slider= Slider::orderby('slider_id','DESC')->where('slider_status','1')->take(4)->get();
        $thematic = DB::table('tbl_thematic')->where('thematic_status','1')->orderby('thematic_id','desc')->get();
        $language = DB::table('tbl_programminglanguage')->where('language_status','1')->orderby('language_id','desc')->get();
        $detail_class = DB::table('tbl_class')->join('tbl_thematic','tbl_thematic.thematic_id','=','tbl_class.thematic_id')->join('tbl_programminglanguage','tbl_programminglanguage.language_id','=','tbl_class.language_id')->where('tbl_class.class_id',$class_id)->get();
        foreach($detail_class as $key => $val_class){
            $thematic_id = $val_class->thematic_id;
        }

        $related_class = DB::table('tbl_class')
       ->join('tbl_thematic','tbl_thematic.thematic_id','=','tbl_class.thematic_id')
       ->join('tbl_programminglanguage','tbl_programminglanguage.language_id','=','tbl_class.language_id')
       ->where('tbl_thematic.thematic_id',$thematic_id)
       ->WhereNotIn('tbl_class.class_id',[$class_id])->get();
    
        return view('pages.class.details_class')->with(compact('thematic','language','detail_class','related_class','slider','news_cate','noti_cate'));
    }
    public function validatetion(Request $request){
         return $this->validate($request,[
            'opending_day'=>'required',
            'schedule_day'=>'required|min:10|max:100',
            'study_time'=>'required',
            'tuition'=>'required|min:7|max:10',
            'address_class'=>'required|min:3|max:100',
            'student_number'=>'required',
            'student_sold'=>'required',
            'class_image'=>'required|mimes:jpg,bmp,png',
            'class_desc'=>'required',
        ],[
            'opending_day.required'=>'Làm ơn chọn ngày khai giảng',
            'schedule_day.required'=>'Làm ơn nhập thời khóa biểu',
            'study_time.required'=>'Làm ơn nhập thời lượng học',
            'tuition.required'=>'Làm ơn nhập học phí là số',
            'address_class.required'=>'Làm ơn nhập địa chỉ học',
            'student_number.required'=>'Làm ơn nhập số lượng học viên',
            'student_sold.required'=>'Làm ơn nhập số lượng học viên hiện tại',
            'class_image.required'=>'Làm ơn chọn file ảnh',
            'class_desc.required'=>'Làm ơn nhập chi tiết khóa học',

        ]);
    }
     public function validatetions(Request $request){
         return $this->validate($request,[
            'opending_day'=>'required',
            'schedule_day'=>'required|min:10|max:100',
            'study_time'=>'required',
            'tuition'=>'required|min:7|max:10',
            'address_class'=>'required|min:3|max:100',
            'student_number'=>'required',
            'student_sold'=>'required',
            'class_desc'=>'required',
        ],[
            'opending_day.required'=>'Làm ơn chọn ngày khai giảng',
            'schedule_day.required'=>'Làm ơn nhập thời khóa biểu',
            'study_time.required'=>'Làm ơn nhập thời lượng học',
            'tuition.required'=>'Làm ơn nhập học phí là số',
            'address_class.required'=>'Làm ơn nhập địa chỉ học',
            'student_number.required'=>'Làm ơn nhập số lượng học viên',
            'student_sold.required'=>'Làm ơn nhập số lượng học viên hiện tại',
            'class_desc.required'=>'Làm ơn nhập chi tiết khóa học',

        ]);
    }
}

