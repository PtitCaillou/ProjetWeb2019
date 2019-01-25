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
        DB::table('User')->insert(['lastname' => 'Jean', 'name' => 'Jean', 'email' => 'Jeanjean@viacesi.fr', 'password' => 'jeanJean12', 'role_id' => '2']);
        DB::table('User')->insert(['lastname' => 'Jeanne', 'name' => 'Jeanne', 'email' => 'Jeannejeanne@viacesi.fr', 'password' => 'jeanneJeanne13', 'role_id' => '1']);
        DB::table('User')->insert(['lastname' => 'Lamouche', 'name' => 'zebi', 'email' => 'zebilamouche@viacesi.fr', 'password' => 'zebiLamouche1', 'role_id' => '3']);
    }
}
