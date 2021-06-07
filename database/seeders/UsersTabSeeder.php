<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Admin;
use App\Models\Roles;

class UsersTabSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Admin::truncate();

        $adminRoles = Roles::where('name','admin')->first();
        $directorRoles = Roles::where('name','director')->first();
        $teacherRoles = Roles::where('name','teacher')->first();
        $employeeRoles = Roles::where('name','employee')->first();
        $accountantRoles = Roles::where('name','accountant')->first();

        $admin = Admin::create([
        	'admin_name'=>'Hoa Anh Tuc',
        	'admin_email'=>'nguyendinhhuu64@gmail.com',
        	'admin_password'=>md5('123456'),
        	'admin_phone'=>'0398202124'
        ]);

         $director = Admin::create([
        	'admin_name'=>'Do Quyet Kieu Quang',
        	'admin_email'=>'DoQuyetKieuQuang@gmail.com',
        	'admin_password'=>md5('123456'),
        	'admin_phone'=>'0398202124'
        ]);

        $teacher = Admin::create([
        	'admin_name'=>'Hoang Trong Long',
        	'admin_email'=>'HoangTrongLong@gmail.com',
        	'admin_password'=>md5('123456'),
        	'admin_phone'=>'0398202124'
        ]);

         $employee = Admin::create([
          'admin_name'=>'Le Xuan Hong',
          'admin_email'=>'LeXuanHong@gmail.com',
          'admin_password'=>md5('123456'),
          'admin_phone'=>'0398202124'
        ]);

          $accountant = Admin::create([
          'admin_name'=>'Dang Thi Minh Thu',
          'admin_email'=>'DangThiMinhThu@gmail.com',
          'admin_password'=>md5('123456'),
          'admin_phone'=>'0398202124'
        ]);

          $admin->roles()->attach($adminRoles);
          $director->roles()->attach($directorRoles);
          $employee->roles()->attach($employeeRoles);
          $teacher->roles()->attach($teacherRoles);
          $accountant->roles()->attach($accountantRoles);
    }
}
