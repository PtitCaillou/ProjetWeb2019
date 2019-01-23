<?php

use Illuminate\Database\Seeder;

class InterractionTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::connection('mysql')->insert('insert into InterractionType (type) values (?)', ['Like'], ['Comment'], ['Signal'], ['Delete']);
    }
}
