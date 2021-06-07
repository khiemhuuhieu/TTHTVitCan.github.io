<?php

namespace Database\Seeders;
use App\Models\Roles;
use Illuminate\Database\Seeder;

class RolesTabSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Roles::truncate();
        Roles::create(['name'=>'admin']);
        Roles::create(['name'=>'director']);
        Roles::create(['name'=>'teacher']);
        Roles::create(['name'=>'employee']);
        Roles::create(['name'=>'accountant']);
    }
}
