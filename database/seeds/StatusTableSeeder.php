<?php

use Illuminate\Database\Seeder;

class StatusTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('status')->insert([
            'name' => 'open',
        ]);
        DB::table('status')->insert([
            'name' => 'close',
        ]);
        DB::table('status')->insert([
            'name' => 'reopen',
        ]);
    }
}
