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
        DB::table('Event')->insert(['name' => 'Soiree BDE', 'description' => 'Grosse soiree', 'user_id' => '2', 'eventstatus_id' => '2', 'media_id' => '1', 'eventtype_id' => '1']);
        DB::table('Event')->insert(['name' => 'Pic-nic', 'description' => 'Pic-nic de Sancho', 'user_id' => '1', 'eventstatus_id' => '1', 'media_id' => '2', 'eventtype_id' => '1']);
    }
}
