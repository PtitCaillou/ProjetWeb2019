<?php

use Illuminate\Database\Seeder;

class UserNationalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::connection('mysql2')->insert('insert into User (lastname, name, email, password, center_id) values (?, ?, ?, ?, ?)',
                                                          ['Jean', 'Jean', 'Jean.jean@viacesi.fr', 'jeanJean12', '17'],
                                                          ['Jeanne', 'Jeanne', 'Jeanne.jeanne@viacesi.fr', 'jeanneJeanne13', '17'],
                                                          ['Lamouche', 'zebi', 'zebi.lamouche@viacesi.fr', 'zebiLamouche1', '17']);
    }
}
