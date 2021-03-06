<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            BasketSeeder::class,
            EventInfoSeeder::class,
            EventInterractionSeeder::class,
            EventSeeder::class,
            EventStatusSeeder::class,
            EventTypeSeeder::class,
            InterractionTypeSeeder::class,
            MediaInterractionSeeder::class,
            MediaSeeder::class,
            ProductSeeder::class,
            ProductTypeSeeder::class,
            CenterSeeder::class,
            UserNationalSeeder::class,
            UserSeeder::class,
            RoleTableSeeder::class
        ]);
    }
}
