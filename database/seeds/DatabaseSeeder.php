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
        $this->call(AssociationsTableSeeder::class);
        $this->call(RolesTableSeeder::class);
        $this->call(UsersTableSeeder::class);
        $this->call(RessourcesTableSeeder::class);
        $this->call(EditionsTableSeeder::class);
        $this->call(ReferencesTableSeeder::class);
    }
}
