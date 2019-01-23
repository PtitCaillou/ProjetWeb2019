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
        DB::connection('mysql')->insert('insert into EventInfo (date, event_id, price, location) values (?, ?, ?, ?)',
                                                                       ['2019-01-25', '1', '3', 'Bar la Casa, 33000 Bordeaux'], 
                                                                       ['2019-01-26', '2', '0', 'Jardin Public, 33000 Bordeaux']);
    }
}
