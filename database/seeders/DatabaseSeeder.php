<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {   //calls the seeder class from the role and user seeder
        $this->call(RoleSeeder::class);
        $this->call(UserSeeder::class);
    }
}
