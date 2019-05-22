<?php

use Illuminate\Database\Seeder;

class userroleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('user_roles')->insert([
            ['role'=>'Super Admin'],
            ['role'=>'Admin'],
            ['role'=>'User'],
        ]);
    }
}
