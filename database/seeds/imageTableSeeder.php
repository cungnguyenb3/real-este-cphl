<?php

use Illuminate\Database\Seeder;

class imageTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('images')->insert([
        	['title'=>'Beautiful','link'=>'','image'=>'img_1.jpg','post_id'=>'1'],
        	['title'=>'High','link'=>'','image'=>'img_1.jpg','post_id'=>'1'],
        	['title'=>'Wide','link'=>'','image'=>'img_1.jpg','post_id'=>'1'],
        	['title'=>'Beautiful','link'=>'','image'=>'img_1.jpg','post_id'=>'1'],
        	['title'=>'High','link'=>'','image'=>'img_1.jpg','post_id'=>'2'],
        	['title'=>'Wide','link'=>'','image'=>'img_1.jpg','post_id'=>'2'],
        	['title'=>'Beautiful','link'=>'','image'=>'img_1.jpg','post_id'=>'2'],
        ]);
    }
}
