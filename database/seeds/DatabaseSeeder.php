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
        $this->call([
            PrivilegeSeeder::class,
            RoleSeeder::class,
            UserSeeder::class,
            SettingSeeder::class,
            StatusSeeder::class,
            CMSSeeder::class,
        ]);
    }
}
