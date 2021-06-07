<?php

namespace Database\Factories;

use App\Models\Admin;
use App\Models\Roles;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use Faker\Generrator as Faker;
class UserFactory extends Factory
{


    $factory->define(Admin::class,function(Faker $faker){
        return [
            'admin_name'=>$faker->name,
            'admin_email'=>$faker->unique()->safeEmail,
            'admin_phone'=>'0398202124,'
            'admin_password'=>'e10adc3949ba59abbe56e057f20f883e',
        ];
    });
    $factory->afterCreating(Admin::class, function($admin,$faker){
        $roles = Roles::where('name','teacher')->get();
        $admin->roles()->sync($roles->pluck('id_roles')->toArray());
    });
    /**
     * The name of the factory's corresponding model.
    //  *
    //  * @var string
    //  */
    // protected $model = Admin::class;

    // /**
    //  * Define the model's default state.
    //  *
    //  * @return array
    //  */
    // public function definition()
    // {
    //     return [
    //         'admin_name' => $this->faker->name,
    //         'admin_email' => $this->faker->unique()->safeEmail,
    //         'admin_phone' =>'0398202124',
    //         'password' => 'e10adc3949ba59abbe56e057f20f883e',
    //     ];
    // }

    // /**
    //  * Indicate that the model's email address should be unverified.
    //  *
    //  * @return \Illuminate\Database\Eloquent\Factories\Factory
    //  */
    // public function unverified()
    // {
    //     return $this->state(function (array $attributes) {
    //         return [
    //             'email_verified_at' => null,
    //         ];
    //     });
    // }
}
