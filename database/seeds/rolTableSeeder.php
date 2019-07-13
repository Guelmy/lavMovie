<?php

use Illuminate\Database\Seeder;
use App\Role;

class rolTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //admin
        $role = new Role();
        $role->name = "admin";
        $role->save();

        //client
        $role = new Role();
        $role->name = "client";
        $role->save();
    }
}
