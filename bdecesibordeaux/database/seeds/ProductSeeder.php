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
        DB::table('Product')->insert(['name' => 'Mug', 'description' => 'Joli mug', 'price' => '10', 'producttype_id' => '1']);
        DB::table('Product')->insert(['name' => 'Pull', 'description' => 'Tres joli pull', 'price' => '20', 'producttype_id' => '2']);
        DB::table('Product')->insert(['name' => 'T-Shirt', 'description' => 'T-Shirt tres mignon', 'price' => '15', 'producttype_id' => '3']);
    }
}
