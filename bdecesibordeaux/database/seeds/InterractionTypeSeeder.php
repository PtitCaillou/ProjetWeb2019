<?php

use Illuminate\Database\Seeder;

class InterractionTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('InterractionType')->insert(['type' => 'Like']);
        DB::table('InterractionType')->insert(['type' => 'Comment']);
        DB::table('InterractionType')->insert(['type' => 'Signal']);
        DB::table('InterractionType')->insert(['type' => 'Delete']);
    }
}
