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
        	['name'=>'Khu chung cư và căn hộ ','description'=>'Khu chung cư và căn hộ'],
        	['name'=>'Nhà mặt phố','description'=>'Nhà mặt phố'],
        	['name'=>'Nhà nguyên căn','description'=>'Nhà nguyên căn'],
        	['name'=>'Biệt thự','description'=>'Biệt thự'],
        	['name'=>'Mặt bằng','description'=>'Mặt bằng'],
        	['name'=>'Phòng trọ và khách sạn','description'=>'Phòng trọ và khách sạn'],
        	['name'=>'Kho xưởng','description'=>'Kho xưởng'],
        ]);
    }
}
