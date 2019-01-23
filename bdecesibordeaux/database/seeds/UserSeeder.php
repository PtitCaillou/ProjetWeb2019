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
        DB::connection('mysql')->insert('insert into User (lastname, name, email, password, role_id) values (?, ?, ?, ?, ?)',
                                                          ['Jean', 'Jean', 'Jean.jean@viacesi.fr', 'jeanJean12', '2'],
                                                          ['Jeanne', 'Jeanne', 'Jeanne.jeanne@viacesi.fr', 'jeanneJeanne13', '1'],
                                                          ['Lamouche', 'zebi', 'zebi.lamouche@viacesi.fr', 'zebiLamouche1', '3']);
    $role_BDE = Role::where('name', 'BDE')->first();
    $role_Student  = Role::where('name', 'student')->first();
    $BDE = new User();
    $BDE->role = 'BDE role';
    $BDE->email = 'BDE@example.com';
    $BDE->password = bcrypt('secret');
    $BDE->save();
    $BDE->roles()->attach($role_BDE);
    $student = new User();
    $student->name = 'student Name';
    $student->lastname = 'student lastname';
    $student->role = 'student role';
    $student->email = 'student@example.com';
    $student->password = bcrypt('secret');
    $student->save();
    $student->roles()->attach($role_Student)
    }
}
