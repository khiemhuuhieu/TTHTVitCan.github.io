<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(RolesTabSeeder::class);
        $this->call(UsersTabSeeder::class);
        
        // \App\Models\User::factory(10)->create();
    }
}
