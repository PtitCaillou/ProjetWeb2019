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
        DB::connection('mysql')->insert('insert into MediaInterraction (user, media, type) values (?, ?, ?)',
                                                                       ['1', '1', '1'], 
                                                                       ['2', '2', '2'],
                                                                       ['3', '2', '3']);
    }
}
