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
        DB::connection('mysql')->insert('insert into EventInterraction (user_id, event_id, interractiontype_id, content) values (?, ?, ?, ?)',
                                                                       ['1', '1', '1', ''], 
                                                                       ['2', '2', '2', 'Super'],
                                                                       ['3', '3', '3', 'Pas ouf']);
    }
}
