<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Admin extends Authenticatable
{
	 public $timestamp=false;
    protected $fillable=['admin_email','admin_password','admin_name','admin_phone','MaNhanVien'];
    protected $primaryKey='admin_id';
    protected $table='tbl_admin';

    public function mot(){
    	return $this->belongsTO('App\Models\Employee','MaNhanVien');
    }
    public function roles(){
 		return $this->belongsToMany('App\Models\Roles','tbl_admin_role');
 	}
 	public function getAuthPassword(){
 		return $this->admin_password;
 	}
 	public function hasAnyRoles($roles){
 		return null !== $this->roles()->whereIn('name',$roles)->first();
 	}
 	public function hasRole($role){
 		return null !== $this->roles()->where('name',$role)->first();
 	}
 	
 
}
