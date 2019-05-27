<?php

use Illuminate\Database\Seeder;

class propertyTypeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('property_types')->insert([
        	['name'=>'Apartment','description'=>'Apartment'],
        	['name'=>'House','description'=>'House'],
        	['name'=>'Commercial','description'=>'Commercial'],
        	['name'=>'Garage','description'=>'Garage'],
        	['name'=>'Lot','description'=>'Lot'],
        ]);
    }   
}
