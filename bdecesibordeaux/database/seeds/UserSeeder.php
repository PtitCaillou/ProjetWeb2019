<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::connection('mysql')->insert('insert into User (lastname, name, email, password, UserStatus_ID) values (?, ?, ?, ?, ?)',
                                                          ['Jean', 'Jean', 'Jean.jean@viacesi.fr', 'jeanJean12', '2'],
                                                          ['Jeanne', 'Jeanne', 'Jeanne.jeanne@viacesi.fr', 'jeanneJeanne13', '1'],
                                                          ['Lamouche', 'zebi', 'zebi.lamouche@viacesi.fr', 'zebiLamouche1', '3']);
    $role_BDE = Role::where('name', 'BDE')->first();
    $role_Student  = Role::where('name', 'student')->first();
    $BDE = new User();
    $BDE->name = 'BDE Name';
    $BDE->email = 'BDE@example.com';
    $BDE->password = bcrypt('secret');
    $BDE->save();
    $BDE->roles()->attach($role_BDE);
    $student = new User();
    $student->name = 'student Name';
    $student->email = 'student@example.com';
    $student->password = bcrypt('secret');
    $student->save();
    $student->roles()->attach($role_Student);
    }
}
