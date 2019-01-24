<?php

use Illuminate\Database\Seeder;

class EventStatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('EventStatus')->insert(['status' => 'Pending']);
        DB::table('EventStatus')->insert(['status' => 'Valid']);
        DB::table('EventStatus')->insert(['status' => 'Invalid']);
    }
}
