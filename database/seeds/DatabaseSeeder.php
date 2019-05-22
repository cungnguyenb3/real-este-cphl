<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(propertyTypeTableSeeder::class);
        $this->call(userRoleTableSeeder::class);
        $this->call(userTableSeeder::class);
        $this->call(postTableSeeder::class);
        
    }
}
