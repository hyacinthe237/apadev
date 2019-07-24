<?php

use Illuminate\Database\Seeder;
use App\Models\Reference;


class ReferencesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Reference::create([
            'association_id' => 1,
            'title'          => 'Accompagnement de la commune de Meyomessi dans l’appropriation du processus de décentralisation et de la gouvernance locale',
            'slug'           => 'accompagnement-de-la-commune-de-meyomessi-dans-l-appropriation-du-processus-de-decentralisation-et-de-la-gouvernance-locale',
            'location'       => 'Meyomessi - Cameroun',
            'year'           => 2013,
            'description'    => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
            'commanditaires' => 'ADE,ADC'
        ]);


        // factory(App\Models\Reference::class, 30)->create();
    }
}
