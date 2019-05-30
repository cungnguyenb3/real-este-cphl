<?php

use Illuminate\Database\Seeder;

class slideTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       DB::table('slides')->insert([
            ['post_id'=>'1','pos'=>'1'],
            ['post_id'=>'2','pos'=>'2'],
            ['post_id'=>'2','pos'=>'3'],
        ]);
    }
}
