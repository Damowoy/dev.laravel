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
        //php artisan db:seed
    
         $this->call(RolleTableSeeder::class);
         $this->call(StatusTableSeeder::class);
    }
}
