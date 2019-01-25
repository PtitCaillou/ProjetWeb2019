<?php

use Illuminate\Database\Seeder;

class EventTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('EventType')->insert(['type' => 'Punctual']);
        DB::table('EventType')->insert(['type' => 'Recurring']);
    }
}
