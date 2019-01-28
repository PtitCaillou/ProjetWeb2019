<?php

use Illuminate\Database\Seeder;

class MediaInterractionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('MediaInterraction')->insert(['user_id' => '1', 'media_id' => '1', 'interractiontype_id' => '1', 'content' => '']);
        DB::table('MediaInterraction')->insert(['user_id' => '2', 'media_id' => '2', 'interractiontype_id' => '2', 'content' => 'Super']);
        DB::table('MediaInterraction')->insert(['user_id' => '3', 'media_id' => '2', 'interractiontype_id' => '3', 'content' => 'Pas ouf']);
    }
}
