<?php

use Illuminate\Database\Seeder;

class EventInfoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('EventInfo')->insert(['date' => '2019-01-25', 'event_id' => '1', 'price' => '3', 'location' => 'Bar la Casa, 33000 Bordeaux']);
        DB::table('EventInfo')->insert(['date' => '2019-01-26', 'event_id' => '2', 'price' => '0', 'location' => 'Jardin Public, 33000 Bordeaux']);
    }
}
