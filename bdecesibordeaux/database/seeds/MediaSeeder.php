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
        DB::table('Media')->insert(['path' => 'images/bracelet.jpg', 'description' => 'Bracelet', 'user_id' => '1', 'status' => '1']);
        DB::table('Media')->insert(['path' => 'images/Capture.jpg', 'description' => 'Sacoche', 'user_id' => '1', 'status' => '1']);
        DB::table('Media')->insert(['path' => 'images/evenement.jpg', 'description' => 'Evenement', 'user_id' => '1', 'status' => '1']);
        DB::table('Media')->insert(['path' => 'images/event.jpg', 'description' => 'Eevent', 'user_id' => '1', 'status' => '1']);
        DB::table('Media')->insert(['path' => 'images/goodies-bde.jpg', 'description' => 'Goodies BDE', 'user_id' => '1', 'status' => '1']);
        DB::table('Media')->insert(['path' => 'images/halloween.png', 'description' => 'Halloween', 'user_id' => '1', 'status' => '1']);
        DB::table('Media')->insert(['path' => 'images/herisson.jpg', 'description' => 'Herrisson', 'user_id' => '1', 'status' => '1']);
        DB::table('Media')->insert(['path' => 'images/Marteau.jpg', 'description' => 'Marteau', 'user_id' => '1', 'status' => '1']);
        DB::table('Media')->insert(['path' => 'images/mug-bde.jpg', 'description' => 'Mug BDE', 'user_id' => '1', 'status' => '1']);
        DB::table('Media')->insert(['path' => 'images/mug.jpg', 'description' => 'Mug', 'user_id' => '1', 'status' => '1']);
        DB::table('Media')->insert(['path' => 'images/pull.jpg', 'description' => 'Pull', 'user_id' => '1', 'status' => '1']);
        DB::table('Media')->insert(['path' => 'images/PullCesi.jpg', 'description' => 'Pull du CESI', 'user_id' => '1', 'status' => '1']);
    }
}
