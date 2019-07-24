<?php

use Illuminate\Database\Seeder;
use App\Models\Association;


class AssociationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Association::create([
            'number'       => 1000000,
            'short_name'   => 'APADEV',
            'long_name'    => 'APADEV',
            'slug'         => 'apadev',
            'location'     => 'Sa’a - Cameroun',
            'po_box'       => '143 – Sa’a',
            'phone_1'      => '699 85 60 21',
            'phone_2'      => '699 85 60 21',
            'email'        => 'apadev_05@yahoo.fr',
            'address'      => 'B.P. 143 Sa’a',
            'is_active'    => 1,
            'presentation' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.'
        ]);


        // factory(App\Models\Association::class, 30)->create();
    }
}
