<?php

use Illuminate\Database\Seeder;
use App\Role;
use App\User;

class userTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //find roles
         $role_client = Role::where('name', 'client')->first();
         $role_admin = Role::where('name', 'admin')->first();

         //assing roles
         $user = new User();
        $user->first_name = "Carlos";
        $user->last_name = "Santos";
        $user->age = 21;
        $user->email = "admin@gmail.com";
        $user->password = bcrypt('1234');
        $user->save();
        $user->roles()->attach($role_admin);  //user admin

        $user = new User();
        $user->first_name = "David";
        $user->last_name = "Rodriguez";
        $user->age = 21;
        $user->email = "client@gmail.com";
        $user->password = bcrypt('1234');
        $user->save();
        $user->roles()->attach($role_client);  //user client
    }
}
