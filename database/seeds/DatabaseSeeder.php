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
        // $this->call(UsersTableSeeder::class);
        $this->call(userroleTableSeeder::class);
        $this->call(userTableSeeder::class);
        $this->call(propertyTypeTableSeeder::class);
    }
}
