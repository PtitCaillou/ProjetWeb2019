<?php

use Illuminate\Database\Seeder;

class MediaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('Media')->insert(['path' => 'image1.png', 'description' => 'Pas ouf l\'image', 'user_id' => '1', 'status' => '1']);
        DB::table('Media')->insert(['path' => 'image2.png', 'description' => 'Mieux', 'user_id' => '2', 'status' => '1']);
    }
}
