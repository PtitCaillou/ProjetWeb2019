<?php

use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::connection('mysql')->insert('insert into Product (name, description, price, producttype_id) values (?, ?, ?, ?)',
                                                             ['Mug', 'Joli mug', '10', '1'],
                                                             ['Pull', 'Tres joli pull', '20', '2'],
                                                             ['T-Shirt', 'T-Shirt tres mignon', '15', '3']);
    }
}
