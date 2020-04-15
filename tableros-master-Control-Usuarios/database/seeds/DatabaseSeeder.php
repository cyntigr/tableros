<?php

/**
 * Antonio J.Sánchez 
 * curso 2019/20
 */

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
        			  TableroTableSeeder::class, 
        			  NotaTableSeeder::class
        			]);
    }
}
