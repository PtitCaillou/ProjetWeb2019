<?php

use Illuminate\Database\Seeder;

class ProductTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('ProductType')->insert(['type' => 'Mug']);
        DB::table('ProductType')->insert(['type' => 'Pull']);
        DB::table('ProductType')->insert(['type' => 'T-Shirt']);
    }
}
