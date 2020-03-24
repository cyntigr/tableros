<?php

/**
 * Antonio J.Sánchez 
 * curso 2019/20
 */

use Illuminate\Database\Seeder;

class TableroTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	// creamos un array vacío
        $data = [] ;

        // crear el objeto Faker
        $faker = Faker\Factory::create() ;

        // 
        for($i=0; $i < 10; $i++)
        	array_push($data, [
        						"nombre" => $faker->sentence(4),
        						"fecha"  => $faker->date()
	       					  ]) ;
        //
        DB::table('tablero')->insert($data) ;
    }
}
