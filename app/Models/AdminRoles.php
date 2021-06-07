<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AdminRoles extends Model
{
   public $timestamp=false;
    protected $fillable=['admin_admin_id','roles_id_roles'];
    protected $primaryKey='id_admin_roles';
    protected $table='tbl_admin_roles';
}
