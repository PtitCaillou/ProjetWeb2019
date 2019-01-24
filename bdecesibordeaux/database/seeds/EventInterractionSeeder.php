<?php

use Illuminate\Database\Seeder;

class EventInterractionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('EventInterraction')->insert(['user_id' => '1', 'event_id' => '1', 'interractiontype_id' => '1', 'content' => '']);
        DB::table('EventInterraction')->insert(['user_id' => '2', 'event_id' => '2', 'interractiontype_id' => '2', 'content' => 'Super']);
        DB::table('EventInterraction')->insert(['user_id' => '3', 'event_id' => '3', 'interractiontype_id' => '3', 'content' => 'Pas ouf']);
    }
}
