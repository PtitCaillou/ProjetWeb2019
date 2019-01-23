<?php

use Illuminate\Database\Seeder;

class BasketSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::connection('mysql')->insert('insert into Basket (user, product, quantity) values (?, ?, ?)',
                                                            ['1', '1', '12'], 
                                                            ['3', '3', '1'],
                                                            ['1', '2', '2']);
    }
}
