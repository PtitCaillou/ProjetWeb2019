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
        DB::table('Basket')->insert(['user_id' => '1', 'product_id' => '1', 'quantity' => '12', 'status' => '0']);
        DB::table('Basket')->insert(['user_id' => '3', 'product_id' => '3', 'quantity' => '1', 'status' => '0']);
        DB::table('Basket')->insert(['user_id' => '1', 'product_id' => '2', 'quantity' => '2', 'status' => '0']);
        DB::table('Basket')->insert(['user_id' => '2', 'product_id' => '1', 'quantity' => '12', 'status' => '1']);
        DB::table('Basket')->insert(['user_id' => '2', 'product_id' => '3', 'quantity' => '1', 'status' => '1']);
        DB::table('Basket')->insert(['user_id' => '2', 'product_id' => '2', 'quantity' => '2', 'status' => '1']);
    }
}
