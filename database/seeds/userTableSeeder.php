<?php

use Illuminate\Database\Seeder;

class userTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
        	['username'=>'Pham Thi Thu Ha','first_name'=>'Pham Thi','last_name'=>'Thu Ha','gender'=>'1','email'=>'ha.pham@student.passerellesnumeriques.org','phone'=>'0866487699','address'=>'101B Lê Hữu trác','password'=>'$2y$10$mw0tWnXcTMYe9icLIL.WhuKjN5u6VTVKvBbDyZKmu2teCP10fUzKa','role_id'=>'3'],
        	['username'=>'Pham Ha','first_name'=>'Pham','last_name'=>'Ha','gender'=>'1','email'=>'thuhaphamdlb@gmail.com','phone'=>'0866487699','address'=>'101B Lê Hữu trác','password'=>'$2y$10$mw0tWnXcTMYe9icLIL.WhuKjN5u6VTVKvBbDyZKmu2teCP10fUzKa','role_id'=>'3'],
        	
        ]);
    }
}
