<?php

/**
 * Antonio J.Sánchez 
 * curso 2019/20
 */

use Illuminate\Database\Seeder;

class NotaTableSeeder extends Seeder
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
        for($i=0; $i < 30; $i++)
        	array_push($data, [
        						"idTab"      => $faker->numberBetween(1,10),
        						"texto"      => $faker->sentence(4),
        						"fecha"      => $faker->date(),
        						"completado" => $faker->boolean
	       					  ]) ;
        //
        DB::table('nota')->insert($data) ;
    }
}
