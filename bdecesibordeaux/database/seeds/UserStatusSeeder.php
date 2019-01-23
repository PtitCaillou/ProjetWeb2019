<?php

use Illuminate\Database\Seeder;

class UserStatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::connection('mysql')->insert('insert into UserStatus (status) values (?)', ['Etudiant'], ['Salarie'], ['Membre du BDE']);
    }
}
