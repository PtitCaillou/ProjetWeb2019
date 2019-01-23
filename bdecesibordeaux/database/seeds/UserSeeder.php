<?php

use Illuminate\Database\Seeder;
use App\Role;

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
    }
}
