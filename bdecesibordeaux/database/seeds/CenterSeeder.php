<?php

use Illuminate\Database\Seeder;

class CenterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::connection('mysql2')->insert('insert into center (center) values (?)', ['Arras'], ['Caen'], ['Lille'], ['Rouen'],
                                                                                 ['Angouleme'], ['Brest'], ['La Rochelle'], ['Le Mans'], ['Nantes'], ['Saint-Nazaire'],
                                                                                 ['Paris'], ['Orleans'],
                                                                                 ['Dijon'], ['Nancy'], ['Reims'], ['Strasbourg'],
                                                                                 ['Bordeaux'], ['Montpellier'], ['Pau'], ['Toulouse'],
                                                                                 ['Aix-en-Provence'], ['Grenoble'], ['Lyon'], ['Nice'],
                                                                                 ['Alger'], ['Iberia'], ['Cameroun']);
    }
}
