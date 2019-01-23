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
    $role_BDE->role = 'BDE';
    $role_BDE->save();
    $role_Student = new Role();
    $role_Student->role = 'student';
    $role_Student->save();
    $role_Salarie = new Role();
    $role_Salarie->role = 'salarie';
    $role_Salarie->save();

    }
}
