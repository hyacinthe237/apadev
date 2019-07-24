<?php

use Illuminate\Database\Seeder;
use App\Models\User;


class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'role_id'        => 1,
            'association_id' => 1,
            'number'         => 1000000,
            'email'          => 'admin@apadev.com',
            'cni'            => '107546579',
            'password'       => bcrypt('pass'),
            'firstname'      => 'Jean Bosco',
            'lastname'       => 'ONGUENE',
            'fonction'       => 'Président Exécutif',
            'profession'     => 'Agro Economiste',
            'address'        => 'B.P. 143 Sa’a',
            'sex'            => 'Masculin',
            'dob'            => '1971-06-24',
            'is_active'      => 1,
            'remember_token' => str_random(100)
        ]);


        // factory(App\Models\User::class, 30)->create();
    }
}
