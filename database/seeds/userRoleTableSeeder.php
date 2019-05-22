<?php

use Illuminate\Database\Seeder;

class userRoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('user_roles')->insert([
        	['role' => 'Superadmin'],
        	['role' => 'Admin'],
        	['role' => 'User']
        ]);
    }
}
