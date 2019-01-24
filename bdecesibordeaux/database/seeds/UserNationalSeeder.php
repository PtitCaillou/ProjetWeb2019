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
        DB::table('User')->insert(['lastname' => 'Jean', 'name' => 'Jean', 'email' => 'Jean.jean@viacesi.fr', 'password' => 'jeanJean12', 'center_id' => '17']);
        DB::table('User')->insert(['lastname' => 'Jeanne', 'name' => 'Jeanne', 'email' => 'Jeanne.jeanne@viacesi.fr', 'password' => 'jeanneJeanne13', 'center_id' => '17']);
        DB::table('User')->insert(['lastname' => 'Lamouche', 'name' => 'zebi', 'email' => 'zebi.lamouche@viacesi.fr', 'password' => 'zebiLamouche1', 'center_id' => '17']);
    }
}
