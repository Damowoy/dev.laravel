<?php

use Illuminate\Database\Seeder;

class RolleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('rolle')->insert([
            'name' => 'customer',
        ]);
        DB::table('rolle')->insert([
            'name' => 'manager',
        ]);
        DB::table('rolle')->insert([
            'name' => 'engener',
        ]);
    }
}
