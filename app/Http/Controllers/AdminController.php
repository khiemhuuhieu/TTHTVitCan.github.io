<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\Social;
use App\Models\login;
use Socialite;
use Session;
use Auth;
use Carbon\Carbon;
use App\Models\NotiCate;
use App\Models\NewsCategory;
use App\Models\KeHoach;
use App\Models\Statistic;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
session_start();

class AdminController extends Controller
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
//login gg
     public function login_google(){
        return Socialite::driver('google')->redirect();
   }
    public function callback_google(){
        $users = Socialite::driver('google')->stateless()->user();
        $authUser = $this->findOrCreateUser($users,'google');
        if($authUser){

        $account_name = Login::where('admin_id',$authUser->user)->first();
        Session::put('admin_name',$account_name->admin_name);
        Session::put('login_normal',true);
        Session::put('admin_id',$account_name->admin_id);
        Session::put('admin_email',$account_name->admin_email);
        Session::put('MaNhanVien',$account_name->MaNhanVien);

        }elseif($hieu){

            $account_name = Login::where('admin_id',$authUser->user)->first();
            Session::put('admin_name',$account_name->admin_name);
            Session::put('normal',true);
            Session::put('admin_id',$account_name->admin_id);
            Session::put('admin_email',$account_name->admin_email);
            Session::put('MaNhanVien',$account_name->MaNhanVien);
        }
        return redirect('/dashboard')->with('message', 'Đăng nhập Admin thành công');
      
       
    }
    public function findOrCreateUser($users,$provider){
        $authUser = Social::where('provider_user_id', $users->id)->first();
        if($authUser){

            return $authUser;
        }else{
            $hieu = new Social([
            'provider_user_id' => $users->id,
            'provider' => strtoupper($provider)
        ]);

        $orang = Login::where('admin_email',$users->email)->first();

            if(!$orang){
                $orang = Login::create([
                    'admin_name' => $users->name,
                    'admin_email' => $users->email,
                    'admin_password' => '',
                    'admin_phone' => ''
                ]);
            }
        $hieu->Login()->associate($orang);
        $hieu->save();
        return $hieu;
        }
    }

//login facebook
    public function login_facebook(){
        return Socialite::driver('facebook')->redirect();
    }

     public function callback_facebook(){
        $provider = Socialite::driver('facebook')->user();
        $account = Social::where('provider','facebook')->where('provider_user_id',$provider->getId())->first();
        if($account){
            //login in vao trang quan tri  
            $account_name = Login::where('admin_id',$account->user)->first();
            Session::put('admin_name',$account_name->admin_name);
            Session::put('login_normal',true);
            Session::put('admin_id',$account_name->admin_id);
            return redirect('/dashboard')->with('message', 'Đăng nhập Admin thành công');
        }else{

            $hieu = new Social([
                'provider_user_id' => $provider->getId(),
                'provider' => 'facebook'
            ]);

            $orang = Login::where('admin_email',$provider->getEmail())->first();

            if(!$orang){
                $orang = Login::Create([
                    'admin_name' => $provider->getName(),
                    'admin_email' => $provider->getEmail(),
                    'admin_password' => '',
                    'admin_phone'=>'',

                ]);
            }
            $hieu->login()->associate($orang);
            $hieu->save();

            $account_name = Login::where('admin_id',$hieu->user)->first();

            Session::put('admin_name',$hieu->admin_name);
            Session::put('admin_id',$hieu->admin_id);
            Session::put('login_normal',true);
          return redirect('/dashboard')->with('message', 'Đăng nhập Admin thành công');
        } 
          
    }


    public function index(){
    	return view('admin_login');
    }
    public function show_dashboard(){
        $this->AuthLogin();
    	return view('admin.dashboard');
    }
    //Kiểm tra đăng nhập admin
    public function dashboard(Request $request){

        $data=$request->all();
        $admin_email=$data['admin_email'];
        $admin_password=md5($request->admin_password);
        $login= Login::where('admin_email',$admin_email)->where('admin_password',$admin_password)->first();
        if($login){
          $login_count = $login->count();  
        if($login_count>0){
            Session::put('admin_name',$login->admin_name);
            Session::put('admin_id',$login->admin_id);
            return Redirect::to('/dashboard');
        }
        }else{
            Session::put('message','Tai khoan hoac mat khau ban nhap khong dung. vui long nhap lai');
            return Redirect::to('/admin');
          }     
    	
    }
    //Đăng xuất admin
    public function logout(){
        $this->AuthLogin();
    	Session::put('admin_name',null);
    	Session::put('admin_id',null);
        Session::put('login_normal',null);
    	return Redirect::to('/admin');
    }
    public function filter_by_date(Request $request){
        $data = $request->all();
        $form_date = $data['form_date'];
        $to_date = $data['to_date'];

        $get = Statistic::whereBetween('order_date',[$form_date,$to_date])->orderby('order_date','ASC')->get();
       
        foreach($get as $key =>$val){

            $chart_data[] = array(

                'peroid' => $val->order_date,
                'order' => $val->total_order,
                'sales' => $val->tuition,
                'profit' => $val->clasfit,
                'quantity' =>$val->quantity
            ); 
        }
        echo $data= json_encode($chart_data); 
    }
    public function dashboard_filter(Request $request){
        $data = $request->all();
        $dau_thangNay = Carbon::now('Asia/Ho_Chi_Minh')->startOfMonth()->toDateString();
        $dau_thangTruoc = Carbon::now('Asia/Ho_Chi_Minh')->subMonth()->startOfMonth()->toDateString();
        $cuoi_thangTruoc = Carbon::now('Asia/Ho_Chi_Minh')->subMonth()->endOfMonth()->toDateString();

        $sub7days = Carbon::now('Asia/Ho_Chi_Minh')->subdays(7)->toDateString();
        $sub365days = Carbon::now('Asia/Ho_Chi_Minh')->subdays(365)->toDateString();

        $now = Carbon::now('Asia/Ho_Chi_Minh')->toDateString();

        if($data['dashboard_value'] == '7ngay'){
            $get = Statistic::whereBetween('order_date',[$sub7days,$now])->orderby('order_date','ASC')->get(); 
        }elseif($data['dashboard_value'] == 'thangtruoc'){
            $get = Statistic::whereBetween('order_date',[$dau_thangTruoc,$cuoi_thangTruoc])->orderby('order_date','ASC')->get();
        }elseif ($data['dashboard_value'] == 'thangnay') {
            $get = Statistic::whereBetween('order_date',[$dau_thangNay,$now])->orderby('order_date','ASC')->get();
        }else{
            $get = Statistic::whereBetween('order_date',[$sub365days,$now])->orderby('order_date','ASC')->get();
        }
        foreach ($get as $key => $val) {
             $chart_data[] = array(

                'peroid' => $val->order_date,
                'order' => $val->total_order,
                'sales' => $val->tuition,
                'profit' => $val->clasfit,
                'quantity' =>$val->quantity
            ); 
        }
        echo $data= json_encode($chart_data); 
    }
    public function quen_mat_khau(){
         $noti_cate = NotiCate::orderby('noti_cate_id','DESC')->get();  
         $news_cate = NewsCategory::orderby('news_cate_id','DESC')->get();
         $thematic = DB::table('tbl_thematic')->where('thematic_status','1')->orderby('thematic_id')->get();
         $language = DB::table('tbl_programminglanguage')->where('language_status','1')->orderby('language_id')->get();  
         return view('pages.checkout.forget_pass')->with(compact('thematic','language','news_cate','noti_cate')); 
    }
    public function thong_ke(){
        $this->AuthLogin();
        return view('admin.thongke.thongke');
    }
    public function ke_hoach(){
        $this->AuthLogin();
        $ke_hoach = KeHoach::orderby('id','DESC')->paginate(5);
        return view('admin.kehoach.kehoach')->with(compact('ke_hoach'));
    }
    public function len_ke_hoach(){
        $this->AuthLogin();
        return view('admin.kehoach.them_kehoach');
    }
    public function luu_them_ke_hoach(Request $request){
        $this->AuthLogin();
        $this->validation($request);
        $data = $request->all();
        $ke_hoach = new KeHoach();
        $ke_hoach->TenKeHoach = $data['TenKeHoach'];
        $ke_hoach->Slug = $data['Slug'];
      
       $get_document = $request->file('File');

        if($get_document)
        {
            $get_name_document = $get_document->getClientOriginalName();
            $name_document = current(explode('.',$get_name_document));
            $new_document = $name_document.rand(0,99).'.'.$get_document->getClientOriginalExtension();
            $get_document->move('public/uploads/product',$new_document);

            $ke_hoach->File = $new_document;
             date_default_timezone_set('Asia/Ho_Chi_Minh');
            $ke_hoach->created_at= now();
            $ke_hoach->save();
          
            Session::put('message',"Thêm kế hoạch thành công");
            return Redirect::to('ke-hoach');
        }else{

            Session::put('message',"Làm ơn thêm file");
            return Redirect()->back();
        }
    }
     public function validation(Request $request){
         return $this->validate($request,[
            'TenKeHoach'=>'required|min:20|max:100',
            'File'=>'required|mimetypes:application/pdf|max:10000',
            'File'=>'required|mimes:docx|max:10000',
        ],[
            'TenKeHoach.required'=>'Không được bỏ trống ',
            'File.required'=>'Làm ơn chọn File',        
        ]);
    }
    public function sua_ke_hoach($id){
        $this->AuthLogin();
        $sua = KeHoach::where('id',$id)->get();
        return view('admin.kehoach.sua_ke_hoach')->with(compact('sua'));
    }
    public function cap_nhat_sua_ks(Request $request,$id){
          $this->AuthLogin();

        $path_d = 'public/uploads/document/';
        $data =array();
        $data['TenKeHoach'] = $request->TenKeHoach;
        $data['Slug'] = $request->Slug;
        date_default_timezone_set('Asia/Ho_Chi_Minh');
        $data['created_at'] = now();

         $get_document = $request->file('File');

        if($get_document)
        {
            $get_name_document = $get_document->getClientOriginalName();
            $name_document = current(explode('.',$get_name_document));
            $new_document = $name_document.rand(0,99).'.'.$get_document->getClientOriginalExtension();
            $get_document->move('public/uploads/document',$new_document);
            $data['File'] =$new_document;

          $kehoach = KeHoach::find($id);
          if($kehoach->File){
            unlink($path_d.$noti->File);
          }
        }
        DB::table('tbl_kehoach')->where('id',$id)->update($data);
        return Redirect::to('ke-hoach');
    }
    public function dele_document_ks(Request $request){
        $this->AuthLogin();
        $path_d = 'public/uploads/document/';
        $ks = KeHoach::find($request->id);
        unlink($path_d.$ks->File);
        $ks->File= '';
        $ks->save();
    }
    public function xoa_ke_hoach($id){
        $this->AuthLogin();
        DB::table('tbl_kehoach')->where('id',$id)->delete();
        Session::put('message','Xóa thành công kế hoạch');
        return Redirect::to('ke-hoach');
    }
}
