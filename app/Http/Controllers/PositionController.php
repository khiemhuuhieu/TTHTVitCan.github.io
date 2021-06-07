<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Redirect;
use App\Models\Students;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Models\Position;
use DB;
use Auth;
use Session;

class PositionController extends Controller
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
    public function all_position(){
    	$this->AuthLogin();
    	$all_position = Position::orderby('position_id','DESC')->get();
    	$manager_position = view('admin.position.all_position')->with('all_position',$all_position);
    	return view('admin_layout')->with('admin.position.all_position', $manager_position);
    }
    public function add_position(){
    	$this->AuthLogin();
    	return view('admin.position.add_position');
    }
    public function save_position(Request $Request){
    	$this->AuthLogin();
        $this->validation($Request);
    	$data = $Request->all();
    	$position = new Position();
    	$position->position_name = $data['position_name'];
    	$position->save();
    	return Redirect::to('/all_position');
    }
    public function edit_position($position_id){
        $this->AuthLogin();
        $edit_position = Position::where('position_id',$position_id)->get();
    	$manager_position = view('admin.position.edit_position')->with('edit_position',$edit_position);
    	return view('admin_layout')->with('admin.position.edit_position',$manager_position); 	
    }
    public function update_position(Request $Request , $position_id){
    	$this->AuthLogin();
    	$data = $Request->all();
        $this->validation($Request);
    	$update_position = Position::find($position_id);
    	$update_position->position_name = $data['position_name'];
    	$update_position->save();
    	return Redirect::to('all_position');
    }
    public function delete_position($position_id){
    	$this->AuthLogin();
    	DB::table('tbl_position')->where('position_id',$position_id)->delete();
    	return Redirect::to('all_position');
    }
     public function validation(Request $request){
         return $this->validate($request,[
            'position_name'=>'required|min:5|max:20',
        ],[
            'position_name.required'=>'Chức vụ không được bỏ trống',
        ]);
    }

}
