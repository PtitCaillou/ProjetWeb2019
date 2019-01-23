<?php

use Illuminate\Database\Seeder;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         $role_BDE = new Role();
    $role_BDE->name = 'BDE';
    $role_BDE->description = 'A BDE User';
    $role_BDE->save();
    $role_Student = new Role();
    $role_Student->name = 'Student';
    $role_Student->description = 'A Student User';
    $role_Student->save();
    }
}
