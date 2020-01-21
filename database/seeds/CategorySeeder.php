<?php

use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	DB::table('categories')->insert([
    		'name' => "Pokémon",
    ]);

    	DB::table('categories')->insert([
    		'name' => "Yu-Gi-Oh!",
    ]);

    	DB::table('categories')->insert([
    		'name' => "Magic the Gathering",
    ]);

    	DB::table('categories')->insert([
    		'name' => "My Little Pony",
    ]);

    	DB::table('categories')->insert([
    		'name' => "Star Wars",
    ]);

    	DB::table('categories')->insert([
    		'name' => "Digimon",
    ]);

    	DB::table('categories')->insert([
    		'name' => "Dragon Ball Super",
    ]);

    	DB::table('categories')->insert([
    		'name' => "Harry Potter",
    ]);

    	DB::table('categories')->insert([
    		'name' => "Beyblade",
    ]);

    	DB::table('categories')->insert([
    		'name' => "Adventure Time Card Wars",
    ]);
	}
}
