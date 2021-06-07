<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\Http\Requests;
use Session;
use App\Models\DaoTao;
use App\Models\Thematic;
use App\Models\Slider;
use App\Models\NotiCate;
use App\Models\NewsCategory;
use Cart;
use DB;
use Auth;
session_start();

class CTDTController extends Controller
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
   public function list_daotao(){
   	$this->AuthLogin();
   	$daotao= DB::table('tbl_daotao')->join('tbl_thematic','tbl_daotao.danhmuc_id','=','tbl_thematic.thematic_id')->orderby('tbl_daotao.id','DESC')->paginate(6);
   	return view('admin.CTDT.ds_dao_tao')->with(compact('daotao'));
   }
   public function add_daotao(){
   	$this->AuthLogin();
   	$thematic = Thematic::where('thematic_status',1)->orderby('thematic_id','ASC')->get();
   	return view('admin.CTDT.them_dao_tao')->with(compact('thematic'));
   }
   public function save_daotao(Request $request){
   	$this->AuthLogin();
    $this->validation($request);
   	$data= $request->all();
   	$save_daotao = new DaoTao();
   	$save_daotao->TieuDe = $data['TenTieuDe'];
   	$save_daotao->Slug = $data['Slug'];
   	$save_daotao->ChiTiet = $data['ChiTiet'];
   	$save_daotao->danhmuc_id = $data['danhmuc_id'];
   	$save_daotao->HienThi = $data['HienThi'];
   	$save_daotao->save();
   	Session::put('message','Thêm thành công chuyên đề đào tạo');
   	return Redirect::to('chuong-trinh-dao-tao');
    }
    public function edit_daotao($id){
      $this->AuthLogin();
      $thematic = Thematic::orderby('thematic_id','DESC')->get();
      $dao_tao = DaoTao::where('id',$id)->get();
      return view('admin.CTDT.sua_dao_tao')->with(compact('dao_tao','thematic'));
    }
    public function update_daotao(Request $request,$id){
      $this->AuthLogin();
      $this->validations($request);
      $data = $request->all();
      $update_daotao = DaoTao::find($id);
      $update_daotao->TieuDe = $data['TenTieuDe'];
      $update_daotao->Slug = $data['Slug'];
      $update_daotao->ChiTiet = $data['ChiTiet'];
      $update_daotao->danhmuc_id = $data['danhmuc_id'];
      $update_daotao->save();
      Session::put('message','Cập nhật thành công chương trình đào tạo');
      return Redirect('chuong-trinh-dao-tao');
    }
    public function del_daotao($id){
      $this->AuthLogin();
      DB::table('tbl_daotao')->where('id',$id)->delete();
      Session::put('message','Xóa thành công chương trình đào tạo');
      return Redirect::to('chuong-trinh-dao-tao');
    }
    public function write_daotao(Request $request,$id){
      $noti_cate = NotiCate::orderby('noti_cate_id','DESC')->get();
        $news_cate = NewsCategory::orderby('news_cate_id','DESC')->get();
        $thematic = DB::table('tbl_thematic')->where('thematic_status','1')->orderby('thematic_id')->get();
        $language = DB::table('tbl_programminglanguage')->where('language_status','1')->orderby('language_id')->get();
        $all_class = DB::table('tbl_class')->where('class_status','1')->orderby('class_id','desc')->limit(8)->get();
        $daotao_cate = Thematic::where('thematic_id',$id)->take(1)->get();

        foreach($daotao_cate as $key =>$cate){
            $meta_title= $cate->thematic_name;
            $cate_id = $cate->thematic_id;
        }
        $ct_daotao = DaoTao::with('daotao_cate')->where('HienThi','1')->where('danhmuc_id',$cate_id)->get();
        return view('pages.daotao.ct_daotao')->with(compact('thematic','language','all_class','noti_cate','news_cate','ct_daotao','meta_title','daotao_cate'));
    }
     public function validation($request){
        return $this->validate($request,[
            'TenTieuDe'=>'required|min:10|max:300',
            'ChiTiet'=>'required',
        ],[
            'TenTieuDe.required'=>'Tiêu đề không được bỏ trống',
            'ChiTiet.required'=>'Chi tiết không được bỏ trống',
        ]);
    }
    public function validations($request){
        return $this->validate($request,[
            'TenTieuDe'=>'required|min:10|max:300',
            'ChiTiet'=>'required',
        ],[
            'TenTieuDe.required'=>'Tiêu đề không được bỏ trống',
            'ChiTiet.required'=>'Chi tiết không được bỏ trống',
        ]);
    }
}
