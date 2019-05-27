<?php

use Illuminate\Database\Seeder;

class contactAgentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('contact_agents')->insert([
        	['name'=>'Pham Thi Thu ha','email'=>'ha.pham@student.passerellesnumeriques.org','phone'=>'0866487699','content'=>'Contact me','post_id'=>'1'],
        	['name'=>'Pham Ha','email'=>'haphamhappy@gmail.com','phone'=>'0866487699','content'=>'Contact me','post_id'=>'2'],
        	['name'=>'Pham Thi Ha','email'=>'phamthithuha769999@gmail.com','phone'=>'0866487699','content'=>'Contact me','post_id'=>'2'],
        	['name'=>'Pham Thu Ha','email'=>'thuhaphamdlb@gmail.com','phone'=>'0866487699','content'=>'Contact me','post_id'=>'1'],
        ]);
    }
}
