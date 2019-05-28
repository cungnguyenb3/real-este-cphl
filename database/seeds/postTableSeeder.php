<?php

use Illuminate\Database\Seeder;

class postTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {	
    	DB::table('posts')->insert([
        	['name'=>'House at 16 Vo Van Kiet','price'=>'1000000','description'=>'High','location'=>'Son Tra district','main_image'=>'05.jpg','room'=>'4','number_of_bedroom'=>'4','number_of_bathroom'=>'6','area'=>'100','property_type_id'=>'2','year_build'=>'2016','price/m2'=>'1000000','transaction_type'=>'1','status'=>'0','user_id'=>'1'],
            ['name'=>'Dormistory at 101B Le Huu Trac','price'=>'10000000000','description'=>'Green - Clean - Nice','location'=>'Son Tra district','main_image'=>'hero_bg_3.jpg','room'=>'4','number_of_bedroom'=>'4','number_of_bathroom'=>'6','area'=>'100','property_type_id'=>'2','year_build'=>'2014','price/m2'=>'1000000','transaction_type'=>'1','status'=>'0','user_id'=>'2'],
        ]);
    }
}
