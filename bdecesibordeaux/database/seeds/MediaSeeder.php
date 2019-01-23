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
        DB::connection('mysql')->insert('insert into Media (path, description, author) values (?, ?, ?)',
                                                           ['image1.png', 'Pas ouf l\'image', '1'],
                                                           ['image2.png', 'Mieux', '2']);
    }
}
