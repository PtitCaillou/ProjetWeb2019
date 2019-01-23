<?php

use Illuminate\Database\Seeder;

class EventSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::connection('mysql')->insert('insert into Event (name, description, author, status, media, type) values (?, ?, ?, ?, ?, ?)', 
                                                           ['Soiree BDE', 'Grosse soiree', '2', '2', '', '1'], 
                                                           ['Pic-nic', 'Pic-nic de Sancho', '1', '1', '', '1']);
    }
}
