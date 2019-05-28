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
        // $this->call(propertyTypeTableSeeder::class);
        // $this->call(userroleTableSeeder::class);
        //$this->call(userTableSeeder::class);
        $this->call(postTableSeeder::class);
        //$this->call(imageTableSeeder::class);
        //$this->call(slideTableSeeder::class);
        //$this->call(contactAgentTableSeeder::class);
    }
}
