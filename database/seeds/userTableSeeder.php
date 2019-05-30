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
            ['username'=>'Super Admin','email'=>'superadmin@gmail.com','password'=>'password','role_id'=>1],
            ['username'=>'Admin','email'=>'admin@gmail.com','password'=>'password','role_id'=>2],
            ['username'=>'User','email'=>'user@gm1ail.com','password'=>'password','role_id'=>3],
        ]);
    }
}
